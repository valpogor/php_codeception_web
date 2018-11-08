<?php

use Page\MainPage;

class OnOA425Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_3);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function tryToTest(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC3);
        $I->wantTo('Verify Policy Click outs but 3');
        $I->click('Privacy Policy');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC3);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }

    public function tryToTestTerms(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC3);
        $I->wantTo('Verify Terms Click outs but 3');
        $I->click('Terms and Conditions ');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC3);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }
}

