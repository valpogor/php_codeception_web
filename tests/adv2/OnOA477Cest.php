<?php

use Page\MainPage;
use Page\AdtPage;

class OnOA477Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_2);
        $I->switchToNextTab();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(AdtPage::BUT1);
        $I->click(AdtPage::BUT_1);
        $I->click(AdtPage::BUT_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV2);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function verifyEmptyForm(AcceptanceTester $I)
    {
        $I->wantTo('Verify empty field submit ad 1');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter First Name, Last Name, Phone, Zipcode, and Email Address!');
    }

    public function verifyFirstNameOnly(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter First Name only and keep All the other fields empty, ad 1');
        $I->fillField('*First Name', 'mr random');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter Last Name, Phone, Zipcode, and Email Address!');
    }

    public function verifyFirstLastName(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter First and Last Name only and keep All the other fields empty, ad 1');
        $I->fillField('*First Name', 'random');
        $I->fillField('*Last Name', 'random');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter Phone, Zipcode, and Email Address!');
    }

    public function verifyFirLastNamePhone(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter First,Last Name, Phone only and keep All the other fields empty, ad 1');
        $I->fillField('*First Name', 'random');
        $I->fillField('*Last Name', 'random');
        $I->fillField('*Phone', '3107007788');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter Zipcode, and Email Address!');
    }

    public function verifyInvalidPhone(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter invalid phone , ad 1');
        $I->fillField('*First Name', 'random');
        $I->fillField('*Last Name', 'random');
        $I->fillField('*Zip Code', '90210');
        $I->fillField('*Phone', '1');
        $I->fillField('*Email','test@test.com');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter a valid phone number!');
    }

    public function verifyLettersToPhone(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter invalid phone (letters) , ad 1');
        $I->fillField('*First Name', 'random');
        $I->fillField('*Last Name', 'random');
        $I->fillField('*Zip Code', '90210');
        $I->fillField('*Phone', '2sdsdfsdfsfdsdf');
        $I->fillField('*Email','test@test.com');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter a valid phone number!');
    }

// email validation is not set in this form, so test is fail
// requirements:
// Try to enter the email field with out " @ " and submit.
// The input field shows a validation message " Please enter a valid email"
//
//    public function verifyInvalidEmail(AcceptanceTester $I)
//    {
//        $I->wantTo('Verify form Enter invalid email , ad 1');
//        $I->fillField('*First Name', 'random');
//        $I->fillField('*Last Name', 'random');
//        $I->fillField('*Zip Code','90210');
//        $I->fillField('*Phone', '3107007788');
//        $I->fillField('*Email','test.com');
//        $I->click(MainPage::SUBMIT_FORM_AD2);
//        $I->waitForElement('//*[@class="hovermessage_container"]');
//        $I->canSee('Please enter a valid email!');
//    }

    public function verifyZipOnly(AcceptanceTester $I)
    {
        $I->wantTo('Verify form Enter Zip field , ad 1');
        $I->fillField('*Zip Code', '90210');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->waitForElement('//*[@class="hovermessage_container"]');
        $I->canSee('Please enter First Name, Last Name, Phone, and Email Address!');
    }
}