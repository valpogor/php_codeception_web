<?php

namespace Page;

class MainPage
{
    // include url of current page
    public static $URL = '';
    public static $URLMAINPAGE = 'https:///';
    public $mobileEmulation = true;
    const COMP_URL="https:////";
    const DEALS_URL='https:///home-security-deals-and-special-offers/';
    const RATE_URL='https:///how-we-rate/';
    const BUYER_URL='https:///home-security-101/';
    const BLOG_URL='https:///blog/';
    const REVIEW_PAGE_FULL = 'https:///category/reviews/';
    const LIST_URL = 'https:///list/';
    const URL_S1 = 'https:///?s1=111';
    const URL_CLICK_BUT_VISIT_SITE_FRONT = '/images/logos/';
    const THANK_YOU_PAGE_A1 = 'https:///ty/89/thank-you.php';
    const THANK_YOU_PAGE_A2 = 'http:///thank-you.php';
    const THANK_YOU_PAGE_A3 = 'https:///v8/thank-you.php';
    const THANK_YOU_PAGE_A4 = 'https:///ty/17/thank-you.php';
    const THANK_YOU_PAGE_A5 = 'https:///ty/v23/thank-you.php';
    const URL_A1 = 'https:///88/?';
    const URL_A2 = 'http:///v39/';
    const URL_A3 = 'https:///';
    const URL_A4 = 'https:///46/?cookiereset=1';
    const URL_A5 = 'https:///';
    const DUGOUT_URL='http:///';

    const data= "https:///";

    //    sub url
    const COMP_SUB="//";
    const DEALS_SUB='/home-security-deals-and-special-offers/';
    const HOME_SEC_SUB='/home-security-101/';
    const INTERVIEWS_SUB='/category/interviews/';
    const VIDEOS_SUB='/category/videos/';
    const RATE_SUB='/how-we-rate/';
    const BUYERS_SUB='/mailing-list/';
    const ARTICLES_SUB='/blog/';
    const REVIEW_PAGE = '/category/reviews/';
    const LIST_SUB_URL = '/list/';

    //phones locator for Check OffHours
    const PHONES_LOC1 = '//*[@class="number"]/a';
    const PHONES_LOC2 = '//*[@class="number_wrap"]';
    const PHONES_LOC3 = '//*[@class="hdr__phone__number"]';
    const PHONES_LOC4 = '//*[@class="phone_number"]';
    const PHONES_LOC5 = '//*[@class="number"]';

    //const header
    const LOGO = '(//*[@class="logo"])[1]';
    const TITLE= '/html/head/title';
    const FOOTER = '//*[@class="copyright-container"]';
    const FOOTER_TEXT = "(//*[contains(text(),'adv1')])[3]";
    const REVIEWS = "*//a[contains(text(),'Reviews')]";
    const REVIEWS_SUB = "(//*[@class='menu_item'])[2]";
    const COM_COMPARISONS2 = "*//a[contains(text(),'Company Comparisons')]";
    const DEALS2 = "*//a[contains(text(),'Deals')]";
    const DEALS = "(//*[@class='menu_item'])[5]";
    const COM_COMPARISONS = '//*[@id="main_menu"]/a[1]';
    const COM_COMPARISONS_S1 = '(//*[@id="comparenav"])[1]';
    const COM_HOW_WE_RATE_S1 = '(//a[text()="How We Rate"])[1]';
    const DEALS3 = '(//*[@id="main_menu"]//a)[2]';
    const SEELIST = '//*[@class="see_list"]';
    const HOME_SEC = "*//a[contains(text(),'Home Security 101')]";
    const INTERVIEWS = "*//a[contains(text(),'Interviews')]";
    const VIDEOS = "*//a[contains(text(),'Videos')]";
    const RATE = "*//a[contains(text(),'How We Rate')]";
    const ARTICLES = "*//a[contains(text(),'Articles')]";
    const FACEBOOK = "(//*[@class='menu_social']//a)[1]";
    const GOOGLE = "(//*[@class='menu_social']//a)[2]";
    const TWITTER = "(//*[@class='menu_social']//a)[3]";
    const BUYERS_GUIDE_LOC = "*//a[contains(text(),'Buyer’s Guide')]";
    const BLOG_LOC = "*//a[contains(text(),'Blog')]";

//    Dynamic Ring Pool
    const VISIT_SITE_BUT_1_DYN = '(//*[contains(@href, "tel")])[1]';
    const VISIT_SITE_BUT_2_DYN = '(//*[contains(@href, "tel")])[2]';
    const VISIT_SITE_BUT_3_DYN = '(//*[contains(@href, "tel")])[3]';
    const VISIT_SITE_BUT_4_DYN = '(//*[contains(@href, "tel")])[4]';
    const VISIT_SITE_BUT_5_DYN = '(//*[contains(@href, "tel")])[5]';

