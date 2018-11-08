<?php

use Page\MainPage;

class OnOA58Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::THANK_YOU_PAGE_A1);
        $I->wantTo('Verify changing phone number in TY, should change phone on page Ads 1');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToTest(AcceptanceTester $I)
    {
        try {
            $phonebefore = $I->grabTextFrom(MainPage::THANK_YOU_PAGE_LOC_B1);
            $newurl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VALUE_FRONT_PHONE_TY);
            $I->amOnUrl($newurl);
            $phoneafter = $I->grabTextFrom(MainPage::THANK_YOU_PAGE_LOC_B1);
            $I->seeNotMatchesValues($phonebefore, $phoneafter);
        } catch (Exception $e) {
            $I->cantSeeElement(MainPage::THANK_YOU_PAGE_LOC_B1);
        }
    }
}
