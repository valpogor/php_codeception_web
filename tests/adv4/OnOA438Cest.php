<?php

use Page\MainPage;

class OnOA438Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_4);
        $I->switchToNextTab();
    }

    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }

    public function tryToTestPolicy(AcceptanceTester $I)
    {
        $I->wantTo('Confirm Privacy Policy Click outs Ads4');
        $I->click('Privacy Policy');
        $I->canSee('PRIVACY POLICY','body > div.vivint > section > div > h2');
    }

    public function tryToTestTerms(AcceptanceTester $I)
    {
        $I->wantTo('Confirm Terms of use Click outs Ads4');
        $I->click('Terms of use');
        $I->canSee('TERMS AND CONDITIONS','body > div.vivint > section > div > h2');
    }
}
