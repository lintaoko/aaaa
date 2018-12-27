<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-11-1
 * Time: 19:36
 */
session_start();
session_destroy();
header("Location:login.php");