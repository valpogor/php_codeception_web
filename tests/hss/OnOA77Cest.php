<?php
use Page\MainPage;


class OnOA77Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('Buyers Guide > Price Comparison Side Bar');
        $I->amOnUrl(MainPage::URL_S1);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $phone=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_1_DYN);
        $phone2=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_2_DYN);
        $phone3=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_3_DYN);
        $phone4=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_4_DYN);
        $phone5=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_5_DYN);
        $ads =  $I->get_text_href_all(MainPage::ADS_BOX_REGEX);

        $I->click(MainPage::BUYERS_GUIDE_LOC);
        $ads_exp =  $I->get_text_href_all(MainPage::ADS_BOX_REGEX);
        $phone_exp=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_1_DYN);
        $phone_exp2=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_2_DYN);
        $phone_exp3=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_3_DYN);
        $phone_exp4=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_4_DYN);
        $phone_exp5=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_5_DYN);

        $I->seeMatchesAB($ads, $ads_exp);
        if ($phone < 0){
            $I->seeMatchesAB($phone, $phone_exp);
        }
        else {
            $I->seeMatchesValueArray($phone, $phone_exp);
        }if ($phone2 < 0){
        $I->seeMatchesAB($phone2, $phone_exp2);
        }
        else {
            $I->seeMatchesValueArray($phone2, $phone_exp2);
        }if ($phone3 < 0){
            $I->seeMatchesAB($phone3, $phone_exp3);
        }
        else {
            $I->seeMatchesValueArray($phone3, $phone_exp3);
        }if ($phone4 < 0){
            $I->seeMatchesAB($phone4, $phone_exp4);
        }
        else {
            $I->seeMatchesValueArray($phone4, $phone_exp4);
        }if ($phone5 < 0){
            $I->seeMatchesAB($phone5, $phone_exp5);
        }
        else {
            $I->seeMatchesValueArray($phone5, $phone_exp5);
        }
//        echo $phone2, "  ",$phone_exp2;
    }
}
