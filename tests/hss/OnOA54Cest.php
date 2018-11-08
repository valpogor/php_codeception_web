<?php
use Page\MainPage;


class OnOA54Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Dynamic Ring Pool');
        $newurl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VAL_DYN_REPL);
        $I->click(MainPage::SEELIST);
        $I->amOnUrl($newurl);
        $newurlclearcook = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VAL_DYN_REPL);
        $phone1=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_1_DYN);
        $phone2=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_2_DYN);
        $phone3=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_3_DYN);
        $phone4=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_4_DYN);
        $phone5=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_5_DYN);
        $I->amOnUrl($newurlclearcook);
        $phone1n=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_1_DYN);
        $phone2n=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_2_DYN);
        $phone3n=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_3_DYN);
        $phone4n=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_4_DYN);
        $phone5n=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_5_DYN);
        $I->seeNotMatchesValues($phone1,$phone1n);
        $I->seeNotMatchesValues($phone2,$phone2n);
        $I->seeNotMatchesValues($phone3,$phone3n);
        $I->seeNotMatchesValues($phone4,$phone4n);
        $I->seeNotMatchesValues($phone5,$phone5n);
    }
}
