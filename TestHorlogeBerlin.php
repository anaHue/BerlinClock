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

    private function actSimpleMinutes(string $nbMinutes) : string {
        return $this->clock->simpleMinutes($nbMinutes);
    }
}