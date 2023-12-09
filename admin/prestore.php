<?php 
include("config.php");

if(isset($_GET["pid"])){
    $id = $_GET["pid"];
}
$restore = "UPDATE `products` SET `status` = 1 where `pid` = '$id'";
$result = mysqli_query($connection,$restore);
if($result){
    echo '<script>
    window.location.href="viewpro.php"
    </script>';
}
?>