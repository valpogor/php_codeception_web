<?php
use Page\MainPage;

class OnOA461Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_5_SEELIST_LOC);
        $I->wait(2);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(MainPage::BUT1);
        $I->click(MainPage::BUT1_1);
        $I->click(MainPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Trusted Form Certification');
        $I->fillField('First Name', 'Bill');
        $I->fillField('Last Name', 'Gates');
        $I->fillField('Zip Code', '90210');
        $random= rand(3102001111,3104999999);
        $I->fillField('Phone Number', $random);
        $I->fillField('Email Address', 'test@randomaol.com');
        $XXTRUSTEDFORMTOKEN = $I->grabAttributeFrom(MainPage::XXTRUSTEDFORMTOKEN_LOC, "value");
        $XXTRUSTEDFORMCERTURL =$I->grabAttributeFrom(MainPage::XXTRUSTEDFORMCERTURL_LOC,"value");
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->openNewTab();
        $I->wait(5);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$random);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($XXTRUSTEDFORMTOKEN);
        $I->canSeeInPageSource($XXTRUSTEDFORMCERTURL);
    }
}