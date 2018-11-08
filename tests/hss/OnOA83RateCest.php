<?php
use Page\MainPage;

class OnOA83RateCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::RATE_URL);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyLandPage(AcceptanceTester $I)
    {
        $I->wantTo('Checking Console for Errors hss page');
        echo $I->cantSeeJsError();
    }
}
