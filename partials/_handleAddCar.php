<?php
session_start();
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    include"_dbconnect.php";
    $vehiclemodel = $_POST['vehiclemodel'];
    $vehiclenumber = $_POST['vehiclenumber'];
    $seatingcapacity = $_POST['seatingcapacity'];
    $rentperday = $_POST['rentperday'];
    $agentname =  $_SESSION['useremail'];

    $sql=  "INSERT INTO `added_vehicle` (`vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `agent_name`, `time`) VALUES ('$vehiclemodel', '$vehiclenumber', '$seatingcapacity', ' $rentperday', '$agentname', current_timestamp());";

    $result=mysqli_query($conn,$sql);
    if($result){ 
    header("Location: /index.php?addCarSuccess=true");
    }else{
        header("Location: /index.php?addCarNotSuccess=true");
        }
}
?>