
<?php 
include('include/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css/sign.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    
     <!-- navbar start -->


      
       <!-- navbar end  -->


   <div id="sign-back">
    <br><br>
    
  <section class="vh-100" >
    <form action="insert.php" method="POST">
    <div  class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div id="main" class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p id="head" class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up</p>
  
                  <form  onsubmit="signUp(event)" class="mx-1 mx-md-4">
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i id="iconf" class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input id="fname" name="fname" type="text" id="form3Example1c" class="form-control" placeholder=" Firstname" required />
                        
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i id="iconl" class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input id="lname" name="lname" type="text" id="form3Example1c" class="form-control" placeholder=" Lastname" required />
                        
                      </div>
                    </div>
               
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i id="icone" class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input id="email" name="email" type="email" id="form3Example3c" class="form-control" placeholder="Email" required />
                        
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i id="iconp" class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input id="password" name="pass" type="password" id="form3Example4c" class="form-control" placeholder="Password" required min="8" />
                        
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i id="iconrp" class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input id="repassword" name="pass1" type="password" id="form3Example4cd" class="form-control" placeholder="Repeat Password" required min="8" />
                        
                      </div>
                    </div>
  
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label id="para" class="form-check-label" for="form2Example3">
                        Do you have an account ?<a href="./login.php">Login</a>
                      </label>
                    </div>
                    <p id="result" style="color: green;"></p>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                     <button id="button" type="submit" name="register" value="Register"  class=" btn btn-primary btn-lg">Sign Up</button>
                    </div>
  
                  </form>
                
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img  class="img-fluid" height="120px" width="400" class="image" src="./pics/a-600x315w.png.webp" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>

<br><br>
<br><br>
<br><br>
</div>

<?php 
include('include/footer.php');
?>
<script src="./js/sign.js"></script>
 </body>
</html> 