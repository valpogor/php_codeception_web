<?php
use Page\MainPage;

class OnOA62B5Cest
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
        $I->wantTo('Verify Read Review Comparison page 5 but');
        $but5 =  $I->get_text_href(MainPage::BUT_JSON_REGEX,4);
        $I->click(MainPage::BUT_COMP_READ_REV_B5);
        $title = $I->get_title();
        $I->seeMatchesValueArray($but5, $title);
    }
}
