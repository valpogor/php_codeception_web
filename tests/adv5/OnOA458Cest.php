<?php

use Page\MainPage;

class OnOA458Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('Verify disappear phone if off-hours not 24h');
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::VISIT_SITE_BUT_5);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function seePhone(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC5);
        if (empty($phoneBefore)) {
            $newUrl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VALUE_TIME_);
            $I->amOnUrl($newUrl);
            $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC5);
            $I->canSeeMatchesAB($phoneBefore, $phoneAfter);
            $I->canSeeMatchesAB($phoneAfter, '');
            return;
        }
        $newUrl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VALUE_TIME_);
        $I->amOnUrl($newUrl);
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC5);
        if (empty($phoneAfter)) {
            $I->seeNotMatchesAB($phoneBefore, $phoneAfter);
            $I->canSeeMatchesAB($phoneAfter, '');
            return;
        }
        $I->canSeeMatchesAB($phoneBefore, $phoneAfter);
    }
}