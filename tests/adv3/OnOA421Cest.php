<?php
use Page\MainPage;

class OnOA421Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_3);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
    }
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Verify Policy Click outs but 3');
        $I->click('Privacy Policy','body > div.footer > div');
        $I->switchToNextTab();
        $I->see('Privacy Policy','body > div.main > div > div');
    }
    public function tryToTestTerms(AcceptanceTester $I)
    {
        $I->wantTo('Verify Terms Click outs but 3');
        $I->click('Terms and Conditions ','body > div.footer > div');
        $I->switchToNextTab();
        $I->see('Terms and Conditions ','body > div.main > div > div');
    }
}