    // THANK YOU PAGE BUTTONS
    const THANK_YOU_PAGE_LOC_B1 = '//*[@id="prop-type"]/a[1]/div/span/span[2]';
//    const THANK_YOU_PAGE_LOC_B1 = '//*[@class="number_text"]';
    const THANK_YOU_PAGE_LOC_B2 = '(//*[@class="right darkgreen"])[1]';
    const THANK_YOU_PAGE_LOC_B3 = '(//*[@class="hdr__phone__number"])[1]';
    const THANK_YOU_PAGE_LOC_B4 = '(//*[@class="orange-number"])[1]';
    const THANK_YOU_PAGE_LOC_B5 = '(//*[@class="right darkgreen"])[1]';


    //    Review page ?sl=
    const REVIEW_S1_B1 = '(//*[@class="phone-number"])[1]';
    const REVIEW_S1_B2 = '(//*[@class="phone-number"])[2]';
    const REVIEW_S1_B3 = '(//*[@class="phone-number"])[3]';
    const REVIEW_S1_B4 = '(//*[@class="phone-number"])[4]';
    const REVIEW_S1_B5 = '(//*[@class="phone-number"])[5]';
    //     Comparison page ?sl=
    const COMP_S1_B1 = '//*[@class="phonecn dp_phone_container_5"]';
    const COMP_S1_B2 = '//*[@class="phonecn dp_phone_container_1"]';
    const COMP_S1_B3 = '//*[@class="phonecn dp_phone_container_3"]';
    const COMP_S1_B4 = '//*[@class="phonecn dp_phone_container_4"]';
    const COMP_S1_B5 = '//*[@class="phonecn dp_phone_container_999"]';

    //    Phones from Review
    const REVIEW_PHONES_LOC1 = '(//*[@class="callbox"]/span[2])[1]';
    const REVIEW_PHONES_LOC2 = '(//*[@class="callbox"]/span[2])[2]';
    const REVIEW_PHONES_LOC3 = '(//*[@class="callbox"]/span[2])[3]';
    const REVIEW_PHONES_LOC4 = '(//*[@class="callbox"]/span[2])[4]';
    const REVIEW_PHONES_LOC5 = '(//*[@class="callbox"]/span[2])[5]';

    // FORM submit button
    const SUBMIT= '/*[@id="form"]/button';
    const SUBMIT_FORM_AD1= "//*[@class='orangecta']";
    const SUBMIT_FORM_AD2= "//*[@class='orangecta ']";
    const SUBMIT_FORM_AD4= "//*[@class='ctabtn green-grad']";
    const SUBMIT_FORM_AD_ERROR= "//*[@class='hovermessage_themessage']";

    // FORM fields ads4
    const FIRST_NAME_AD4="//*[@id='first_name']";
    const LAST_NAME_AD4="//*[@id='last_name']";
    const EMAIL_AD4="//*[@id='email_address']";
    const ZIP_AD4="//*[@id='zipcode']";
    const PHONE_AD4="//*[@id='contact_phone']";
    const SUBMIT_AD4="button[type='submit']";

     // sub page deals
    const VISIT_SITE_BUT_1 = '(//*[@class="ctabtn"])[1]';
    const VISIT_SITE_BUT_2 = '(//*[@class="ctabtn"])[2]';
    const VISIT_SITE_BUT_3 = '(//*[@class="ctabtn"])[3]';
    const VISIT_SITE_BUT_4 = '(//*[@class="ctabtn"])[4]';
    const VISIT_SITE_BUT_5 = '(//*[@class="ctabtn"])[5]';

    // sub page review
    const VISIT_SITE_REV_BUT_1 = '(//*[@class="cta-btn"])[2]';
    const VISIT_SITE_REV_BUT_2 = '(//*[@class="cta-btn"])[2]';
    const VISIT_SITE_REV_BUT_3 = '(//*[@class="cta-btn"])[2]';
    const VISIT_SITE_REV_BUT_4 = '(//*[@class="cta-btn"])[2]';
    const VISIT_SITE_REV_BUT_5 = '(//*[@class="cta-btn"])[2]';

