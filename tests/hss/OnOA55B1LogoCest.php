<?php
use Page\MainPage;


class OnOA55B1LogoCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
//        $I->amOnPage(MainPage::$URL);
//        $I->wait(2);
//        $I->click(MainPage::SEELIST);
//        $I->wait(2);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify clicking the Logo 1 Ads');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,0);
        $I->click(MainPage::BUT_1_SEELIST_LOC);
        $I->wait(5);
        $I->switchToWindow();
        $name_exp = $I->get_title();
        $I->see($name);
    }
}
