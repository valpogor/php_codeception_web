<?php
use Page\MainPage;

class OnOA466Cest
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
        $I->wantTo('Verify Lead Submitted');
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $subid = $I->randomSubid();
        $phone = $I->randomPhone();
        $I->find_replace_reload_url_regex(MainPage::SUBID_REGEX, $subid);
        $I->click(MainPage::BUT1);
        $I->click(MainPage::BUT1_1);
        $I->click(MainPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
        $I->fillField('First Name', 'Bill');
        $I->fillField('Last Name', 'Gates');
        $I->fillField('Zip Code', '90210');
        $I->fillField('Phone Number', $phone);
        $I->fillField('Email Address', 'test@randomaol.com');
        $first=$I->grabValueFrom('First Name');
        $last=$I->grabValueFrom('Last Name');
        $phone= $I->grabValueFrom('Phone Number');
        $email=$I->grabValueFrom('Email Address');
        $zip=$I->grabValueFrom('Zip Code');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(5);
        $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$phone);
        $I->amOnUrl($newurl);
        $I->canSeeInPageSource($first,$last,$phone,$email,$zip);
    }
}