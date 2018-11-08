<?php
use Page\MainPage;


class OnOA64Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('Verify Reviews > Dynamic Ring Pool');
        $I->amOnUrl(MainPage::URL_S1);
    }

    public function _after(AcceptanceTester $I)
    {
    }
    public function tryToTest(AcceptanceTester $I)
    {
        $phone1=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_1_DYN);
        $phone2=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_2_DYN);
        $phone3=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_3_DYN);
        $phone4=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_4_DYN);
        $phone5=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_5_DYN);
        $I->click(MainPage::REVIEWS);
        $phone1n=$I->grabTextFrom(MainPage::REVIEW_S1_B1);
        $phone2n=$I->grabTextFrom(MainPage::REVIEW_S1_B2);
        $phone3n=$I->grabTextFrom(MainPage::REVIEW_S1_B3);
        $phone4n=$I->grabTextFrom(MainPage::REVIEW_S1_B4);
        $phone5n=$I->grabTextFrom(MainPage::REVIEW_S1_B5);
        $I->seeMatchesValueArray($phone1,$phone1n);
        $I->seeMatchesValueArray($phone2,$phone2n);
        $I->seeMatchesValueArray($phone3,$phone3n);
        $I->seeMatchesValueArray($phone4,$phone4n);
        $I->seeMatchesValueArray($phone5,$phone5n);
    }
}
