<?php

namespace Library;
use App\Models\Temperature;

class  Weather{
    public static function getHTML()
    {
        $url = "https://www.gismeteo.ru/weather-kazan-4364/now/";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $putData = curl_exec($ch);
        return $putData;
    }


    public static function parsing($data = 0)
    {
        if (gettype($data) != 'string'){
            throw new \InvalidArgumentException('invalid html');
        }
        $temperature = strpos($data, '<span class="unit unit_temperature_c"><span class="sign">');
        $temperature = substr($data, $temperature);
        $data = strpos($temperature, '</span><span class="unit unit_temperature_f">');
        $temperature = substr($temperature, 0, $data);
        $temperature = str_replace('<span class="unit unit_temperature_c"><span class="sign">', '', $temperature);
        $temperature = str_replace('<span class="lower">', '', $temperature);
        $temperature = str_replace('</span>', '', $temperature);
        if (empty($temperature)){
            throw new \InvalidArgumentException('invalid html');
        }
        return $temperature;
    }


    public static function getTemperatureFromGismeteo(){
        $data = Weather::getHTML();
        $temperature = Weather::parsing($data);
        return $temperature;
    }


    public static function saveTemperature($temperature){
        $weather = new Temperature;
        $weather -> temperature = $temperature;
        $weather->added_on= date('d.m.Y H:i:s');
        $weather->save();
    }
}
