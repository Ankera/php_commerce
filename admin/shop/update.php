<?php
include '../../public/common/config.php';
include '../../public/common/function.php';

global $conn;

$sname=$_POST['name'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$shelf=$_POST['shelf'];
$brand_id=$_POST['brand_id'];
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

        $sql="UPDATE `shop` SET name='{$sname}',price='{$price}',stock='{$stock}',shelf='{$shelf}',brand_id='{$brand_id}',img='{$img}' WHERE id={$id}";

        if(mysqli_query($conn, $sql)){
            echo '<script>location="index.php"</script>';
        }
    }
}else{
    $sql="UPDATE `shop` SET name='{$sname}',price='{$price}',stock='{$stock}',shelf='{$shelf}',brand_id='{$brand_id}' WHERE id={$id}";
    echo '======', $sql;
    if(mysqli_query($conn, $sql)){
        echo '<script>location="index.php"</script>';
    }
}

mysqli_close($conn);