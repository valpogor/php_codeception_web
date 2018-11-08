<?php
use Page\MainPage;

//haven't found requirements, there is NO email validation

class OnOA464Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_5_SEELIST_LOC);
        $I->wait(2);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(MainPage::BUT1);
        $I->click(MainPage::BUT1_1);
        $I->click(MainPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
    }
    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }
    public function verifyEmailConExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .con and click submit, ad 5');
        $I->fillField('Email Address', 'random@aol.con');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
    public function verifyEmailCpnExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cpm and click submit, ad 5');
        $I->fillField('Email Address', 'random@aol.cpm');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
    public function verifyEmailCinExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cin and click submit, ad 5');
        $I->fillField('Email Address', 'random@aol.cin');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter ');
    }
    public function verifyEmailCokExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cok and click submit, ad 5');
        $I->fillField('Email Address', 'random@aol.cok');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
}