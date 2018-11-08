<?php
use Page\MainPage;

class A_lpUrlCest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function Test(AcceptanceTester $I)
    {
        $I->wantTo("Verify url land page");
        $I->amOnPage(MainPage::$URL);
        $url=$I->getCurrentUrl();
        echo $url;
        $I->seeMatchesAB($url,MainPage::$URLMAINPAGE);
    }
}
