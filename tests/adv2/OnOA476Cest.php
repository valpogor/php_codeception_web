<?php

use Page\MainPage;

class OnOA476Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_2);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function tryToTest(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC2);
        $I->wantTo('Verify Policy Phone number Click outs but 2');
        $I->click('Privacy Policy');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC2);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }

    public function tryToTest2(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC2);
        $I->wantTo('Verify Terms Phone number Click outs but 2');
        $I->click('Terms & Conditions');
        $I->switchToNextTab();
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC2);
        $I->seeMatchesAB($phoneBefore, $phoneAfter);
    }
}

