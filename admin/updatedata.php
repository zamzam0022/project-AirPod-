<?php 
include("config.php");

if(isset($_POST["update"])){
    $id=$_POST["userid"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];

    $update = "UPDATE `user` SET `fname` = '$fname',`lname`='$lname',`email`='$email' where `id`='$id'";
$res=mysqli_query($connection,$update);
if($res){
    echo '<script>
    alert("update  data succesfull")
    window.location.href="viewuser.php"
    </script>';
}

}
?>