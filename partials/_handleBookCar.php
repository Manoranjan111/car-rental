<?php
session_start();
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    include"_dbconnect.php";
    $name = $_POST['fullName']; 
    $phonenumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $vehiclemodel = $_POST['vehiclemodel'];
    $vehiclenumber = $_POST['vehiclenumber'];
    $seatingcapacity = $_POST['seatingcapacity']; 
    $rentperday = $_POST['rentperday'];
    $pickupdate = $_POST['pickupDate'];
    $noofdays = $_POST['noofdays'];
    $gps = $_POST['gps']; 

    $sql = "INSERT INTO `booked_car_details` (`full_name`, `phone_number`, `email`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `pickup_date`, `no_of_days`, `gps_navigaton`, `booked_time`) VALUES ('$name', '$phonenumber', '$email', '$vehiclemodel', '$vehiclenumber', '$seatingcapacity', '$rentperday', '$pickupdate', '$noofdays','$gps', current_timestamp());";

    $result=mysqli_query($conn,$sql);
    if($result){
    header("Location: /index.php?carBookedSuccess=true");
    }else{
        header("Location: /index.php?carNotBookedSuccess=true");
        }
}
?>