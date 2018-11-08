<?php
use Page\MainPage;


class Ad4_UrlCest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function _after(AcceptanceTester $I)
    {
    }
    public function Test(AcceptanceTester $I)
    {
        $I->wantTo("Show page name");
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_1);
        echo $I->get_text_href(MainPage::BUT_JSON_REGEX,3);
    }
    public function Test2(AcceptanceTester $I)
    {
        $I->wantTo("Verify url adv4");
        $I->amOnUrl(MainPage::URL_A4);
        $url=$I->getCurrentUrl();
        $I->seeMatchesAB(MainPage::URL_A4,$url);
    }
}
