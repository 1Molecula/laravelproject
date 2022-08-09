<?php

namespace Tests\Unit;

use Library\Weather;
use PHPUnit\Framework\TestCase;

class ParsingTest extends TestCase
{

    public function testParsing()
    {
        $testData = '<span class="unit unit_temperature_c"><span class="sign">20</span><span class="unit unit_temperature_f">';
        $parsing = Weather::parsing($testData);
        $this->assertEquals(20, $parsing);

        $testData = '20';
        $parsing = Weather::parsing($testData);
        $this->assertEquals('Ошибка: неверные входные данные', $parsing);

        $testData = 20;
        $parsing = Weather::parsing($testData);
        $this->assertEquals('Ошибка: неверные входные данные', $parsing);
    }
}
