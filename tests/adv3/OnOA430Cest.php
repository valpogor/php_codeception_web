<?php
use Page\MainPage;

//haven't found requirements to this tests
class OnOA430Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_3_SEELIST_LOC);
        $I->wait(2);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(MainPage::BUT1_AD5);
        $I->click(MainPage::BUT1_1_AD5);
        $I->click(MainPage::BUT1_1_1_AD5);
        $I->waitForElementVisible(MainPage::FORM_1_ADV3,10);
    }
    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }
    public function verifyEmailConExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .con and click submit, ad 3');
        $I->fillField('Email Address', 'random@aol.con');
        $I->click('submit');
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
    public function verifyEmailCpnExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cpn and click submit, ad 3');
        $I->fillField('Email Address', 'random@aol.cpn');
        $I->click('submit');
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
    public function verifyEmailCinExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cin and click submit, ad 3');
        $I->fillField('Email Address', 'random@aol.cin');
        $I->click('submit');
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter ');
    }
    public function verifyEmailCokExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cok and click submit, ad 3');
        $I->fillField('Email Address', 'random@aol.cok');
        $I->click('submit');
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
}