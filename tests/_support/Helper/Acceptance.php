<?php
namespace Helper;

use Codeception\Module\WebDriver;
use Codeception\Exception\ModuleException;

class Acceptance extends \Codeception\Module
{
    public $mobileEmulation = true;

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
     * Method is get current url
     *
     * @return string
     */
    public function getCurrentUrl(): string
    {
        return $this->getDriver()->executeJS("return location.href");
    }

    /**
     * Method add new value to current url
     *
     * @param string $value
     *
     * @return string
     */
    public function addGetParamToUrl(string $value): string
    {
        return $this->getCurrentUrl() . $value;
    }

    /**
     * Method get Js errors from url
     *
     * @throws ModuleException
     * @throws \Exception
     */
    public function dontSeeJsError()
    {
        if (!$this->hasModule('WebDriver') && !$this->hasModule('Selenium2')) {
            throw new \Exception('PageWait uses the WebDriver. Please be sure that this module is activated.');
        }
        // Use WebDriver
        if ($this->hasModule('WebDriver')) {
            $driver = $this->getDriver();
            $webDriver = $driver->webDriver;
            $logs = $webDriver->manage()->getLog('browser');
            foreach ($logs as $log) {
                if ($log['level'] == 'SEVERE') {
                    throw new ModuleException($this, 'Some error in JavaScript: ' . json_encode($log));
                }
            }
        }
    }

    /**
     * Method Regex
     *
     * @param $pattern
     * @param $value
     */
    public function seeMatches($pattern, $value)
    {
        \PHPUnit_Framework_Assert::assertRegExp($pattern, $value);
    }

    /**
     * Method get text from title
     *
     * @return string
     */
    public function get_title(): string
    {
        $url = $this->getCurrentUrl();
        $str = file_get_contents($url);
        if (strlen($str) > 0) {
            $str = trim(preg_replace('/\s+/', ' ', $str));
            preg_match('/\<title\>(.*)\<\/title\>/i', $str, $title);
            return $title[1] ?? '';
        }

        return '';
    }

    /**
     * Method get text from href by key
     *
     * @param string $pattern
     * @param        $key
     *
     * @return string
     */
    public function get_text_href(string $pattern, $key): string
    {
        $url = $this->getCurrentUrl();
        $str = file_get_contents($url);
        if (strlen($str) > 0) {
            preg_match_all($pattern, $str, $rez);
            return $rez[1][$key] ?? '';
        }

        return '';
    }

    /**
     * Method get text from href
     *
     * @param string $pattern
     *
     * @return mixed
     */
    public function get_text_href_all(string $pattern): string
    {
        $url = $this->getCurrentUrl();
        $str = file_get_contents($url);
        if (strlen($str) > 0) {
            preg_match($pattern, $str, $rez);
            return $rez[0] ?? '';
        }

        return '';
    }

    /**
     * Method to check if an array value exists
     *
     * @param $array
     * @param $value
     */
    public function seeMatchesValueArray($array, $value)
    {
        if ($array == '') {
            $array = '1';
        }
        if ($value == '') {
            $value = '1';
        }
        if ($array || $value > 0) {
            if (stristr($array, $value)) {
                $this->getDriver()->dontSeeInTitle($array);
                return;
            }
            $this->getDriver()->seeInTitle($array);
        }
    }

    /**
     * Method to compare 2 value if null skip
     *
     * @param $string
     * @param $string1
     */
    public function seeMatchesValueValue($string, $string1)
    {
        if ($string || $string1 > 0) {
            if (strcasecmp($string, $string1) == 0) {
                $this->getDriver()->dontSeeInTitle($string);
                return;
            }
            $this->getDriver()->seeInTitle($string);
        }
    }

    /**
     * Method to compare 2 value
     *
     * @param $a
     * @param $b
     */
    public function seeMatchesAB($a, $b)
    {
        if ($a == '') {
            $a = '1';
        }
        if ($b == '') {
            $b = '1';
        }
        $this->assertTrue($a === $b);
    }

    /**
     * Method to compare 2 value
     *
     * @param $a
     * @param $b
     */
    public function seeNotMatchesAB($a, $b)
    {
        $this->assertTrue($a !== $b);
    }

    /**
     * Method to check if 2 value not match
     *
     * @param $value1
     * @param $value2
     */
    public function seeNotMatchesValues($value1, $value2)
    {
        if ($value1 == '') {
            $value1 = '1';
        }
        if ($value2 == '') {
            $value2 = '2';
        }
        if (stristr($value1, $value2)) {
            $this->getDriver()->seeInTitle($value1);
            return;
        }
        $this->getDriver()->dontSeeInTitle($value2);
    }

    /**
     * Method to find, replace in current url and reload page
     *
     * @param $find
     * @param $replace
     */
    public function reloadUrlWithNewValue($find, $replace)
    {
        $string = $this->getCurrentUrl();
        if (strpos($string, $find) !== false) {
            $url = str_replace($find, $replace, $string);
            $this->getDriver()->amOnUrl($url);
        }
    }

    /**
     * Method to find phone in url by regex
     *
     * @param $pattern
     * @return bool
     */
    public function get_phone_url_regex($pattern)
    {
        $url = $this->getCurrentUrl();
        $result = preg_match($pattern, $url, $matches);
        if (false !== $result) {
            return $matches[1];
        }
        return false;
    }

    /**
     * Method to find phone in url by regex
     *
     * @param $pattern
     * @param $replacement
     */
    public function find_replace_reload_url_regex($pattern, $replacement)
    {
        $url = $this->getCurrentUrl();
        $result = preg_replace($pattern, $replacement, $url, 1);
        if (false !== $result) {
            $this->getDriver()->amOnUrl($result);
        }
    }

    /**
     * Method to generate url with new value
     *
     * @param $oldurl
     * @param $value
     *
     * @return string
     */
    public function amOnUrlWithAddValue($oldurl, $value): string
    {
        return $oldurl . $value;
    }

    /**
     * Method to generate random phone
     *
     * @return int
     */
    public function randomPhone(): int
    {
        return rand(3102001111, 3104999999);
    }

    /**
     * @return string
     */
    public function randomSubid(): string
    {
        return rand(0, 999999999) . '..' . rand(0, 999999999);
    }

    /**
     * Method to generate random subid
     *
     * @return int
     */
    public function randomCkmid(): int
    {
        return rand(0, 999999);
    }
}
