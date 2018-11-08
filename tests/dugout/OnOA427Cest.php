<?php
use Page\MainPage;

class OnOA427Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::LIST_SUB_URL);
        $I->click(MainPage::BUT_3_SEELIST_LOC);
        $I->wait(1);
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
    }
    public function verifyTrustedCert(AcceptanceTester $I)
    {
        $I->wantTo('Verify Trusted Form Certification');
        $I->fillField('Full Name', 'Bill G');
        $random= rand(0,3124999999);
        $I->wait(1);
        $I->fillField('Phone Number', $random);
        $I->wait(1);
        $I->fillField('Email Address', 'test@randomaol.com');
        $I->wait(1);
        $XXTRUSTEDFORMTOKEN = $I->grabAttributeFrom(MainPage::XXTRUSTEDFORMTOKEN_LOC, "value");
        $XXTRUSTEDFORMCERTURL =$I->grabAttributeFrom(MainPage::XXTRUSTEDFORMCERTURL_LOC,"value");
        $I->wait(2);
        $I->click(MainPage::SUBMIT_AD4);
        $I->wait(2);
        try {
            $I->canSee("Please enter");
            $I->click("//*[@class='hovermessage_closemessage hovermessage_button']");
//            $I->cancelPopup();
            $I->fillField('Full Name', 'Bill G');
            $random= rand(0,3124999999);
            $I->wait(1);
            $I->fillField('Phone Number', $random);
            $I->wait(1);
            $I->fillField('Email Address', 'test@randomaol.com');
            $I->wait(1);
            $XXTRUSTEDFORMTOKEN = $I->grabAttributeFrom(MainPage::XXTRUSTEDFORMTOKEN_LOC, "value");
            $XXTRUSTEDFORMCERTURL =$I->grabAttributeFrom(MainPage::XXTRUSTEDFORMCERTURL_LOC,"value");
            $I->wait(2);
            $I->click(MainPage::SUBMIT_AD4);
            $I->reloadPage();
            $I->wait(10);
            $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$random);
            $I->amOnUrl($newurl);
//        $I->wait(25);
            $I->canSeeInPageSource($XXTRUSTEDFORMTOKEN);
            $I->canSeeInPageSource($XXTRUSTEDFORMCERTURL);
        } catch (Exception $e) {
            $I->reloadPage();
            $I->wait(10);
            $newurl= $I->amOnUrlWithAddValue(MainPage::DUGOUT_URL,$random);
            $I->amOnUrl($newurl);
//        $I->wait(25);
            $I->canSeeInPageSource($XXTRUSTEDFORMTOKEN);
            $I->canSeeInPageSource($XXTRUSTEDFORMCERTURL);

        }
    }
}