<?php

use Page\MainPage;

class OnOA16Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_1);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function tryToTestLicensing(AcceptanceTester $I)
    {
        $I->wantTo('Verify Licensing Click outs but 1');
        $I->click('Licensing');
        $I->switchToNextTab();
        $I->canSee('Licensing','body > div.listing_bottom_box > div > h1');
    }

    public function tryToTestPolicy(AcceptanceTester $I)
    {
        $I->wantTo('Verify Policy Click outs but 1');
        $I->click('Privacy Policy');
        $I->switchToNextTab();
        $I->canSee('Privacy Policy','body > div.listing_bottom_box > div > h1');
    }

    public function tryToTestTerms(AcceptanceTester $I)
    {
        $I->wantTo('Verify Terms Click outs but 1');
        $I->click('Terms of Use');
        $I->switchToNextTab();
        $I->canSee('Terms of Use','body > div.listing_bottom_box > div > h1');
    }
}
