<?php

//haven't found requirements for this tests, there is NO phone starting from 0 validation
use Page\MainPage;
use Page\AdtPage;

class OnOA482Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnUrl(MainPage::LIST_URL);
        $I->click(MainPage::VISIT_SITE_BUT_2);
        $I->wait(2);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(AdtPage::BUT1);
        $I->click(AdtPage::BUT_1);
        $I->click(AdtPage::BUT_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV2);
    }
    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }
    public function verifyPhone0(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 0 and click submit, ad 2');
        $I->fillField('*Phone', '0107007788');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
    public function verifyPhone1(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 1 and click submit, ad 2');
        $I->fillField('*Phone', '1107007788');
        $I->click(MainPage::SUBMIT_FORM_AD2);
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
}