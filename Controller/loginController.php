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
function loginModel($userName,$userPass){
    require('Model/loginModel.php');
    $model =new loginModel();
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
            $user->userName=$arr['userName'];
            $user->userPass=$arr['userPass'];
        connectModel();
        loginModel($user->userName,$user->userPass);
    }

}