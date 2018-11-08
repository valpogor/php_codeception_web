<?php

use Page\MainPage;
use Page\FrontpointPage;

class OnOA22Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_1);
        $I->wait(2);
        $I->switchToWindow();
        $I->click(FrontpointPage::BUT1);
        $I->click(FrontpointPage::BUT1_1);
        $I->click(FrontpointPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Trusted Form Certification');
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->fillField('First Name', 'Bill');
        $I->fillField('Last Name', 'Gates');
        $random= rand(3, 3104999999);
        $I->fillField('Phone Number', $random);
        $I->fillField('Email Address', 'test@randomaol.com');
        $formToken = $I->grabAttributeFrom(MainPage::XXTRUSTEDFORMTOKEN_LOC, "value");
        $formUrl = $I->grabAttributeFrom(MainPage::XXTRUSTEDFORMCERTURL_LOC, "value");
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(5);
        $newurl = $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL, $random);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($formToken);
        $I->canSeeInPageSource($formUrl);
    }
}