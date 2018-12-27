<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/27
 * Time: 21:20
 */
class apiController {


    function  getdata(){
        $date=date("Y-m-d",strtotime("-1 day"));
        $url = "http://v.juhe.cn/historyWeather/weather";
        $post_data = array ("city_id" => "2341", "weather_date"=>$date,"key" => "02fcfd60f2303ca618d59ad24611a035");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $output = curl_exec($ch);
        curl_close($ch);
        print_r($output);
        var_dump($output);
        $data = json_decode($output, true);
        echo "白天的天气为".$data["result"]["day_weather"];
        echo '<br>';
        echo "夜晚的天气为".$date["result"]["night_weather"];

    }
}