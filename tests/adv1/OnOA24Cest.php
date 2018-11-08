<?php

use Page\MainPage;
use Page\FrontpointPage;

class OnOA24Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_1);
        $I->switchToNextTab();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(FrontpointPage::BUT1);
        $I->click(FrontpointPage::BUT1_1);
        $I->click(FrontpointPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
        $I->fillField('First Name', 'Bill');
        $I->fillField('Last Name', 'Gates');
        $I->fillField('Phone Number', "3233303721");
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function verifyEmailConExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .con and click submit, ad 1');
        $I->fillField('Email Address', 'random@aol.con');
        $I->waitForElement('#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->canSee('Please enter a valid email.', '#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Email Address!', '//*[@id="hovermessage"]/div');
    }

    public function verifyEmailCpnExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cpn and click submit, ad 1');
        $I->fillField('Email Address', 'random@aol.cpm');
        $I->waitForElement('#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->canSee('Please enter a valid email.', '#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Email Address!', '//*[@id="hovermessage"]/div');
    }

    public function verifyEmailCinExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cin and click submit, ad 1');
        $I->fillField('Email Address', 'random@aol.cin');
        $I->waitForElement('#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->canSee('Please enter a valid email.', '#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Email Address!', '//*[@id="hovermessage"]/div');
    }

    public function verifyEmailCokExt(AcceptanceTester $I)
    {
        $I->wantTo('Verify email: Enter email input ending with .cok and click submit, ad 1');
        $I->fillField('Email Address', 'random@aol.cok');
        $I->waitForElement('#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->canSee('Please enter a valid email.', '#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Email Address!', '//*[@id="hovermessage"]/div');
    }
}