<?php
use Page\MainPage;

class OnOA67B2Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::REVIEW_PAGE_FULL);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify the user is taken to the Reviews page ');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,1);
        $I->click(MainPage::BUT_REVIEW_READ_REV_B2);
        $I->click(MainPage::BUT_VISIT_SITE);
        $I->switchToWindow();
        $I->see($name);
    }
}
