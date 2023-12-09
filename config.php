<?php 
$servername = "localhost";
$username = "root";
$pass ="";
$db = "databass";


$connection = mysqli_connect($servername, $username, $pass, $db);
if(!$connection){
    echo mysqli_connect_error();
}

?>