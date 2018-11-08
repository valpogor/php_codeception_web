<?php
use Page\MainPage;
use Page\FrontpointPage;

class OnOA82ComparisonCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::COMP_URL);
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
