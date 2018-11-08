<?php
use Page\MainPage;
use Page\AdtPage;

class OnOA483Cest
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
        $I->wantTo('Verify Lead Submitted');
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $subid = $I->randomSubid();
        $phone = $I->randomPhone();
        $I->find_replace_reload_url_regex(MainPage::SUBID_REGEX, $subid);
        $I->click(AdtPage::BUT1);
        $I->click(AdtPage::BUT_1);
        $I->click(AdtPage::BUT_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV2);
        $I->fillField('*First Name', 'Bill');
        $I->fillField('*Last Name', 'Gates');
        $I->fillField('*Zip Code', '90210');
        $I->fillField('*Phone', $phone);
        $I->fillField('*Email', 'test@randomaol.com');
        $first=$I->grabValueFrom('*First Name');
        $last=$I->grabValueFrom('*Last Name');
        $phone= $I->grabValueFrom('*Phone');
        $email=$I->grabValueFrom('*Email');
        $zip=$I->grabValueFrom('*Zip Code');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->wait(5);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$phone);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($first,$last,$phone,$email,$zip);
    }
}