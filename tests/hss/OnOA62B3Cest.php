<?php
use Page\MainPage;

class OnOA62B3Cest
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
        $I->wantTo('Verify Read Review Comparison page 3 but');
        $but3 =  $I->get_text_href(MainPage::BUT_JSON_REGEX,2);
        $I->click(MainPage::BUT_COMP_READ_REV_B3);
        $title = $I->get_title();
        $I->seeMatchesValueArray($but3, $title);
    }
}
