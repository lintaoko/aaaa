<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-12-13
 * Time: 19:28
 */

function connectModel(){
    require('Model/connectModel.php');
    $model =new connectModel();
    $model->connect();
}
function loginModel($userName,$userPass,$captcha){
    require('Model/loginModel.php');
    $model =new loginModel();
    $model->captcha($captcha);
    $model->login($userName,$userPass);
}
class loginController
{
    public function login()
        {
            require('Model/userModel.php');
            $user = new userModel();
            session_start();
            $arr=$_POST;
            $captcha = $_POST["captcha"];
            $user->userName=$arr['userName'];
            $user->userPass=$arr['userPass'];
        connectModel();
        loginModel($user->userName,$user->userPass,$captcha);
    }
    public  function  cancel(){
        session_start();
        session_destroy();
        header("Location:View/login.php");
    }

}