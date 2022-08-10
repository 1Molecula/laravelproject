<?php

namespace Tests\Unit;

use App\Models\Temperature;
use Library\Weather;
use Tests\TestCase;

class WeatherTest extends TestCase
{

    public function testParsingSuccess()
    {
        $testData = '<span class="unit unit_temperature_c"><span class="sign">20</span><span class="unit unit_temperature_f">';
        $parsing = Weather::parsing($testData);
        $this->assertEquals(20, $parsing);
    }

    public function testParsingInvalidHtml()
    {
        $this->expectException(\InvalidArgumentException::class);
        $testData = '20';
        $parsing = Weather::parsing($testData);
    }

    public function testParsingInvalidParam()
    {
        $this->expectException(\InvalidArgumentException::class);
        $testData = 20;
        $parsing = Weather::parsing($testData);
    }

    public function testGetHtml()
    {
        $HTML = Weather::getHTML();
        $this->assertEquals("<!", substr($HTML, 0, 2));
    }

    public function testGetTemperatureFromGismeteo()
    {
        $temperature = Weather::getTemperatureFromGismeteo();
        $this->assertNotEquals("", substr($temperature, 0));
    }

    public function testSaveTemperature()
    {
        $count = Temperature::count();
        Weather::saveTemperature("1234");
        $count = Temperature::count() - $count;
        $this->assertEquals(1,  $count);
    }
}
