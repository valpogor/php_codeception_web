<?php
use Page\MainPage;
use Page\FrontpointPage;

class OnOA70Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyLandPage(AcceptanceTester $I)
    {
        $I->wantTo('Click-outs > How We Rate');
        $I->click(MainPage::COM_HOW_WE_RATE_S1);
        $I->seeInCurrentUrl(MainPage::RATE_SUB);
    }
}