    // Regex for parsing ADs box
    const ADS_BOX_REGEX = '/(?<=window.advertisers = {).*(?="};)/';
    const SUBID_REGEX = '/(?<=&subid=).{0,8}(..){0,8}(?=&)/';
    const SUBID_REGEX_ADV3 = '/(?<=&subid=)(.*)(?=&affkey)/';
    const CKMID_REGEX = '/(?<=ckmid=).{6}/';
//    const ALL_URLS_LOC = '//script[contains(.,"window.advertisers")]';


    //Buttons Click outs Visit Site from Comparison
    const BUT_CLICK_VISIT_FRONT = '(//*[@class="ojbtn"])[1]';
    const BUT_CLICK_VISIT_ADT = '(//*[@class="ojbtn"])[2]';
    const BUT_CLICK_VISIT_PROTECT = '(//*[@class="ojbtn"])[3]';
    const BUT_CLICK_VISIT_VIVINT = '(//*[@class="ojbtn"])[4]';
    const BUT_CLICK_VISIT_LIFE = '(//*[@class="ojbtn"])[5]';

    //Buttons Click outs Visit Site from Comparison
    const BUT_COMP_READ_REV_B1 = '(//*[@class="reviewlinks"])[1]';
    const BUT_COMP_READ_REV_B2 = '(//*[@class="reviewlinks"])[2]';
    const BUT_COMP_READ_REV_B3 = '(//*[@class="reviewlinks"])[3]';
    const BUT_COMP_READ_REV_B4 = '(//*[@class="reviewlinks"])[4]';
    const BUT_COMP_READ_REV_B5 = '(//*[@class="reviewlinks"])[5]';

    //Buttons Read Full Review from review page
    const BUT_REVIEW_READ_REV_B1 = '(//*[@class="btnbox"]//span)[1]';
    const BUT_REVIEW_READ_REV_B2 = '(//*[@class="btnbox"]//span)[5]';
    const BUT_REVIEW_READ_REV_B3 = '(//*[@class="btnbox"]//span)[9]';
    const BUT_REVIEW_READ_REV_B4 = '(//*[@class="btnbox"]//span)[13]';
    const BUT_REVIEW_READ_REV_B5 = '(//*[@class="btnbox"]//span)[17]';


    //Buttons Click outs Visit Site from Comparison
    const BUT_SEE_LIST_READ_REV_B1 = '(*//a[contains(text(),"See Review")])[1]';
    const BUT_SEE_LIST_READ_REV_B2 = '(*//a[contains(text(),"See Review")])[2]';
    const BUT_SEE_LIST_READ_REV_B3 = '(*//a[contains(text(),"See Review")])[3]';
    const BUT_SEE_LIST_READ_REV_B4 = '(*//a[contains(text(),"See Review")])[4]';
    const BUT_SEE_LIST_READ_REV_B5 = '(*//a[contains(text(),"See Review")])[5]';

    //Buttons Click outs Visit Site from Comparison
    const BUT_SEE_LIST_OURS_B1 = '(//*[contains(text(),"Call Center Hours:")])[1]';
    const BUT_SEE_LIST_OURS24_B1 = '(//*[@class="link_container"])[1]//text()[contains(.,"24 Hours")]';
    const BUT_SEE_LIST_OURS24_B2 = '(//*[@class="link_container"])[2]//text()[contains(.,"24 Hours")]';
    const BUT_SEE_LIST_OURS24_B3 = '(//*[@class="link_container"])[3]//text()[contains(.,"24 Hours")]';
    const BUT_SEE_LIST_OURS24_B4 = '(//*[@class="link_container"])[4]//text()[contains(.,"24 Hours")]';
    const BUT_SEE_LIST_OURS24_B5 = '(//*[@class="link_container"])[5]//text()[contains(.,"24 Hours")]';

    //Buttons Homeowner ads 5
    const BUT1 = '(//*[@id="homeowner"])[1]';
    const BUT2 = '(//*[@id="rental"])[2]';
    const BUT3 = '(//*[@id="commercial"])[3]';
    const BUT1_1 = '//*[@id="under1"]';
    const BUT1_2 = '//*[@id="1-2"]';
    const BUT1_3 = '//*[@id="over2"]';
    const BUT1_1_1 = '//*[@id="1D"]';
    const BUT1_2_2 = '//*[@id="2D"]';
    const BUT1_3_3 = '//*[@id="3D"]';

