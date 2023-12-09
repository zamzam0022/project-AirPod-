<?php 

include("config.php");


if(isset($_GET["pid"])){
    $id = $_GET["pid"];
}
$trash = "UPDATE `products` set `status` = '0' where `pid`='$id'";
$tra = mysqli_query($connection, $trash);
if($tra){
    header("location:ptrashdata.php");
}

?>