<?php
/**
 * Created by PhpStorm.
 * User: val
 * Date: 5/7/18
 * Time: 10:53 PM
 */

namespace Page;


class AdtPage extends MainPage
{
    public static $URL = '';
    //const header
    const URL_ADT = "http://";
    const LOGO = '//*[@class="logo"]';
    const PHONE1LOC = '(//*[@class="number_wrap"])[1]';
    const PHONE2LOC = '(//*[@class="number_wrap"])[2]';
    const PHONES_LOC = '//*[@class="number_wrap"]';
    const PHONEPOPUP = '//*[@class="header-number"]';
    const PHONE1 = 844 - ;
    const PHONE2 = 855 - ;
    const PHONE3 = 855 - ;
    const PHONE4 = 855-;

    const BUT1 = '(//*[@class="ctabtn main"])[1]';
    const BUT2 = '(//*[@class="ctabtn main"])[2]';
    const BUT3 = '(//*[@class="ctabtn main"])[3]';
    const BUT1T = '//*[@class="ctabtn main"]//text()[contains(.," Homeowner")]';
    const BUT2T = '//*[@class="ctabtn main"]//text()[contains(.," Rental")]';
    const BUT3T = '//*[@class="ctabtn main"]//text()[contains(.," Commercial")]';
    const BUT_1 = '//*[@id="ball_innerSeg_Image_1"]';
    const BUT_2 = '//*[@id="ball_innerSeg_Image_2"]';
    const BUT_3 = '//*[@id="ball_innerSeg_Image_3"]';
    const SUBMIT = '//*[@id="first_name"]';
//    const SUBMIT = '//*[@class="orangecta "]';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    /** @var \AcceptanceTester */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    public static function of(\AcceptanceTester $I)
    {
        return new static($I);
    }

    public static function route($param)
    {
        return static::$URL.$param;
    }
}