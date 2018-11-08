<?php
use Page\MainPage;


class OnOA434Cest
{
    public $mobileEmulation = true;
    public function _before(AcceptanceTester $I)
    {
        $I->emulationMobile('iPhone 8 Plus');
        $I->wantTo("Verify ADV 3 deivce=m parameter check on mobile device");
//        $I->resizeWindow(375,812);
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_3);
        $I->switchToWindow();
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function Test(AcceptanceTester $I)
    {
        $I->reloadUrlWithNewValue( MainPage::URL_ADD_NEW_VALUE_DEVICE_MF,MainPage::URL_ADD_NEW_VALUE_DEVICE_M);
//        $I->wait(30);
    }
}
