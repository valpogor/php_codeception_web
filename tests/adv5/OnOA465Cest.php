<?php
use Page\MainPage;

//haven't foeun requirements, there is NO phone validation

class OnOA465Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_5_SEELIST_LOC);
        $I->wait(2);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
        $I->click(MainPage::BUT1);
        $I->click(MainPage::BUT1_1);
        $I->click(MainPage::BUT1_1_1);
        $I->waitForElementVisible(MainPage::FORM_1_ADV1);
    }
    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }
    public function verifyPhone0(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 0 and click submit, ad 5');
        $I->fillField('Phone Number', '0107007788');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
    public function verifyPhone1(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 1 and click submit, ad 5');
        $I->fillField('Phone Number', '1107007788');
        $I->click(MainPage::SUBMIT_FORM_AD1);
        $I->wait(3);
        $I->switchToWindow();
        $I->canSee('Please enter');
    }
}