<?php

use Page\MainPage;


class OnOA457Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::THANK_YOU_PAGE_A5);
        $I->wantTo('Verify changing phone number in TY, should change phone on page Ads 5');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToTest(AcceptanceTester $I)
    {
        try {
            $phoneBefore = $I->grabTextFrom(MainPage::THANK_YOU_PAGE_LOC_B5);
            $newUrl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VALUE_FRONT_PHONE_TY);
            $I->amOnUrl($newUrl);
            $phoneAfter = $I->grabTextFrom(MainPage::THANK_YOU_PAGE_LOC_B5);
            $I->seeNotMatchesValues($phoneBefore, $phoneAfter);
        } catch (Exception $e) {
            $I->cantSeeElement(MainPage::THANK_YOU_PAGE_LOC_B5);
        }
    }
}
