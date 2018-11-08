<?php
use Page\MainPage;

////haven't found requirements to this tests

class OnOA431Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_3_SEELIST_LOC);
        $I->wait(2);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(MainPage::BUT1_AD5);
        $I->click(MainPage::BUT1_1_AD5);
        $I->click(MainPage::BUT1_1_1_AD5);
        $I->waitForElementVisible(MainPage::FORM_1_ADV3,10);
    }
    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }
    public function verifyPhone0(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 0 and click submit, ad 3');
        $I->fillField('Phone Number', '0107007788');
        $I->click('submit');
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
    public function verifyPhone1(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 1 and click submit, ad 3');
        $I->fillField('Phone Number', '1107007788');
        $I->click('submit');
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
}