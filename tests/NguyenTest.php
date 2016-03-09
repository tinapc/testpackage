<?php

use Hung\Nguyen\Nguyen;

class NguyenTest extends PHPUnit_Framework_TestCase {

    public function testNachHasCheese()
    {
        $nacho = new Nguyen();
        $this->assertTrue($nacho->covert());
    }

}