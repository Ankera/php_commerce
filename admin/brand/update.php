<?php

include '../../public/common/config.php';
global $conn;

$name= $_POST['name'];
$class_id= $_POST['class_id'];
$id = $_POST['id'];

if(!($name && $class_id)){
    return;
}

$sql = "UPDATE `brand` SET `name` = '$name', `class_id` = '$class_id' WHERE id = '$id'";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);