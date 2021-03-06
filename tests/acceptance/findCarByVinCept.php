<?php
$I = new WebGuy\MemberSteps($scenario);
$I->wantTo('find car info from car VIN');
$I->am("Employee");
$I->wantTo('login and use QR scanner');
$I->amOnPage('/');
$I->seeLink("Login");
$I->click("Login");
$I->amGoingTo("To login page");
$I->login('mahmud', '123');
$I->see("Welcome Махмуд М");
$I->dontSeeTexts(array('Notice', 'Warning', 'Error'));
//Let assume button clicked, it started qr scanner app which set correct url in browser
$I->amOnPage("/cars/vin/AZAF69ZEV016666");
$I->see("VIN AZAF69ZEV016666");
//Check for php errors
$I = new WebGuy\SeeTextsSteps($scenario);
$I->dontSeeTexts(array('Notice', 'Warning', 'Error'));
$I->wantTo('Find a car by registration number');
$I->fillField("car-identity", 'F312TA');
$I->doubleClick("input[type=submit]");
$I->see("VIN AZAF69ZEV016666");
$I->dontSeeTexts(array('Notice', 'Warning', 'Error'));
