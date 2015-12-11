<?php
    function waitForCamp(){
        $webdriver = new WebDriver("localhost", "4444");
        $a = 1;
        while($a == 1){
            $result=$webdriver->executeScript("return sQuery('.sp-advanced-css-69').exists()",array());
            var_dump($result);
            if($result){
                echo "bitti";
                echo "asd";
                $a = 2;
            }
        }
        sleep(1);
}
?>