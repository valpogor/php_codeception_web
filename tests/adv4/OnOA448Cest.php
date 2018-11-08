<?php
use Page\MainPage;
use Page\FrontpointPage;

//haven't found requirements to this tests


class OnOA448Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::VISIT_SITE_BUT_4);
        $I->wait(3);
        $I->switchToWindow();
        $newurl = $I->addGetParamToUrl(MainPage::ISTEST);
        $I->amOnUrl($newurl);
    }
    public function _after(AcceptanceTester $I)
    {
        $I->closeTab();
    }
    public function verifyPhone0(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 0 and click submit, ad 4');
        $I->fillField('contact_phone', '0107007788');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter');
    }
    public function verifyPhone1(AcceptanceTester $I)
    {
        $I->wantTo('Verify phone: Enter 10digit  phone input starting with 1 and click submit, ad 4');
        $I->fillField('contact_phone', '1107007788');
        $I->click(MainPage::SUBMIT_AD4);
        $I->canSeeInPopup('Please enter');
    }
}