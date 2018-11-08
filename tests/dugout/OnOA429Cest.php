<?php
use Page\MainPage;

class OnOA429Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_3_SEELIST_LOC);
        $I->wait(2);
        $I->switchToWindow();
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Ckmid Accepted through URL');
        $ckmid = $I->randomCkmid();
        $phone = $I->randomPhone();
        $I->find_replace_reload_url_regex(MainPage::SUBID_REGEX, $ckmid);
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(MainPage::BUT1_AD5);
        $I->click(MainPage::BUT1_1_AD5);
        $I->click(MainPage::BUT1_1_1_AD5);
        $I->waitForElementVisible(MainPage::FORM_1_ADV3,10);
        $I->fillField('Full Name', 'Bill');
//        $I->wait(1);
        $I->fillField('Phone Number', $phone);
//        $I->wait(1);
        $I->fillField('Email Address', 'test@randomaol.com');
//        $I->wait(1);
        $I->click(MainPage::SUBMIT_AD4);
        $I->closeTab();
        $I->wait(10);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$phone);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($ckmid);
    }
}