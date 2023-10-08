<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){ 
        include "_dbconnect.php";
        $id = $_POST["id"];
        $vehicle_model = $_POST["vehiclemodel"];
        $vehicle_number = $_POST["vehiclenumber"];
        $seating_capacity = $_POST["seatingcapacity"];
        $rent_per_day = $_POST["rentperday"];
   

        $sql = "UPDATE added_vehicle SET vehicle_model='$vehicle_model', vehicle_number='$vehicle_number', seating_capacity='$seating_capacity', rent_per_day='$rent_per_day' WHERE sno='$id';";


        $result=mysqli_query($conn,$sql);
        if($result){
            header("Location: /index.php?editCarSuccess=true");
            exit;
        }else{
            header("Location: /index.php?editCarNotSuccess=true");
        }
    }
?>
