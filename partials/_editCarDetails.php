<?php
echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../img/fav-icon.png" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="../style.css"/>
    <!-- Bootstrap CSS --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script  src="https://kit.fontawesome.com/53fb958445.js" crossorigin="anonymous"></script>
    <title>Edit Car Details</title>
    <style>
    </style>
</head>
<body>';
        include "_header.php";
        include "_dbconnect.php";
        // include "partials/_carousel.php";

        //  iterating for loop 
        $id=$_GET['carsno'];
        $sql= "SELECT * FROM `added_vehicle` WHERE sno=$id";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $vehicle_model=$row['vehicle_model'];
            $vehicle_number=$row['vehicle_number'];
            $seating_capacity = $row['seating_capacity'];
            $rent_per_day = $row['rent_per_day'];
        }
    echo'
    <div class="container w-50 ">
        <form action="/partials/_handleEditCarDetails.php" method="post">
            <div class="form-group mt-5">
            <input type = "hidden" class="form-control" name = "id" value = "'.$id.'" />
            <label for="vehiclemodel">Vehicle Model</label>
            <input type="text" class="form-control" name="vehiclemodel" value="'.$vehicle_model.'">
            </div>
            <div class="form-group mt-2">
            <label for="vehiclenumber">Vehicle Number</label>
            <input type="text" class="form-control" name="vehiclenumber" value="'.$vehicle_number.'">
            </div>
            <div class="form-group mt-2">
            <label for="seatingcapacity">Seating Capacity</label>
            <input type="text" class="form-control" name="seatingcapacity" value="'.$seating_capacity.'">
            </div>
            <div class="form-groupcmt-2">
            <label for="rentperday">Rent Per Day</label>
            <input type="text" class="form-control" name="rentperday" value="'.$rent_per_day.'">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>
    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- INCLUDING FOOTER -->
    ';
    include "_footer.php";
    echo'
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>

';
?>