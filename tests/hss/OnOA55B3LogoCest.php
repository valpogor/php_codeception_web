<?php
use Page\MainPage;


class OnOA55B3LogoCest
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
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,2);
        $I->click(MainPage::VISIT_SITE_BUT_3);
        $I->wait(5);
        $I->switchToWindow();
        $name_exp = $I->get_title();
        $I->see($name);
//        echo $name, $name_exp;
    }
}
