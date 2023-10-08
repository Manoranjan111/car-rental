<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    include "_dbconnect.php";
    $loginemail = $_POST["loginemail"];
    $loginpassword = $_POST["loginpassword"];
    $role = strtolower($_POST['role']);


    // CHECK USER IS AGENT OR CUSTOMER
    if($role == 'customer'){
        //CHECKING USERNAME ALREADY EXIST OR NOT  
        $sql = "SELECT * FROM `users` WHERE email='$loginemail';";
        $result = mysqli_query($conn, $sql);
        $numRows=mysqli_num_rows($result);
        if($numRows == 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($loginpassword, $row['password'])){
                session_start();
                $_SESSION['loggedin'] = true; 
                $_SESSION['useremail'] = $loginemail;
                $_SESSION['role'] = $role;
                
                header("Location: /index.php?loginsuccess=true");
            }
            else{
                header("Location: /index.php?passwordnotmatch=true");
            }
        }else{
            header("Location: /index.php?invalidemail=true");
        }
    }else{
        //CHECKING USERNAME ALREADY EXIST OR NOT  
        $sql = "SELECT * FROM `agent` WHERE email='$loginemail';";
        $result = mysqli_query($conn, $sql);
        $numRows=mysqli_num_rows($result);
        if($numRows == 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($loginpassword, $row['password'])){
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['useremail'] = $loginemail;
                $_SESSION['role'] = $role;
                
                header("Location: /index.php?loginsuccess=true");
            }
            else{
                header("Location: /index.php?passwordnotmatch=true");
            }
        }else{
            header("Location: /index.php?invalidemail=true");
        }
    }
    
}

?>
