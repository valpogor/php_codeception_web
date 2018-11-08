<?php

use Page\MainPage;

class OnOA20Cest
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
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC1);
        $I->wantTo('Verify Licensing Phone number on Click outs but 1');
        $I->click('Licensing');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC1);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }

    public function tryToTestPolicy(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC1);
        $I->wantTo('Verify Policy Phone number on Click outs but 1');
        $I->click('Privacy Policy');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC1);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }

    public function tryToTestTerms(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC1);
        $I->wantTo('Verify Terms Phone number on Click outs but 1');
        $I->click('Terms of Use');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC1);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }
}
