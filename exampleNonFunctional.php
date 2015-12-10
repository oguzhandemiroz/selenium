<?php


require_once "phpwebdriver/WebDriver.php";


$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect();
$webdriver->get("http://shoppbagg.com/index.php?route=product/product&product_id=40");
$webdriver->executeScript("return spApi.showCamp(spApi.getCamp(69).camp);",array());
sleep(3);
$webdriver->getScreenshotAndSaveToFile("campshown.png");
$impressionResult = $webdriver->executeScript("return sQuery.cookie('sp-camp-69').indexOf('step1-displayed')>-1;",array());
//echo $impressionResult;
if($impressionResult){
    echo "Kampanya Gösterimi Yapıldı...";
    $webdriver->executeScript("return sQuery('.sp-advanced-css-69 iframe').pm(function(){sQuery('.insdrNotifyCloseButton').click();});",array());
    sleep(3);
    $closedResult = $webdriver->executeScript("return sQuery.cookie('sp-camp-69').indexOf('closed')>-1;",array());
    //echo $closedResult;
    if($closedResult){
        echo "Kampanya Kapatıldı...";
        $webdriver->getScreenshotAndSaveToFile("campclosed.png");
        $webdriver->deleteAllCookies();
        $webdriver->refresh();
        $webdriver->executeScript("return spApi.showCamp(spApi.getCamp(69).camp);",array());
        sleep(3);
        $webdriver->executeScript("return sQuery('.sp-advanced-css-69 iframe').pm(function(){sQuery('.insdrNotifyButton').click();});",array());
        $webdriver->getScreenshotAndSaveToFile("campshownagain.png");
        sleep(3);
        $joinResult = $webdriver->executeScript("return sQuery.cookie('sp-camp-69').indexOf('joined')>-1;",array());
        if($joinResult){
            echo "Kampanya Katılımı Yapıldı...";
            $webdriver->getScreenshotAndSaveToFile("campjoined.png");
            $webdriver->deleteAllCookies();
        }
    }
}
//$webdriver->close();