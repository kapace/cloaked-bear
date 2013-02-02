<?php
require_once(dirname(__FILE__) . '/simpletest/autorun.php');
require_once(dirname(__FILE__) . '/../application/helpers/validate_helper.php');

class TestValidation extends UnitTestCase {
    function testAPNameValidation() {
        $this->assertTrue(validate_name("test"));
        $this->assertFalse(validate_name("123"));
    }
}
?>
