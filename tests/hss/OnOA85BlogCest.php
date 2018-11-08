<?php
use Page\MainPage;

class OnOA85BlogCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::BLOG_URL);
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
