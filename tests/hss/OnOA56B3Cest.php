<?php
use Page\MainPage;

class OnOA56B3Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function ReviewButtonClickFront(AcceptanceTester $I)
    {
        $I->wantTo('Verify that clicking the See Review site buttons for Ads 3 link out to the appropriate advertiser review page');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,2);
        $phone=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_3_DYN);
        $I->click(MainPage::BUT_SEE_LIST_READ_REV_B3);
        $phone_exp=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_1_DYN);
        $I->see($name);
        $I->seeMatchesValueArray($phone, $phone_exp);
    }
}
