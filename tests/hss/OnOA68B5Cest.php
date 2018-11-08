<?php
use Page\MainPage;


class OnOA68B5Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::COMP_URL);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify Feature Comparison > Click-outs > Visit Site 5 but');
        $name =  $I->get_text_href(MainPage::BUT_JSON_REGEX,4);
        $I->click(MainPage::BUT_CLICK_VISIT_LIFE);
        $I->wait(5);
        $I->switchToWindow();
        $name_exp = $I->get_title();
        $I->see($name);
//        echo $name, $name_exp;
    }
}
