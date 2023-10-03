<?php

include '../../public/common/config.php';
global $conn;

$name= $_POST['name'];
$class_id= $_POST['class_id'];

if(!($name && $class_id)){
    return;
}

$sql = "INSERT INTO `brand` (`name`, `class_id`) VALUES ('$name', '$class_id')";

if(mysqli_query($conn, $sql)){
    echo '<script>location="./index.php"</script>';
}
mysqli_close($conn);
