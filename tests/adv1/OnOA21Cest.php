<?php

use Page\MainPage;
use Page\FrontpointPage;

class OnOA21Cest
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
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function verifyEmptyForm(AcceptanceTester $I)
    {
        $I->wantTo('Verify empty form submit ad 1');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Phone, First Name, Last Name, and Email Address!', '//*[@id="hovermessage"]/div');
    }

    public function verifyFirstNameFilledOnly(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter First Name only and keep All the other fields empty, ad 1');
        $I->fillField('First Name', 'mr random');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Phone, Last Name, and Email Address!', '//*[@id="hovermessage"]/div');
    }

//
    public function verifyFirstLastNameFilledOnly(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter First and Last Name only and keep All the other fields empty, ad 1');
        $I->fillField('First Name', 'random');
        $I->fillField('Last Name', 'random');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Phone, and Email Address!', '//*[@id="hovermessage"]/div');
    }

    public function verifyFirLasNamePhoneFilled(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter First,Last Name, Phone only and keep All the other fields empty, ad 1');
        $I->fillField('First Name', 'random');
        $I->fillField('Last Name', 'random');
        $I->fillField('Phone Number', '3107007788');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Email Address!', '//*[@id="hovermessage"]/div');
    }

    public function verifyLettersToPhone(AcceptanceTester $I)
    {
        $I->wantTo('Verify form:  Enter Letters to Phone field , ad 1');
        $I->fillField('Phone Number', 'random');
        $I->waitForElementVisible('#form > div.form_container > div:nth-child(2) > span.validation-text');
        $I->canSee('Please enter a valid #.','#form > div.form_container > div:nth-child(2) > span.validation-text');
    }

    public function verifyInvalidEmail(AcceptanceTester $I)
    {
        $I->wantTo('Verify form: Enter email without @ and click submit, ad 1');
        $I->fillField('First Name', 'random');
        $I->fillField('Last Name', 'random');
        $I->fillField('Phone Number', '3107007788');
        $I->fillField('Email Address', 'randomaol.com');
        $I->waitForElementVisible('#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->canSee('Please enter a valid email.','#form > div.form_container > div:nth-child(3) > span.validation-text');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Email Address!', '//*[@id="hovermessage"]/div');
    }
}