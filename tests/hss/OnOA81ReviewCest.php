<?php
use Page\MainPage;

class OnOA81ReviewCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::REVIEW_PAGE_FULL);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyLandPage(AcceptanceTester $I)
    {
        $I->wantTo('Checking Console for Errors hss page');
        echo $I->cantSeeJsError();
    }
}
