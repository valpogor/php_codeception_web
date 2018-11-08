<?php
use Page\MainPage;

class OnOA62B2Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
        $I->click(MainPage::COM_COMPARISONS);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify Read Review Comparison page 2 but');
        $but1 =  $I->get_text_href(MainPage::BUT_REVIEW_REG,2);
        $I->click(MainPage::BUT_COMP_READ_REV_B2);
        $title = $I->get_title();
        $I->seeMatchesValueArray($but1, $title);
    }
}
