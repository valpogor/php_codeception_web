<?php

use Page\MainPage;
use Page\FrontpointPage;

class OnOA426Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::VISIT_SITE_BUT_3);
        $I->switchToNextTab();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(MainPage::BUT1_AD5);
        $I->click(MainPage::BUT1_1_AD5);
        $I->click(MainPage::BUT1_1_1_AD5);
        $I->waitForElementVisible('//*[@id="part4"]');
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function verifyEmptyForm(AcceptanceTester $I)
    {
        $I->wantTo('verify empty field submit ad 3');
        $I->click('submit');
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter Full Name, Email Address, and Phone Number!');
    }

    public function verifyFullNameOnly(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter Full Name only and keep All the other fields empty, ad 3');
        $I->fillField('Full Name', 'mr random');
        $I->click('submit');
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter Email Address, and Phone Number!');
    }

    public function verifyFullNamePhone(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter First,Last Name, Phone only and keep All the other fields empty, ad 3');
        $I->fillField('Full Name', 'random');
        $I->fillField('Phone Number', '3107007788');
        $I->click('submit');
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter Email Address!');
    }

    public function verifyLettersToPhone(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter Letters to Phone  , ad 3');
        $I->fillField('Full Name', 'random');
        $I->fillField('Email Address', 'test@test.com');
        $I->fillField('Phone Number', 'random');
        $I->click('submit');
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter');
    }

    public function verifyInvalidEmail(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter email without @ and click submit, ad 3');
        $I->fillField('Full Name', 'random');
        $I->fillField('Phone Number', '3107007788');
        $I->fillField('Email Address', 'randomaol.com');
        $I->click('submit');
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter Email Address!');
    }
}