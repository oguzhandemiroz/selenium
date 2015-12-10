<?php
require_once "phpwebdriver/WebDriver.php";
$webdriver =new WebDriver();
class functions{
    public function waitForCamp(){
        $a = 1;
        while($a == 1){
            $result=$webdriver->executeScript("return sQuery('.sp-advanced-css-69').exists()",array());
            if($result){
                echo "bitti";
                $a = 2;
            }
        }
        sleep(1);
    }
}
?>