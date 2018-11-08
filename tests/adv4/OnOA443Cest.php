<?php

use Page\MainPage;

class OnOA443Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::VISIT_SITE_BUT_4);
        $I->switchToNextTab();
        $I->waitForElement('//*[@class="form-box"]');
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function verifyEmptyForm(AcceptanceTester $I)
    {
        $I->wantTo('verify empty field submit ad 1');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter your first name, last name, phone number, email,  5 digit zip code!');
    }

    public function verifyFirstNameOnly(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter First Name only and keep All the other fields empty, ad 4');
        $I->fillField('first_name', 'mr random');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter your last name, phone number, email,  5 digit zip code!');
    }

    public function verifyFirstLastName(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter First and Last Name only and keep All the other fields empty, ad 4');
        $I->fillField('first_name', 'random');
        $I->fillField('last_name', 'random');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter your phone number, email,  5 digit zip code!');
    }

    public function verifyFirLastNamePhone(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter First,Last Name, Phone only and keep All the other fields empty, ad 4');
        $I->fillField('first_name', 'random');
        $I->fillField('last_name', 'random');
        $I->fillField('contact_phone', '3107007788');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter your email,  5 digit zip code!');
    }

    public function verifyLettersToPhone(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter Letters to Phone and click submit, ad 4');
        $I->fillField('first_name', 'random');
        $I->fillField('last_name', 'random');
        $I->fillField('zip_code', '90210');
        $I->fillField('email_address','test@test.com');
        $I->fillField('contact_phone', 'random');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter a valid phone number!');
    }
//expected: Try to enter the email field with out " @ " and submit. -> The input field shows a validation message " Please enter a valid email"
//actual: there is NO email validation

//    public function verifyInvalidEmail(AcceptanceTester $I)
//    {
//        $I->wantTo('verify form: Enter email without @ and click submit, ad 4');
//        $I->fillField('first_name', 'random');
//        $I->fillField('last_name', 'random');
//        $I->fillField('zip_code', '90210');
//        $I->fillField('contact_phone', '3107007788');
//        $I->fillField('email_address', 'randomaol.com');
//        $I->click(MainPage::SUBMIT_AD4);
//        $I->canSeeInPopup('Please enter');
//    }

    public function verifyInvalidZip(AcceptanceTester $I)
    {
        $I->wantTo('verify form: Enter only Zip code and click submit, ad 4');
        $I->fillField('first_name', 'random');
        $I->fillField('last_name', 'random');
        $I->fillField('zip_code', 'randomaol.com');
        $I->fillField('email_address','test@test.com');
        $I->fillField('contact_phone', '3107007788');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter your  5 digit zip code!');
    }
}