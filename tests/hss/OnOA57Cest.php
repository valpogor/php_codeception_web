<?php
use Page\MainPage;


class OnOA57Cest
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
        $I->wantTo('Verify Click-outs > Feature Comparison Page');
        $I->click(MainPage::COM_COMPARISONS);
        $I->canSeeInCurrentUrl(MainPage::COMP_SUB);
    }
}
