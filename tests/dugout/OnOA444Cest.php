<?php
use Page\MainPage;

class OnOA444Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::VISIT_SITE_BUT_4);
        $I->wait(2);
        $I->switchToWindow();
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Trusted Form Certification');
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->fillField('first_name', 'Bill');
        $I->fillField('last_name', 'Bill');
        $I->fillField('zip_code', '90210');
        $random= rand(3102001111,3104999999);
        $I->fillField('contact_phone', $random);
        $I->fillField('email_address', 'test@randomaol.com');
        $XXTRUSTEDFORMTOKEN = $I->grabAttributeFrom(MainPage::XXTRUSTEDFORMTOKEN_LOC, "value");
        $XXTRUSTEDFORMCERTURL =$I->grabAttributeFrom(MainPage::XXTRUSTEDFORMCERTURL_LOC,"value");
        $I->click(MainPage::SUBMIT_AD4);
        $I->openNewTab();
        $I->wait(5);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$random);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($XXTRUSTEDFORMTOKEN);
        $I->canSeeInPageSource($XXTRUSTEDFORMCERTURL);
    }
}