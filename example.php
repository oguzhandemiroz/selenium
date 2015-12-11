<?php
require_once "phpwebdriver/WebDriver.php";
$timestamp = time();
//$browsers = array("chrome", "firefox");
//foreach($browsers as $browser) {
$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect();
$webdriver->get("http://shoppbagg.com/");
$webdriver->test();
//}