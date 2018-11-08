<?php
use Page\MainPage;
use Page\AdtPage;

class OnOA478Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_2);
        $I->wait(2);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);;
        $I->click(AdtPage::BUT1);
        $I->click(AdtPage::BUT_1);
        $I->click(AdtPage::BUT_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV2);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Trusted Form Certification');
        $I->fillField('*First Name', 'Bill');
        $I->fillField('*Last Name', 'Gates');
        $I->fillField('*Zip Code', '90210');
        $random= rand(3102001111,3104999999);
        $I->fillField('*Phone', $random);
        $I->fillField('*Email', 'test@randomaol.com');
        $XXTRUSTEDFORMTOKEN = $I->grabAttributeFrom(MainPage::XXTRUSTEDFORMTOKEN_LOC, "value");
        $XXTRUSTEDFORMCERTURL =$I->grabAttributeFrom(MainPage::XXTRUSTEDFORMCERTURL_LOC,"value");
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->closeTab();
        $I->wait(5);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$random);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($XXTRUSTEDFORMTOKEN);
        $I->canSeeInPageSource($XXTRUSTEDFORMCERTURL);
    }
}