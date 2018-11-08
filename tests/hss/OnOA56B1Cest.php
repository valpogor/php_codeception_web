<?php
use Page\MainPage;

class OnOA56B1Cest
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
        $I->wantTo('Verify that clicking the See Review site buttons for Ads 1 link out to the appropriate advertiser review page');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,0);
        $I->click(MainPage::BUT_SEE_LIST_READ_REV_B1);
        $name1 =  $I->grabTextFrom(MainPage::TITLE_REVIEW);
        $I->see($name);
        $I->seeMatchesValueArray($name, $name1);
    }
}
