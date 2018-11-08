<?php
use Page\MainPage;

class OnOA65B5Cest
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
        $I->wantTo('Verify that clicking the Full Review site links for 5 Ads link out to the appropriate advertiser review page.');
        $name = $I->get_text_href(MainPage::BUT_JSON_REGEX, 4);
        $phone = $I->grabTextFrom(MainPage::REVIEW_PHONES_LOC5);
        $I->click(MainPage::BUT_REVIEW_LIFE);
        $phone_exp = $I->grabTextFrom(MainPage::VISIT_SITE_BUT_1_DYN);
        $I->see($name);
        $I->seeMatchesValueArray($phone, $phone_exp);
    }
}
