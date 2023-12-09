
<?php 
include("config.php");
if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $Pass = $_POST['pass'];
    $RPass1 = $_POST['pass1'];

    if($Pass == $RPass1){
    // $hashPass = password_hash($Pass, PASSWORD_BCRYPT);


        $check_email = "SELECT * from `reguser` where email = '$email' ";
        $run_email = mysqli_query($connection, $check_email);
        if(mysqli_num_rows($run_email) > 0){
            echo '<script>
            alert("Email already exist")
            window.location.href="sign.php"
            </script>';
        }else{
            $insert = "INSERT INTO `reguser` (`id`,`fname`, `lname`, `email`, `pass`) VALUES (NULL,'$fname', '$lname', '$email','$Pass')";
        $connect_insert = mysqli_query($connection, $insert);
        if($connect_insert){
            echo '<script>
            alert("registration succesfull")
            window.location.href="index.php"
            </script>';
        }else{
            echo '<script>
            alert("registration failed")
            window.location.href="sign.php"
            </script>';
        }
        
        }
    }else{
        echo '<script>
        alert("password does not match")
        window.location.href="sign.php"
        </script>';
    }

}

?>