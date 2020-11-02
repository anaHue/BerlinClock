<?php

require "HorlogeBerlin.php";
use PHPUnit\Framework\TestCase;

class TestHorlogeBerlin extends TestCase
{
    private $clock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->clock = new HorlogeBerlin();
    }

    public function test_simpleMinutes_given0_shouldReturnXXXX(){

        $actual = $this->actSimpleMinutes("0");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_simpleMinutes_given1_shouldReturnYXXX(){

        $actual = $this->actSimpleMinutes("1");

        $this->assertEquals("YXXX", $actual);
    }

    public function test_simpleMinutes_given2_shouldReturnYYXX(){

        $actual = $this->actSimpleMinutes("2");

        $this->assertEquals("YYXX", $actual);
    }

    public function test_simpleMinutes_given3_shouldReturnYYYX(){

        $actual = $this->actSimpleMinutes("3");

        $this->assertEquals("YYYX", $actual);
    }

    private function actSimpleMinutes(string $nbMinutes) : string {
        return $this->clock->simpleMinutes($nbMinutes);
    }
}