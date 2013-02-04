<?php
require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once(dirname(__FILE__) . '/../application/helpers/validate_helper.php');

class TestValidation extends UnitTestCase {
    function testNameValidation() {
        $this->assertTrue(validate_name("test"));
        $this->assertFalse(validate_name("123"));
    }
    function testIdValidation() {
        $this->assertTrue(validate_id("123"));
        $this->assertFalse(validate_id("test"));
    }
    function testDateValidation() {
        $this->assertTrue(validate_date("2012-01-01"));
        $this->assertFalse(validate_date("test"));
        $this->assertFalse(validate_date("123"));
    }
    function testStatusValidation() {
        $this->assertTrue(validate_status("A"));
        $this->assertTrue(validate_status("D"));
        $this->assertFalse(validate_status("123"));
        $this->assertFalse(validate_status("Anythingelse"));
    }
}
?>
