<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');


if(isset($_POST['addcat'])){
    $cname = $_POST['catname'];
    $insert = "INSERT INTO `category`(`catname`) value('$cname')";
    $result = mysqli_query($connection, $insert);
    echo '<script>
    alert("add product successfull")
    window.location.href="addproduct.php"
    </script>';
}

?>
<?php 
$insert = "SELECT * from `category`";
$result = mysqli_query($connection, $insert);
if($result){
    if(mysqli_num_rows($result) > 0){
   

 
?>

<?php 


if(isset($_POST["addproduct"])){
    $pname=$_POST["pname"];
    $pdec=$_POST["pdec"];
    $pprice=$_POST["pprice"];
    $pcategory = $_POST["category"];
    $pimage=$_FILES["pimage"]["name"];
    $tmp_name= $_FILES["pimage"]["tmp_name"];

    if(!empty($pname) AND !empty($pdec) AND !empty($pprice) AND !empty($pimage)){
        $insert = "INSERT into `products` (`pid`,`pname`,`pdec`,`pprice`,`pimage`,`pcategory`,`paction`,`pdate`) VALUES (NULL,'$pname','$pdec','$pprice'
        ,'$pimage','$pcategory','1',current_timestamp())";
  move_uploaded_file($tmp_name ,'upload/' .$pimage);
  $result = mysqli_query($connection,$insert);
  if($result){
    echo '<script>
    alert("add product successfull")
    window.location.href="addproduct.php"
    </script>';


  }
    



}
}
?>


    <div class="container">

        <!-- Outer Row -->.

        <div class="row justify-content-center">

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
        <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="category Name" name="catname" required>
                        <br>
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="addcat" value="add product">
                </div>
    </form>

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Add Product</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
            
            <div class="col-sm-6 mb-3 mb-sm-0">
            <select class="form-select" name="category" aria-label="Default select example">
          
            <option selected>products</option>
            <?php 
                     while($pro = mysqli_fetch_assoc($result)){
                echo '<option value="'.$pro['catid'].'">'. $pro['catname'].'</option>';
          
                     }
                    }
                }
              ?>
              </select>
           
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="Product Name" name="pname" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="description" name="pdec" required>
                 </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="price" name="pprice" required>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="file" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="add product" name="pimage" required>
                </div>
             
            </div>
            <!-- <a class="btn btn-primary btn-user btn-block" name="register">
                Register Account
            </a> -->
            <input type="submit" class="btn btn-primary btn-user btn-block" name="addproduct" >
            <hr>
            <a href="login.php" class="btn btn-google btn-user btn-block">
               </i>Already have an Acount?Login Here
            </a>
                                
        </form>

            </div>

        </div>

    </div>



</body>

</html>










<?php
include('includes/footer.php');


?>