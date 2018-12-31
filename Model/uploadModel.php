<?php
/**
 * Created by PhpStorm.
 * User: 12442
 * Date: 2018/12/30
 * Time: 18:12
 */

class uploadModel
{
    function upload($img){
        $arr = $_FILES["$img"];
        if ($arr['name']==null){
            return null;
        }else {
            if (($arr["type"] == "image/jpeg" || $arr["type"] == "image/png") && $arr["size"] < 10241000) {
//临时文件的路径
                $arr["tmp_name"];
//上传的文件存放的位置
//避免文件重复:
//1.加时间戳.time()加用户名.$uid或者加.date('YmdHis')
//2.类似网盘，使用文件夹来防止重复
                $filename = "../myProject/img/" . date('YmdHis') . $arr["name"];
//保存之前判断该文件是否存在
                if (file_exists($filename)) {
                    echo "<script>alert('$arr[name]已存在')</script>";
                    header("Refresh:0.5;url=View/msgs.php");
                    exit();
                } else {
                    //中文名的文件出现问题，所以需要转换编码格式
                    $filename2=$filename;
                    $filename = iconv("UTF-8", "gb2312", $filename);
                    //移动临时文件到上传的文件存放的位置（核心代码）
                    //括号里：1.临时文件的路径, 2.存放的路径
                    move_uploaded_file($arr["tmp_name"], $filename);
                    return strstr($filename2, '2');
                }
            } else {
                echo "<script>alert('$arr[name]上传的类型或大小不符')</script>";
                header("Refresh:0.5;url=View/msgs.php");
                exit();
            }
        }

    }
}