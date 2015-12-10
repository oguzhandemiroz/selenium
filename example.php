<?php
// Sample WebDriver code - search Google for "Selenium is awesome" and take
// a screenshot.
// You need three things to run this code:
// 1. A copy of chromedriver (from the Selenium downloads.)
// 2. The standalone Selenium server v2.0 running with
//    -Dwebdriver.chrome.driver=${PATH_TO_CHROMEDRIVER}
// 3. A copy of http://code.google.com/p/php-webdriver-bindings/ checked out.
//require_once "..phpwebdriver/WebDriver.php";
require_once "function.php";
$timestamp = time();
//$browsers = array("chrome", "firefox");
//foreach($browsers as $browser) {
$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect();
$webdriver->get("http://shoppbagg.com/");
$a = 1;
while($a == 1){
     $result=$webdriver->executeScript("return sQuery('.sp-advanced-css-69').exists()",array());
     if($result){
          echo "bitti";
          $a = 2;
     }
}
sleep(1);
$webdriver->getScreenshotAndSaveToFile("shoppbagg.png");
//}