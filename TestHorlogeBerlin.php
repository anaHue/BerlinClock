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

    public function test_simpleMinutes_given4_shouldReturnYYYY(){

        $actual = $this->actSimpleMinutes("4");

        $this->assertEquals("YYYY", $actual);
    }

    public function test_simpleMinutes_given5_shouldReturnXXXX(){

        $actual = $this->actSimpleMinutes("5");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_simpleMinutes_given6_shouldReturnYXXX(){

        $actual = $this->actSimpleMinutes("6");

        $this->assertEquals("YXXX", $actual);
    }

    private function actSimpleMinutes(string $nbMinutes) : string {
        return $this->clock->simpleMinutes($nbMinutes);
    }

    public function test_blockFiveMinutes_given0_shouldReturnXXXXXXXXXXX(){

        $actual = $this->actBlockFiveMinutes("0");

        $this->assertEquals("XXXXXXXXXXX", $actual);
    }

    public function test_blockFiveMinutes_given1_shouldReturnXXXXXXXXXXX(){

        $actual = $this->actBlockFiveMinutes("1");

        $this->assertEquals("XXXXXXXXXXX", $actual);
    }

    public function test_blockFiveMinutes_given5_shouldReturnYXXXXXXXXXX(){

        $actual = $this->actBlockFiveMinutes("5");

        $this->assertEquals("YXXXXXXXXXX", $actual);
    }

    public function test_blockFiveMinutes_given6_shouldReturnYXXXXXXXXXX(){

        $actual = $this->actBlockFiveMinutes("6");

        $this->assertEquals("YXXXXXXXXXX", $actual);
    }

    public function test_blockFiveMinutes_given10_shouldReturnYYXXXXXXXXX(){

        $actual = $this->actBlockFiveMinutes("10");

        $this->assertEquals("YYXXXXXXXXX", $actual);
    }

    public function test_blockFiveMinutes_given15_shouldReturnYYRXXXXXXXX(){

        $actual = $this->actBlockFiveMinutes("15");

        $this->assertEquals("YYRXXXXXXXX", $actual);
    }

    public function test_blockFiveMinutes_given20_shouldReturnYYRYXXXXXXX(){

        $actual = $this->actBlockFiveMinutes("20");

        $this->assertEquals("YYRYXXXXXXX", $actual);
    }

    public function test_blockFiveMinutes_given46_shouldReturnYYRYYRYYRXX(){

        $actual = $this->actBlockFiveMinutes("46");

        $this->assertEquals("YYRYYRYYRXX", $actual);
    }

    public function test_blockFiveMinutes_given60_shouldReturnXXXXXXXXXXX(){

        $actual = $this->actBlockFiveMinutes("60");

        $this->assertEquals("XXXXXXXXXXX", $actual);
    }

    private function actBlockFiveMinutes(string $nbMinutes) : string {
        return $this->clock->blockFiveMinutes($nbMinutes);
    }

    public function test_simpleHours_given0_shouldReturnXXXX(){

        $actual = $this->actSimpleHours("0");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_simpleHours_given1_shouldReturnRXXX(){

        $actual = $this->actSimpleHours("1");

        $this->assertEquals("RXXX", $actual);
    }

    public function test_simpleHours_given2_shouldReturnRRXX(){

        $actual = $this->actSimpleHours("2");

        $this->assertEquals("RRXX", $actual);
    }

    public function test_simpleHours_given3_shouldReturnRRRX(){

        $actual = $this->actSimpleHours("3");

        $this->assertEquals("RRRX", $actual);
    }

    public function test_simpleHours_given4_shouldReturnRRRR(){

        $actual = $this->actSimpleHours("4");

        $this->assertEquals("RRRR", $actual);
    }

    public function test_simpleHours_given16_shouldReturnRXXX(){

        $actual = $this->actSimpleHours("16");

        $this->assertEquals("RXXX", $actual);
    }

    private function actSimpleHours(string $nbHours) : string {
        return $this->clock->simpleHours($nbHours);
    }

    public function test_blockFiveHours_given0_shouldReturnXXXX(){

        $actual = $this->actBlockFiveHours("0");

        $this->assertEquals("XXXX", $actual);
    }

    public function test_blockFiveHours_given5_shouldReturnRXXX(){

        $actual = $this->actBlockFiveHours("5");

        $this->assertEquals("RXXX", $actual);
    }

    public function test_blockFiveHours_given10_shouldReturnRRXX(){

        $actual = $this->actBlockFiveHours("10");

        $this->assertEquals("RRXX", $actual);
    }

    public function test_blockFiveHours_given15_shouldReturnRRRX(){

        $actual = $this->actBlockFiveHours("15");

        $this->assertEquals("RRRX", $actual);
    }

    public function test_blockFiveHours_given20_shouldReturnRRRR(){

        $actual = $this->actBlockFiveHours("20");

        $this->assertEquals("RRRR", $actual);
    }

    private function actBlockFiveHours(string $nbHours) : string {
        return $this->clock->blockFiveHours($nbHours);
    }

}