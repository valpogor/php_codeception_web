<?php

use Page\MainPage;
use Page\FrontpointPage;

class OnOA30Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_1);
        $I->wait(2);
        $I->switchToWindow();
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Ckmid Accepted through URL');
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $ckmid = $I->randomCkmid();
        $phone = $I->randomPhone();
        $I->find_replace_reload_url_regex(MainPage::SUBID_REGEX, $ckmid);
        $I->click(FrontpointPage::BUT1);
        $I->click(FrontpointPage::BUT1_1);
        $I->click(FrontpointPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
        $I->fillField('First Name', 'Bill');
        $I->fillField('Last Name', 'Gates');
        $I->fillField('Phone Number', $phone);
        $I->fillField('Email Address', 'test@randomaol.com');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(5);
        $newurl = $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL, $phone);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($ckmid);
    }
}