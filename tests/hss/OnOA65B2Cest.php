<?php
use Page\MainPage;

class OnOA65B2Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::REVIEW_PAGE_FULL);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function ReviewButtonClickFront(AcceptanceTester $I)
    {
        $I->wantTo('Verify that clicking the Full Review site links for 2 Ads link out to the appropriate advertiser review page.');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,1);
        $phone=$I->grabTextFrom(MainPage::REVIEW_PHONES_LOC2);
        $I->click(MainPage::BUT_REVIEW_ADT);
        $phone_exp=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_1_DYN);
        $I->see($name);
        $I->seeMatchesValueArray($phone, $phone_exp);
//        echo $phone, $phone_exp;

    }
}
