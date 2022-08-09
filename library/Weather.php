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

    public static function parsing($testData = 0)
    {

        if ($testData == 0) {
            $putData = Weather::getHTML();
        }else{
            $putData = $testData;
        }
        $temperature = strpos($putData, '<span class="unit unit_temperature_c"><span class="sign">');
        $temperature = substr($putData, $temperature);
        $putData = strpos($temperature, '</span><span class="unit unit_temperature_f">');
        $temperature = substr($temperature, 0, $putData);
        $temperature = str_replace('<span class="unit unit_temperature_c"><span class="sign">', '', $temperature);
        $temperature = str_replace('<span class="lower">', '', $temperature);
        $temperature = str_replace('</span>', '', $temperature);
        if(empty($temperature)){
            return 'Ошибка: неверные входные данные';
        }
        return $temperature;

    }
    public static function temperature(){

        $temperature = Weather::parsing();
        $weather = new Temperature;
        $weather -> temperature = $temperature;
        $weather->added_on= date('d.m.Y H:i:s');
        $weather->save();

    }
}


