<?php
use Page\MainPage;
use Page\AdtPage;

class OnOA479Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_2);
        $I->wait(2);
        $I->switchToWindow();
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Subid Accepted through URL');
        $subid = $I->get_phone_url_regex(MainPage::SUBID_REGEX);
        $random= rand(3,3104999999);
        $I->reloadUrlWithNewValue("$subid",$random);
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);;
        $I->click(AdtPage::BUT1);
        $I->click(AdtPage::BUT_1);
        $I->click(AdtPage::BUT_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV2);
        $I->fillField('*First Name', 'Bill');
        $I->fillField('*Last Name', 'Gates');
        $I->fillField('*Zip Code', '90210');
        $I->fillField('*Phone', $random);
        $I->fillField('*Email', 'test@randomaol.com');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->closeTab();
        $I->wait(5);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$random);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($random);
    }
}