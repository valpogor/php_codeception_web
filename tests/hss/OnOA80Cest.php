<?php
use Page\MainPage;

class OnOA80Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
//        $I->amOnUrl(MainPage::data);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyLandPage(AcceptanceTester $I)
    {
        $I->wantTo('Checking Console for Errors hss page');
        $I->dontSeeJsError();
    }
}
