<?php
$servername="localhost";
$username="root";
$password="RentalCar123m";
$database="rental_car";

 
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "Database not connected";
    // die("Sorry We are failed to connecting the database".mysqli_connect_error());
}else{
//    echo "database connecting Sucessfully";
}

?>