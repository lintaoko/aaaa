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
function addmsgModel($img1,$img2,$img3,$userName,$content,$like){
    require ('Model/addmsgModel.php');
    $model =new addmsgModel();
    $model->addmsg($img1,$img2,$img3,$userName,$content,$like);
}
class msgsController{

    function getmsgs(){
        require('Model/msgModel.php');
        connectModel();
        $msg=msgsModel();
        session_start();
        $arrse=serialize($msg);
        $_SESSION['msg']=$arrse;
        header("Location:View/msgs.php");
    }
    function addmsgs(){
        require ('Model/msgModel.php');
        $arr=$_POST;

        //  其他步骤

        //
        $img1=$arr['img1'];
        $img2=$arr['img2'];
        $img3=$arr['img3'];
        $userName = $arr['userName'];
        $content = $arr['content'];
        $like=0;
        addmsgModel($img1,$img2,$img3,$userName,$content,$like);
    }
}



