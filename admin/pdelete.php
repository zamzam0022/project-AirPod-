
<?php 

include("config.php");

if(isset($_GET['pid'])) {
    $id = $_GET['pid'] ;

}
$delete = "DELETE from `products` WHERE `pid`= '$id'";
$result = mysqli_query($connection, $delete);
if($result){
    echo '<script>
    alert("delete data succesfull")
    window.location.href="viewpro.php"
    </script>';
   
}

?>