<?php
/*
Copyright 2011 3e software house & interactive agency

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/


require_once "phpwebdriver/WebDriver.php";
$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect();
$webdriver->get("http://www.shoppbagg.com/");
//$webdriver->execute('alert("Hello")', '');
$guray = $webdriver->executeScript("return sQuery('.sp-custom-26-1449703130069').text()",array());
echo $guray;
//echo uniqid();
$tmp_filename = "/Users/gurayinan/Desktop/screenshot.png";
$result = $this->webdriver->getScreenshotAndSaveToFile($tmp_filename);
$this->assertTrue(file_exists($tmp_filename));
$this->assertTrue(filesize($tmp_filename)>100);
unlink($tmp_filename);
//$webdriver->executeScript("return alert('fuck this shit')",array());
sleep(5);
?>