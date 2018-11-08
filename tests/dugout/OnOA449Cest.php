<?php
use Page\MainPage;

class OnOA449Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::VISIT_SITE_BUT_4);
        $I->wait(3);
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
        $I->fillField('first_name', 'Bill');
        $I->fillField('last_name', 'Bill');
        $I->fillField('zip_code', '90210');
        $I->fillField('contact_phone', $phone);
        $I->fillField('email_address', 'test@randomaol.com');
        $first=$I->grabValueFrom('first_name');
        $last=$I->grabValueFrom('last_name');
        $phone= $I->grabValueFrom('contact_phone');
        $email=$I->grabValueFrom('email_address');
        $zip=$I->grabValueFrom('zip_code');
        $I->click(MainPage::SUBMIT_AD4);
        $I->wait(5);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$phone);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($first,$last,$phone,$email,$zip);
    }
}