    //Buttons Homeowner ads 3
    const BUT1_AD5 = '(//*[@class="form__section__options"])[1]';
    const BUT2_AD5 = '(//*[@class="form__section__options"])[2]';
    const BUT3_AD5 = '(//*[@class="form__section__options"])[3]';
    const BUT1_1_AD5 = '(//*[@class="form__section__options__option"])[4]';
    const BUT1_2_AD5 = '(//*[@class="form__section__options__option"])[5]';
    const BUT1_3_AD5 = '(//*[@class="form__section__options__option"])[6]';
    const BUT1_1_1_AD5 = '(//*[@class="form__section__options__option"])[7]';
    const BUT1_2_2_AD5 = '(//*[@class="form__section__options__option"])[8]';
    const BUT1_3_3_AD5 = '(//*[@class="form__section__options__option"])[9]';

    //Buttons in Review section
    const BUT_REVIEW_FRONT = '(//*[@class="cta_btn"])[1]';
    const BUT_REVIEW_ADT = '(//*[@class="cta_btn"])[2]';
    const BUT_REVIEW_PROTECT = '(//*[@class="cta_btn"])[3]';
    const BUT_REVIEW_VIV = '(//*[@class="cta_btn"])[4]';
    const BUT_REVIEW_LIFE = '(//*[@class="cta_btn"])[5]';
    //Title in Review section
    const TITLE_REVIEW = '//*[@id="page"]/div[1]';
//    const TITLE_REVIEW_B2 = '(//*[@class="widget-title"])[2]';
//    const TITLE_REVIEW_B3 = '(//*[@class="widget-title"])[3]';
//    const TITLE_REVIEW_B4 = '(//*[@class="widget-title"])[4]';
//    const TITLE_REVIEW_B5 = '(//*[@class="widget-title"])[5]';

    //Buttons logo in Review section by Loc
    const BUT_1_REVIEW_LOC = "(//*[@id='hss_top5_picks']//img)[1]";
    const BUT_2_REVIEW_LOC = "(//*[@id='hss_top5_picks']//img)[2]";
    const BUT_3_REVIEW_LOC = "(//*[@id='hss_top5_picks']//img)[3]";
    const BUT_4_REVIEW_LOC = "(//*[@id='hss_top5_picks']//img)[4]";
    const BUT_5_REVIEW_LOC = "(//*[@id='hss_top5_picks']//img)[5]";
    //Buttons logo in Review section by Loc
    const BUT_1_REVIEW_LOC1 = "(//a[contains(@href,'go-to-pes')])[1]";
    const BUT_2_REVIEW_LOC2 = "//*[@id='hss_top5_picks']/div/div[1]/a[1]/img";
    const BUT_3_REVIEW_LOC3 = "(//a[@class='go-out'])[3]";
    const BUT_4_REVIEW_LOC4 = "(//a[@class='go-out'])[4]";
    const BUT_5_REVIEW_LOC5 = "(//a[@class='go-out'])[5]";

    //Buttons logo in SEELIST section by Logo
    const BUT_1_SEELIST_LOC = "(//a[@class='go-out'])[1]";
    const BUT_2_SEELIST_LOC = "(//a[@class='go-out'])[2]";
    const BUT_3_SEELIST_LOC = "(//a[@class='go-out'])[9]";
    const BUT_4_SEELIST_LOC = "(//a[@class='go-out'])[4]";
    const BUT_5_SEELIST_LOC = "(//a[@class='go-out'])[17]";

    //Regex for urls title, phones
    const BUT_REVIEW_REG = "/Clickout', '(.*?).....target=/";
    const BUT_JSON_REGEX = '/(?<=: ")(.+?)(?=")/';
    const BUT_PHONE_REGEX = '/(?<=&phone=)(.+?)(?=&subid)/';
    const PHONE_LINK_SEE_REVIEW="//span[@class='phone']";
    const PHONE_REGEX= '/\d{3}-\d{3}-\d{4}/';


    //Buttons in Review section sub page
    const BUT_VISIT_SITE = '*//span[contains(text(),"Visit Site")]';
    const BUT_VISIT_WEBSITE_1 = '(*//span[contains(text(),"Visit Website")])[1]';
    const BUT_VISIT_WEBSITE_2 = '(*//span[contains(text(),"Visit Website")])[2]';

