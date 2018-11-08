<?php
use Page\MainPage;

class OnOA87B3Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->wantTo('Verify disappear phone if off-hours not 24h');
        $I->amOnPage(MainPage::LIST_SUB_URL);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function seePhone(AcceptanceTester $I)
    {
        $phone=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_3_DYN);
        $newurl = $I->addGetParamToUrl(MainPage::URL_ADD_NEW_VALUE_TIME);
        $I->amOnUrl($newurl);
        $phone2=$I->grabTextFrom(MainPage::VISIT_SITE_BUT_3_DYN);
        if(empty($phone) && empty($phone2)){
            return true;
        }
        else {
            if ($phone == $phone2) {
                $I->canSee($phone);
            } else {
                $I->cantSee($phone);
            }
//            echo $phone, $phone2;
        }
    }
}