<?php
/**
 * Created by PhpStorm.
 * User: val
 * Date: 5/7/18
 * Time: 10:27 AM
 */

namespace Page;


class FrontpointPage extends MainPage
{
    // include url of current page
    public static $URL = '';

    //const header
    const LOGO = '//*[@class="logo"]';
    const PHONE1LOC = '(//*[@class="number"]/a)[1]';
    const PHONE2LOC = '(//*[@class="number"]/a)[2]';
    const PHONES_LOC = '//*[@class="number"]/a';
    const PHONE1 = 855 - ;
    const PHONE2 = 866 - ;
    const BUT1 = '//*[@id="HOMEOWNER"]';
    const BUT2 = '//*[@id="RENTAL"]';
    const BUT3 = '//*[@id="COMMERCIAL"]';
    const BUT1_1 = '//*[@id="UNDER-1000-SF"]';
    const BUT1_2 = '//*[@id="1000-2000-SF"]';
    const BUT1_3 = '//*[@id="OVER-2000-SF"]';
    const BUT1_1_1 = '//*[@id="1DOOR"]';
    const BUT1_2_2 = '//*[@id="2DOORS"]';
    const BUT1_3_3 = '//*[@id="3DOORS"]';
    const SUBMIT = '//*[@class="orangecta"]';
    const POPUP = '//*[@class="exitX"]';
    const POPUP_TIME = '(//*[@class="epdata minutes"]/span)[1]';
    const POPUP_TIME_T = 25;



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