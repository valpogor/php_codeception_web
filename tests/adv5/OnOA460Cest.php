<?php

use Page\MainPage;

class OnOA460Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_5_SEELIST_LOC);
        $I->switchToNextTab();
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

    public function verifyEmptyForm(AcceptanceTester $I)
    {
        $I->wantTo('Verify empty field submit ad 1');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@class="hovermessage_themessage"]');
        $I->canSee('Please enter First Name, Last Name, Phone, ZipCode, and Email Address!');
    }

    public function verifyFirstNameOnly(AcceptanceTester $I)
    {
        $I->wantTo('Verify form: Enter First Name only and keep All the other fields empty, ad 5');
        $I->fillField('//*[@id="first_name1"]', 'mr random');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@class="hovermessage_themessage"]');
        $I->canSee('Please enter Last Name, Phone, ZipCode, and Email Address!');
    }

    public function verifyFirstLastName(AcceptanceTester $I)
    {
        $I->wantTo('Verify form: Enter First and Last Name only and keep All the other fields empty, ad 5');
        $I->fillField('//*[@id="first_name1"]', 'random');
        $I->fillField('//*[@id="last_name1"]', 'random');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@class="hovermessage_themessage"]');
        $I->canSee('Please enter Phone, ZipCode, and Email Address!');
    }

    public function verifyFirLastNamePhone(AcceptanceTester $I)
    {
        $I->wantTo('Verify form: Enter First,Last Name, Phone only and keep All the other fields empty, ad 5');
        $I->fillField('//*[@id="first_name1"]', 'random');
        $I->fillField('//*[@id="last_name1"]', 'random');
        $I->fillField('//*[@id="contact_phone1"]', '3107007788');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@class="hovermessage_themessage"]');
        $I->canSee('Please enter ZipCode, and Email Address!');
    }

    public function verifyLettersToPhone(AcceptanceTester $I)
    {
        $I->wantTo('Verify form: Enter Letters to Phone  , ad 5');
        $I->fillField('//*[@id="first_name1"]', 'random');
        $I->fillField('//*[@id="last_name1"]', 'random');
        $I->fillField('//*[@id="zip_code1"]', '90210');
        $I->fillField('//*[@id="email_address1"]', 'test@test.com');
        $I->fillField('//*[@id="contact_phone1"]', 'random');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@class="hovermessage_themessage"]');
        $I->canSee('Please enter a valid phone number!');
    }
//there is NO email validation, any value (eg.randomaol.com) can be submited
//    public function verifyInvalidEmail(AcceptanceTester $I)
//    {
//        $I->wantTo('Verify form: Enter email without @ and click submit, ad 5');
//        $I->fillField('First Name', 'random');
//        $I->fillField('Last Name', 'random');
//        $I->fillField('Zip Code', '90210');
//        $I->fillField('Email Address','randomaol.com');
//        $I->fillField('Phone Number', '3107007788');
//        $I->click(MainPage::SUBMIT_FORM_AD1);
//        $I->waitForElement('//*[@class="hovermessage_themessage"]');
//        $I->canSee('Please enter');
//    }

    public function verifyZipOnly(AcceptanceTester $I)
    {
        $I->wantTo('Verify form: Enter Zip code , ad 5');
        $I->fillField('//*[@id="zip_code1"]', '90210');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@class="hovermessage_themessage"]');
        $I->canSee('Please enter First Name, Last Name, Phone, and Email Address!');
    }
}