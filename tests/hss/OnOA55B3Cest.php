<?php
use Page\MainPage;


class OnOA55B3Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify clicking the Visit Site 3 but');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,2);
        $I->click(MainPage::VISIT_SITE_BUT_3);
        $I->wait(5);
        $I->switchToWindow();
        $I->see($name);
    }
}
