<?php
use Page\MainPage;


class OnOA55B5LogoCest
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
        $I->wantTo('Verify clicking the Logo 1 Ads');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,4);
        $I->click(MainPage::VISIT_SITE_BUT_5);
        $I->wait(5);
        $I->switchToWindow();
        $I->see($name);
    }
}