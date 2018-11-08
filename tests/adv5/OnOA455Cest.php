<?php

use Page\MainPage;

class OnOA455Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_5);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify Policy Click outs but 5');
        $I->click('Privacy Policy');
        $I->switchToNextTab();
        $I->canSee('Privacy Policy','body > div.listing_bottom_box > div > h1');
    }

    public function tryToTest2(AcceptanceTester $I)
    {
        $I->wantTo('Verify Terms Click outs but 5');
        $I->click('Terms & Conditions');
        $I->switchToNextTab();
        $I->see('Protect Your Home - Terms and Conditions','body > div.listing_bottom_box > div > h1');
    }
}
