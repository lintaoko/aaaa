<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/18
 * Time: 23:16
 */


function connectModel(){
    require('Model/connectModel.php');
    $model =new connectModel();
    $model->connect();
}
function msgsModel(){
    require('Model/getmsgsModel.php');
    $model =new getmsgsModel();
    $msg=$model->getmsgs();
    return $msg;
}
class msgsController{

    function getmsgs(){
        require('Model/msgModel.php');
        connectModel();
        $msg=msgsModel();
        session_start();
        $arrse=serialize($msg);
        $_SESSION['msg']=$arrse;
        header("Location:View/msgs.php?");
    }
}



