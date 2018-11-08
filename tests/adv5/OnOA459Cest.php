<?php

use Page\MainPage;

class OnOA459Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_5);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function tryToTest(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC5);
        $I->wantTo('Verify Policy Click phone number outs but 5');
        $I->click('Privacy Policy');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC5);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }

    public function tryToTest2(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC5);
        $I->wantTo('Verify Terms Click outs phone number but 5');
        $I->click('Terms & Conditions');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC5);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }
}
