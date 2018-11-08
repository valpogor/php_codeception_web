<?php

use Page\MainPage;
use Page\FrontpointPage;

class OnOA17Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_1);
        $I->wait(2); //please use waitForElement instead
        $I->switchToWindow();
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Lead Submitted');
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $random= rand(3, 3104999999);
        $I->click(FrontpointPage::BUT1);
        $I->click(FrontpointPage::BUT1_1);
        $I->click(FrontpointPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
        $I->fillField('First Name', 'Bill');
        $I->wait(1);
        $I->fillField('Last Name', 'Gates');
        $I->wait(1);
        $I->fillField('Phone Number', $random);
        $I->wait(1);
        $I->fillField('Email Address', 'test@randomaol.com');
        $first = $I->grabValueFrom('First Name');
        $last = $I->grabValueFrom('Last Name');
        $phone = $I->grabValueFrom('Phone Number');
        $email = $I->grabValueFrom('Email Address');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(5); //please use waitForElement instead
        $newurl = $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL, $random);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($first, $last, $phone, $email);
    }
}