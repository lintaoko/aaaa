<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/26
 * Time: 11:28
 */


function connectModel(){
    require('Model/connectModel.php');
    $model =new connectModel();
    $model->connect();
}
function getCommentModel($id){
    require ('Model/getCommentModel.php');
    $model=new getCommentModel();
    $comment=$model->getComment($id);
    return $comment;
}
function addCommentModel($fromId,$content,$userName){
    require ('Model/addCommentModel.php');
    $model =new addCommentModel();
    $model->addComment($fromId,$content,$userName);
}
class commentController
{
    function getComment(){
        require ('Model/commentModel.php');
        $id=$_GET["id"];
        connectModel();
        $comment=getCommentModel($id);
        session_start();
        $arrse=serialize($comment);
        $_SESSION['comment']=$arrse;
        header("Refresh:0.1;url=View/comment.php?id=$id");
    }
    function addComment(){
        require ('Model/commentModel.php');
        $id=$_POST["id"];
        $userName=$_POST["userName"];
        $content=$_POST["content"];
        addCommentModel($id,$content,$userName);
        header("Refresh:0.1;url=index.php?c=comment&a=getComment&id=$id");
    }
}