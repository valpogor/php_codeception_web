<?php
use Page\MainPage;

class OnOA62B4Cest
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
        $I->wantTo('Verify Read Review Comparison page 4 but');
        $but4 =  $I->get_text_href(MainPage::BUT_JSON_REGEX,3);
        $but4 = explode(' ',trim($but4));
        $I->click(MainPage::BUT_COMP_READ_REV_B4);
        $title = $I->get_title();
        $I->seeMatchesValueArray($but4[0], $title);
    }
}
