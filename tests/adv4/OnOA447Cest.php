<?php
use Page\MainPage;

//haven't found requirements to this tests

class OnOA447Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::VISIT_SITE_BUT_4);
        $I->wait(3);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
    }
    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }
    public function verifyEmailConExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .con and click submit, ad 4');
        $I->fillField('email_address', 'random@aol.con');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter');
    }
    public function verifyEmailCpnExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cpn and click submit, ad 4');
        $I->fillField('email_address', 'random@aol.cpn');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter');
    }
    public function verifyEmailCinExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cin and click submit, ad 4');
        $I->fillField('email_address', 'random@aol.cin');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter');
    }
    public function verifyEmailCokExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cok and click submit, ad 4');
        $I->fillField('email_address', 'random@aol.cok');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter');
    }
}