<?php
use Page\MainPage;

class OnOA66Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
        $I->click(MainPage::REVIEWS);
        $I->click(MainPage::REVIEWS_SUB);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify the user is taken to the Reviews page ');
        $I->seeInCurrentUrl(MainPage::REVIEW_PAGE);
    }
}
