<?php

use Page\MainPage;

class OnOA472Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_2);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify Policy Click outs but 2');
        $I->click('Privacy Policy');
        $I->switchToNextTab();
        $I->canSee('Privacy Policy', 'body > div.listing_bottom_box > div > h1');
    }

    public function tryToTest2(AcceptanceTester $I)
    {
        $I->wantTo('Verify Terms Click outs but 2');
        $I->click('Terms & Conditions');
        $I->switchToNextTab();
        $I->canSee('Protect Your Home - Terms and Conditions', 'body > div.listing_bottom_box > div > h1');
    }
}

