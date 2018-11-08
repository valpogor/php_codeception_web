<?php
namespace Helper;
use Codeception\Module\WebDriver;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Unit extends \Codeception\Module
{
    /**
     * return web driver
     *
     * @return WebDriver
     */
    protected function getDriver(): WebDriver
    {
        return $this->getModule("WebDriver");
    }
    /**
     * [!] Method is get current url.
     */

    public function getCurrentUrl()
    {
        return $this->getDriver()->executeJS("return location.href");
    }

    /**
     * [!] Method add new value to current url.
     */
    public function addGetParamToUrl($value)
    {
        $curl = $this->getCurrentUrl();
        $curl .=  $value;
        return $curl;
    }

    /**
     * [!] Method get Js errors from url .
     */

    public function getJsLog()
    {
        $wb = $this->getModule("WebDriver");
        $logs = $wb->webDriver->manage()->getLog("browser");
        return $logs;
    }
    /**
     * [!] Method get Js errors from url .
     */

    public function dontSeeJsError()
    {
        if (!$this->hasModule('WebDriver') && !$this->hasModule('Selenium2')) {
            throw new \Exception('PageWait uses the WebDriver. Please be sure that this module is activated.');
            $logs = $this->webDriver->manage()->getLog('browser');
            foreach ($logs as $log) {
                if ($log['level'] == 'SEVERE') {
                    throw new ModuleException($this, 'Some error in JavaScript: ' . json_encode($log));
                }
            }
        }
        // Use WebDriver
        if ($this->hasModule('WebDriver')) {
            $this->webDriverModule = $this->getModule('WebDriver');
            $this->webDriver = $this->webDriverModule->webDriver;
            $logs = $this->webDriver->manage()->getLog('browser');
            foreach ($logs as $log) {
                if ($log['level'] == 'SEVERE') {
                    throw new ModuleException($this, 'Some error in JavaScript: ' . json_encode($log));
                }
            }
        }
    }

    /**
     * [!] Method Regex .
     */

    public function seeMatches($pattern, $value)
    {
        \PHPUnit_Framework_Assert::assertRegExp($pattern, $value);
    }

    /**
     * [!] Method get text from title .
     */
    public function get_title(){
        $url =  $this->getCurrentUrl();
        $str = file_get_contents($url);
        if(strlen($str)>0){
            $str = trim(preg_replace('/\s+/', ' ', $str));
            preg_match('/\<title\>(.*)\<\/title\>/i',$str,$title);
            return $title[1];
        }
    }

    /**
     * [!] Method get text from href .
     */

    public function get_text_href($pattern, $key){
        $url =  $this->getCurrentUrl();
        $str = file_get_contents($url);
        if(strlen($str)>0) {
            preg_match_all($pattern, $str, $rez);
            return ($rez[1][$key]);
        }
    }

    /**
     * [!] Method to check if an array value exists.
     */
    public function seeMatchesValueArray($array, $value){
        if (stristr($array, $value)){
            return $this->getDriver()->dontSeeInTitle($array);}
        else{
            return $this->getDriver()->seeInTitle($array);
        }
    }

    /**
     * [!] Method to check if 2 value not match.
     */
    public function seeNotMatchesValues($value1, $value2){
        if (stristr($value1, $value2)){
            return $this->getDriver()->seeInTitle($value1);}
        else{
            return $this->getDriver()->dontSeeInTitle($value2);
        }
    }

    /**
     * [!] Method to find, replace in current url and reload page.
     */
    public function reloadUrlWithNewValue($find,$replace){
        $string=$this->getCurrentUrl();
        if(strpos($string, $find) !== false )
        {
            $url=str_replace($find,$replace,$string);
            $this->getDriver()->amOnUrl($url);
        }else {
        }
    }

    /**
     * [!] Method to find phone in url by regex
     */
    public function get_phone_url_regex($pattern){
        $url=$this->getCurrentUrl();
        $result = preg_match($pattern, $url, $matches);
        if (false !== $result) {
            return $matches[1];
        }
        return false;
    }
}