    // const url add new value
    const URL_ADD_NEW_VALUE_TIME = '?time=2400';
    const URL_ADD_NEW_VALUE_TIME_ = '&time=2400';
    const CKMID = '&ckmid=11111';
    const URL_ADD_NEW_VAL_DYN_R_FIND = '&s1=';
    const URL_ADD_NEW_VAL_DYN_REPL = '?s1=1234';
    const URL_ADD_NEW_VALUE_FRONT_PHONE='888-888-8888';
    const URL_ADD_NEW_VALUE_FRONT_PHONE_TY='?phone= 888-888-8888&ty=1t1';
    const URL_ADD_NEW_VALUE_DEVICE_T = '&device=t';
    const URL_ADD_NEW_VALUE_DEVICE_TF = '&device=';
    const URL_ADD_NEW_VALUE_DEVICE_M = '&device=m';
    const URL_ADD_NEW_VALUE_DEVICE_MF = '&device=';
    const URL_ADD_NEW_VALUE_LEAD_SUB = 'istest=true';
    const URL_ADD_NEW_VALUE_SUBID = '&subid=2222';
    const URL_ADD_COOKIE_RESET = '&cookiereset=1';
    const URL_ADD_COOKIE_CLEAR = '&clearcookies=true';
    const XXTRUSTEDFORMTOKEN = 'https%3A%2F%2Fcert.trustedform.com%2F938be7045fab57fc6c2f3d5234163cce7c75720a';
    const XXTRUSTEDFORMCERTURL ='https%3A%2F%2Fcert.trustedform.com%2F938be7045fab57fc6c2f3d5234163cce7c75720a';
    const ISTEST = '&istest=true';
    const XXTRUSTEDFORMTOKEN_LOC= '//*[@id="xxTrustedFormToken_0"]';
    const XXTRUSTEDFORMCERTURL_LOC = '//*[@name="xxTrustedFormCertUrl"]';
    const XXTRUSTEDFORMTOKEN_REG= '/(?<=xxTrustedFormToken_0)(.+?)(?=">)/';

    //const footer
    const LOGO_FOOTER = '(//*[@class="logo"])[1]';
    const TERMS = '//*[contains(text(),"Terms")]';
    const TERMS_URL = '/terms-conditions.php';

    //emails settings
    const EMAIL = 'onotest@centerfield-media.com';
    const EMAILTO = 'onotest@centerfield-media.com';
    const SMTP = 'smtp.emailsrvr.com';
    const PORT = '25';
    const PORT_ALT = '587';
    const USERNAME = 'onotest@centerfield-media.com';
    const PASSWORD = '0noTest123';
    const SUBJECT ='';
    const MSG ='';

    //24 hours
    const HOURS_AD1 = '//*[@class="call-center dp_phone_container_5"]';
    const HOURS_AD2 = '//*[@class="call-center dp_phone_container_1"]';
    const HOURS_AD3 = '//*[@class="call-center dp_phone_container_3"]';
    const HOURS_AD4 = '//*[@class="call-center dp_phone_container_4"]';
    const HOURS_AD5 = '//*[@class="call-center dp_phone_container_999"]';

    //form
    const FORM_1_ADV3= '//*[@id="first_name1"]';
    const FORM_1_ADV1= '//*[@class="form_container"]';
    const FORM_1_ADV2= '//*[@class="form_bg"]';

    // Logo box for button Visit Site Deals
//    const VISIT_SITE_BUT_1_TEXT = "(//*[@class='logo-box'])[1]//a";
//    const VISIT_SITE_BUT_2_TEXT = "(//*[@class='logo-box'])[2]//a";
//    const VISIT_SITE_BUT_3_TEXT = "(//*[@class='logo-box'])[3]//a";
//    const VISIT_SITE_BUT_4_TEXT = "(//*[@class='logo-box'])[4]//a";
//    const VISIT_SITE_BUT_5_TEXT = "(//*[@class='logo-box'])[5]//a";

    // Logo box for button Visit Site List
//    const VISIT_SITE_LIST_BUT_1_TEXT = "(//*[contains(text(),'Click to')])[1]";
//    const VISIT_SITE_LIST_BUT_2_TEXT = "(//*[contains(text(),'Click to')])[2]";
//    const VISIT_SITE_LIST_BUT_3_TEXT = "(//*[contains(text(),'Click to')])[3]";
//    const VISIT_SITE_LIST_BUT_4_TEXT = "(//*[contains(text(),'Click to')])[4]";
//    const VISIT_SITE_LIST_BUT_5_TEXT = "(//*[contains(text(),'Click to')])[5]";

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
