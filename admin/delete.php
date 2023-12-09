
<?php 

include("config.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'] ;

}
$delete = "DELETE from `user` WHERE `id`= '$id'";
$result = mysqli_query($connection, $delete);
if($result){
    echo '<script>
    alert("delete data succesfull")
    window.location.href="viewuser.php"
    </script>';
   
}

?>