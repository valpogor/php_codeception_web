<?php

use Page\MainPage;


class OnOA456Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->wantTo('Verify changing phone number in url, should change phone on page');
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
        if (empty($phoneBefore)) {
            return;
        }
        $phoneToReplace = $I->get_phone_url_regex(MainPage::BUT_PHONE_REGEX);
        $I->reloadUrlWithNewValue($phoneToReplace, MainPage::URL_ADD_NEW_VALUE_FRONT_PHONE);
        $phoneAfter = $I->grabTextFrom(MainPage::PHONES_LOC5);
        $I->seeNotMatchesAB($phoneBefore, $phoneAfter);
    }
}
