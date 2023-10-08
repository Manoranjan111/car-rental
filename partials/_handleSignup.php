<?php
$insert=false;
$passwordNotMatch=false;
$userNameExist=false;
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    include"_dbconnect.php";
  $signupusername = $_POST['signupusername'];
  $useremail = $_POST['useremail'];
  $phonenumber = $_POST['phonenumber'];
  $role = strtolower($_POST['role']);
  $signuppassword = $_POST['signuppassword'];
  $signupcpassword = $_POST['signupcpassword'];

  // CHECK USER IS CUSTOMER OR AGENT
  if($role == 'customer'){
    $sql="SELECT * FROM `users` WHERE email='$useremail'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
      // echo "Username Exist"; 
      $userNameExist=true;
      header("Location: /index.php?userExist=true");
      }else{
        if($signuppassword == $signupcpassword){
            $hash = password_hash($signuppassword,PASSWORD_DEFAULT);

              $sql= "INSERT INTO `users` (`name`, `email`, `phone_no`, `password`, `time`) VALUES ('$signupusername', '$useremail','$phonenumber', '$hash', current_timestamp());";
              $result=mysqli_query($conn,$sql);
              if($result){
              $insert=true;
              header("Location: /index.php?signupsuccess=true");
              
          }
          
        }else{
          $passwordNotMatch=true;
          header("Location: /index.php?passwordNotMatch=true");
        }
    }
  }else{
    $sql="SELECT * FROM `agent` WHERE email='$useremail'";
    $result=mysqli_query($conn,$sql);
    $numRows=mysqli_num_rows($result);
    if($numRows>0){
      // echo "Username Exist";
      $userNameExist=true;
      header("Location: /index.php?userExist=true");
      }else{
        if($signuppassword == $signupcpassword){
            $hash = password_hash($signuppassword,PASSWORD_DEFAULT);

              $sql= "INSERT INTO `agent` (`name`, `email`, `phone_no`, `password`, `time`) VALUES ('$signupusername', '$useremail','$phonenumber', '$hash', current_timestamp());";
              $result=mysqli_query($conn,$sql);
              if($result){
              $insert=true;
              header("Location: /index.php?signupsuccess=true");
              
          }
          
        }else{
          $passwordNotMatch=true;
          header("Location: /index.php?passwordNotMatch=true");
        }
    }
  }
  
}
?>