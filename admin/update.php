<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');

?>
<?php 

include("config.php");

if(isset($_GET["id"])){
    $user_id = $_GET["id"];
    $fetch_data = "SELECT * from `user` where `id` = '$user_id'";
    $result = mysqli_query($connection,$fetch_data);
    if($result){
        if(mysqli_num_rows($result)> 0){
  

?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">
<?php 
           while( $row = mysqli_fetch_assoc($result)){
  ?>

    <div class="col-xl-10 col-lg-12 col-md-9">
        <h2>update data</h2>
        <hr>
<form class="user" action="updatedata.php" method="POST">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="hidden" class="form-control form-control-user" id="exampleFirstName"
                placeholder="First Name" name="userid" required  value="<?php echo $row['id']?>">
            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                placeholder="First Name" name="fname" required  value="<?php echo $row['fname']?>">
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user" id="exampleLastName"
                placeholder="Last Name" name="lname" required  value="<?php echo $row['lname']?>">
         </div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
            placeholder="Email Address" name="email" required  value="<?php echo $row['email']?>">
    </div>
  
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    <input type="submit" class="btn btn-primary btn-user btn-block" name="update" >
    <hr>

                        
</form>
<?php 
}
}
}
}
?>

    </div>

</div>

</div>


<?php
include('includes/footer.php');


?>