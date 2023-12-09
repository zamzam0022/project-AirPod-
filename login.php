<?php 
include('include/header.php');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    

     <!-- navbar start -->

 
      
      <!-- navbar end -->

      <div id="audio">

    <div class="main">
        
        <div class="container">
            </form>
            <div id="box" class="frame">
                <div class="nav">
                    <ul class="links">
                        <!-- <li class=" text-center"><a id="head" class="btn">Login</a></li> -->
                        
                    
                    <p id="head" class="signin-active text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                </ul>
                </div>
                <div ng-app ng-init="checked = false">
                    <form class="form-signin" action="login.php" method="POST" > 
                         
                        <label id="email" for="dlno">Email</label> 
                        <input class="form-style" type="email" name="email" placeholder="EMAIL" required />
                         <label id="password" for="password">Password</label>
                          <input class="form-style" type="password" name="pass" placeholder="PASSWORD" required min="8" />
                           <input type="checkbox" id="checkbox" /> 
                           
                           
                        <button class="btn-animate"type="submit" name="login" value="Login">Login to your account </button>
                        <br><br><br><br>
                        <p id="sign" class="link">Don't have an account? <a href="./sign.php">Sign Up</a></p>
                    </form>
                  
                    <div class="success"> <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                            <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314 c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042 c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                            
                    </div>
                </div>
                <div class="forgot"> <a id="forget" href="#">Forgot your password?</a> </div>
                <div>

                    
                    <div class="cover-photo"></div>
                    <div class="profile-photo"></div>
                    <h1 class="welcome">Welcome,User</h1> <a class="btn-goback" value="Refresh" href="../index.html" >Go To Home Page</a>
       
                </div>
        
            </div> <a id="refresh" value="Refresh" onClick="history.go()"> <svg class="refreshicon" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;" xml:space="preserve">
                   
                <path d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224 c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5 c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5 c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025 c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614 l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z" /> </svg> </a>
       
       
                </div>
   
    </div>
    
  </div>



<?php 
if(isset($_POST["login"])){
$email = $_POST['email'];
$pass = $_POST['pass'];

$verify = "SELECT * from `reguser` where `email` = '$email'";
$result = mysqli_query($connection, $verify);
if($result){
if(mysqli_num_rows($result) >0){
    $row = mysqli_fetch_assoc($result);
    $dbpass = $row["pass"];
    $verifypass = password_verify($pass , $dbpass);
    if(!$verifypass){
        echo '<script>
        alert("login succesfull")
        window.location.href="index.php"
        </script>';
    }
    else{
        echo   '<script> alert("invalid password")</script>';
    }


}  else{
    echo   '<script> alert("invalid email")</script>';
}
}
}
?>


<?php
include('include/footer.php');


?>

</body>
</html>





