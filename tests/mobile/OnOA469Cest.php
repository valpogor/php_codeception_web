<?php
use Page\MainPage;


class OnOA469Cest
{
    public $mobileEmulation = true;
    public function _before(AcceptanceTester $I)
    {
        $I->emulationMobile('iPhone 8 Plus');
        $I->wantTo("Verify ADV 5 deivce=t parameter check on mobile device");
//        $I->resizeWindow(375,812);
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_5);
        $I->switchToWindow();
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function Test(AcceptanceTester $I)
    {
        $I->reloadUrlWithNewValue( MainPage::URL_ADD_NEW_VALUE_DEVICE_TF,MainPage::URL_ADD_NEW_VALUE_DEVICE_T);
//        $I->wait(30);
    }
}
