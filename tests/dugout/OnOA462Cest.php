<?php
use Page\MainPage;

class OnOA462Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_5_SEELIST_LOC);
        $I->wait(2);
        $I->switchToWindow();
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Subid Accepted through URL');
        $subid = $I->randomSubid();
        $phone = $I->randomPhone();
        $I->find_replace_reload_url_regex(MainPage::SUBID_REGEX, $subid);
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(MainPage::BUT1);
        $I->click(MainPage::BUT1_1);
        $I->click(MainPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
        $I->fillField('First Name', 'Bill');
        $I->wait(1);
        $I->fillField('Last Name', 'Gates');
        $I->fillField('Zip Code', '90210');
        $I->wait(1);
        $I->fillField('Phone Number', $phone);
        $I->fillField('Email Address', 'test@randomaol.com');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(5);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$phone);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($subid);
    }
}