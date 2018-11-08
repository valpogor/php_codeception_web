<?php

use Page\MainPage;

class OnOA441Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('Verify disappear phone if off-hours not 24h');
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::VISIT_SITE_BUT_4);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function seePhone(AcceptanceTester $I)
    {
        $phoneBefore = $I->grabTextFrom(MainPage::PHONES_LOC4);
        if (empty($phoneBefore)) {
            $newUrl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VALUE_TIME_);
            $I->amOnUrl($newUrl);
            $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC4);
            $I->canSeeMatchesAB($phoneBefore, $phoneAfter);
            $I->canSeeMatchesAB($phoneAfter, '');
            return;
        }
        $newUrl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VALUE_TIME_);
        $I->amOnUrl($newUrl);
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC4);
        if (empty($phoneAfter)) {
            $I->seeNotMatchesAB($phoneBefore, $phoneAfter);
            $I->canSeeMatchesAB($phoneAfter, '');
            return;
        }
        $I->canSeeMatchesAB($phoneBefore, $phoneAfter);
    }
}