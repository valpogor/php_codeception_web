<?php
use Page\MainPage;


class OnOA78Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::URL_S1);
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function verifyLandPage(AcceptanceTester $I)
    {
        $I->wantTo('Click-outs > Buyers Guide');
        $I->click(MainPage::BLOG_LOC);
        $I->seeInCurrentUrl(MainPage::ARTICLES_SUB);
    }
}
