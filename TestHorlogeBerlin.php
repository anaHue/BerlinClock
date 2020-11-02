<?php

require "HorlogeBerlin.php";
use PHPUnit\Framework\TestCase;

class TestHorlogeBerlin extends TestCase
{
    public function test_simpleMinutes_given0_shouldReturnXXXX(){
        $clock = new HorlogeBerlin();

        $actual = $clock->simpleMinutes(0);

        $this->assertEquals("XXXX", $actual);
    }

    public function test_simpleMinutes_given1_shouldReturnYXXX(){
        $clock = new HorlogeBerlin();

        $actual = $clock->simpleMinutes(1);

        $this->assertEquals("YXXX", $actual);
    }
}