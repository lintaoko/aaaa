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
function mymsg($userName){
    require('Model/getmsgsModel.php');
    $model=new getmsgsModel();
    $mymsg=$model->mymsg($userName);
    return $mymsg;
}
function addmsgModel($img1,$img2,$img3,$userName,$content,$like){
    require ('Model/addmsgModel.php');
    $model =new addmsgModel();
    $model->addmsg($img1,$img2,$img3,$userName,$content,$like);
}
function uploadModel($img){
    require_once('Model/uploadModel.php');
    $model= new uploadModel();
    return $model->upload($img);
}
class msgsController{

    function getmsgs(){
        require('Model/msgModel.php');
        connectModel();
        $msg=msgsModel();
        session_start();
        $arrse=serialize($msg);
        $_SESSION['msg']=$arrse;
        header("Refresh:1;url=View/msgs.php");
    }
    function addmsgs(){
        require_once('Model/msgModel.php');
        $arr=$_POST;
        //  其他步骤

        //
        $imgname1="img1";
        $img1=uploadModel($imgname1);
        $imgname2="img2";
        $img2=uploadModel($imgname2);
        $imgname3="img3";
        $img3=uploadModel($imgname3);
        $userName = $arr['userName'];
        $content = $arr['content'];
        $like="0";
        addmsgModel($img1,$img2,$img3,$userName,$content,$like);
        header("Refresh:1;url=index.php?c=msgs&a=getmsgs");

    }
    function mymsg(){
        require('Model/msgModel.php');
        connectModel();
        session_start();
        $mymsg=mymsg($_SESSION['user']);
        $arrse=serialize($mymsg);
        $_SESSION['mymsg']=$arrse;
        header("Refresh:1;url=View/mymsg.php");
    }
}



