<?php

use Page\MainPage;
use Page\FrontpointPage;

class OnOA25Cest
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
        $I->fillField('Email Address', "test@test.com");
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function verifyPhone0(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 0 and click submit, ad 1');
        $I->fillField('Phone Number', '0107007788');
        $I->waitForElementVisible('#form > div.form_container > div:nth-child(2) > span.validation-text');
        $I->canSee('Please enter a valid #.','#form > div.form_container > div:nth-child(2) > span.validation-text');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Phone!', '//*[@id="hovermessage"]/div');
    }

    public function verifyPhone1(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 1 and click submit, ad 1');
        $I->fillField('Phone Number', '1107007788');
        $I->waitForElementVisible('#form > div.form_container > div:nth-child(2) > span.validation-text');
        $I->canSee('Please enter a valid #.','#form > div.form_container > div:nth-child(2) > span.validation-text');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->waitForElement('//*[@id="hovermessage"]/div');
        $I->canSee('Please enter Phone!', '//*[@id="hovermessage"]/div');
    }
}