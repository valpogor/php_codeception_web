<?php

use Page\MainPage;

class OnOA442Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_4);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function tryToTestPolicy(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC4);
        $I->wantTo('Confirm Privacy Policy phone number Click outs Ads4');
        $I->click('Privacy Policy');
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC4);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }

    public function tryToTestTerms(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC4);
        $I->wantTo('Confirm Terms of use phone number Click outs Ads4');
        $I->click('Terms of use');
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC4);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }
}
