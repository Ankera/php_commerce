<?php
include '../../public/common/config.php';
include '../../public/common/function.php';

global $conn;

$pos=$_POST['pos'];
$url=$_POST['url'];
$id=$_POST['id'];
$imgsrc=$_POST['imgsrc'];

$imgerror=$_FILES['img']['error'];

if($imgerror===0){
    //图片上传
    $src=$_FILES['img']['tmp_name'];

    $name=$_FILES['img']['name'];

    $array = explode('.', $name);
    $ext=array_pop($array);

    $dst='../../public/uploads/'.time().mt_rand().'.'.$ext;

    if(move_uploaded_file($src,$dst)){
        //进行图片缩放200x200

        thumb($dst,200,200);

        //删除原图
        $oldfile="../../public/uploads/{$imgsrc}";
        $oldfile2="../../public/uploads/thumb_{$imgsrc}";

        unlink($oldfile);
        unlink($oldfile2);

        $img=basename($dst);

        $sql="UPDATE `advert` SET pos='{$pos}',url='{$url}', img='{$img}' WHERE id={$id}";

        if(mysqli_query($conn, $sql)){
            echo '<script>location="index.php"</script>';
        }
    }
}else{
    $sql="UPDATE `advert` SET  pos='{$pos}',url='{$url}' WHERE id={$id}";
    if(mysqli_query($conn, $sql)){
        echo '<script>location="index.php"</script>';
    }
}

mysqli_close($conn);