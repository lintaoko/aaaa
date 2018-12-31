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
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $output = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($output, true);
        $a= "白天的天气为".$data["result"]["day_weather"];
        $b= "夜晚的天气为".$data["result"]["night_weather"];
        echo "<script>alert('$a')</script>";
        echo "<script>alert('$b')</script>";
        header("Refresh:0.1;url=View/msgs.php");




    }
}