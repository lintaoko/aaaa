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
        header("Location:View/comment.php");
    }
}