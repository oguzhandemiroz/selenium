<?php


require_once "phpwebdriver/WebDriver.php";


$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect();
$webdriver->get("http://shoppbagg.com");
sleep(5);
$webdriver->getScreenshotAndSaveToFile("shoppbagg.png");
$webdriver->close();