<?php
use Page\MainPage;

class OnOA62B1Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::COMP_URL);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify Read Review Comparison page 1 but');
        $but1 =  $I->get_text_href(MainPage::BUT_REVIEW_REG,0);
        $I->click(MainPage::BUT_COMP_READ_REV_B1);
        $title = $I->get_title();
        $I->see($but1);
    }
}
