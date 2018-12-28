<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-20
 * Time: 18:28
 */
function connectModel(){
    require('Model/connectModel.php');
    $model =new connectModel();
    $model->connect();
}
function registeModel($userName,$userPass,$userEmail,$userPhone,$captcha){
    require('Model/registeModel.php');
    $model =new registeModel();
    $model->captcha($captcha);
    $model->PandEJ($userEmail,$userEmail);
    $model->registe($userName,$userPass,$userEmail,$userPhone);
}
class registeController {
    function  registe(){
        session_start();
        connectModel();
        require('Model/userModel.php');
        $user = new userModel();
        $arr=$_POST;
        $user->userName=$arr['userName'];
        $user->userPass=$arr['userPass'];
        $user->userEmail=$arr['userEmail'];
        $user->userPhone=$arr['userPhone'];
        $captcha=$arr['captcha'];
        registeModel($user->userName,$user->userPass,$user->userEmail,$user->userPhone,$captcha);
    }
}