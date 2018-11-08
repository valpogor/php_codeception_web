<?php
use Page\MainPage;


class OnOA485Cest
{
    public $mobileEmulation = true;
    public function _before(AcceptanceTester $I)
    {
        $I->emulationMobile('iPhone 8 Plus');
        $I->wantTo("Verify ADV 2 deivce=m parameter check on mobile device");
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_2);
        $I->switchToWindow();
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function Test(AcceptanceTester $I)
    {
        $I->reloadUrlWithNewValue( MainPage::URL_ADD_NEW_VALUE_DEVICE_MF,MainPage::URL_ADD_NEW_VALUE_DEVICE_M);
//        $I->wait(20);
    }
}
