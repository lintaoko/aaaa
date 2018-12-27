<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-13
 * Time: 19:17
 */


$c_str=$_GET['c'];
$c_name=$c_str.'Controller';
$c_path='Controller/'.$c_name.'.php';
$method=$_GET['a'];
require($c_path);
$controller=new $c_name;
$controller->$method();

