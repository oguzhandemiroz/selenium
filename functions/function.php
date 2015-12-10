<?php
class functions{

    private $webdriver;
    function __construct(){
        require_once "phpwebdriver/WebDriver.php";
        $this->webdriver =new WebDriver();
    }
    public function waitForCamp(){
        $a = 1;
        while($a == 1){
            $result=$this->webdriver->executeScript("return sQuery('.sp-advanced-css-69').exists()",array());
            if($result){
                echo "bitti";
                $a = 2;
            }
        }
        sleep(1);
    }
}
?>