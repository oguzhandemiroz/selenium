<?php

require_once "../phpwebdriver/WebDriver.php";

class allFunctions{

    private $webDriver;

    public function __construct()
    {
        $temp = new WebDriver("localhost","4444");
        $this->webDriver = $temp;
    }

    function campTest(){

        $this->webDriver->connect();
        $this->webDriver->get("http://shoppbagg.com");
        $this->waitForCamp();
        $this->webDriver->getScreenshotAndSaveToFile("shoppbagg.png");
    }

    function waitForCamp(){

        $a = 1;
        while($a == 1){
            $result=$this->webDriver->executeScript("return sQuery('.sp-advanced-css-69').exists()",array());
            if($result){
                echo "bitti";
                $a = 2;
            }
        }
        sleep(1);
    }
}
?>