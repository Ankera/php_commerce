<?php
// 验证码函数

function vcode(){
    //开启session
    session_start();

    // 1.创建画布资源
    $img=imagecreatetruecolor(214,50);

    // 2.准备颜色
    $black=imagecolorallocate($img,0,0,0);
    $white=imagecolorallocate($img,255,255,255);

    // 3.在画布上画图像或文字
    imagefill($img,0,0,$black);

    $arr=array_merge(range(0,9),range('a','z'),range("A","Z"));
    shuffle($arr);
    $rand=join('',array_slice($arr,0,4));

    //把四位随机数放入session中，供其他页面使用
    $_SESSION['vcode']=$rand;

    imagettftext($img,30,0,50,40,$white,'./msyh.ttf',$rand);

    for($i=0;$i<30;$i++){
        imageellipse($img,mt_rand(0,150),mt_rand(0,50),mt_rand(0,150),mt_rand(0,50),$white);
    }
    // 4.输出最终图像或保存最终图像
    header('content-type:image/jpeg');
    imagejpeg($img);

    // 5.释放画布资源
    imagedestroy($img);
}