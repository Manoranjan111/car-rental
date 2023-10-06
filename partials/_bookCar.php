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
    <link rel="stylesheet" href="../css/bookCar.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script  src="https://kit.fontawesome.com/53fb958445.js" crossorigin="anonymous"></script>
    <title>Book-car</title>
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
        <form action="/rentalcar/partials/_handleBookCar.php" method="post">
            <p>Please fill out the form below to book a car.</p>
            <label for="fullName">Full Name <span class="mindatory">*</span></label>
            <input type="text" name="fullName" required>
            
            <label for="phoneNumber">Phone Number <span class="mindatory">*</span></label>
            <input type="tel" name="phoneNumber" required>
            
            <label for="email">Email Address <span class="mindatory">*</span></label>
            <input type="text" name="email" required>

            <label for="email">Vehicle Model</label>
            <input type="text" name="vehiclemodel" value="'.$vehicle_model.'" readonly>

            <label for="email">Vehicle Number</label>
            <input type="text" name="vehiclenumber" value="'.$vehicle_number.'" readonly>

            <label for="email">Seating Capacity</label>
            <input type="text" name="seatingcapacity" value="'.$seating_capacity.'" readonly>

            <label for="email">Rent Per Day</label>
            <input type="text" name="rentperday" value="'.$rent_per_day.'" readonly>

            <label for="pickupDate">Pickup Date  <span class="mindatory">*</span></label>
            <input type="date" name="pickupDate" required>

            <select class="form-select" name="noofdays" aria-label="Default select example">
                <option selected>No of Days</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

            </select>
            
            <label>Do you want to rent GPS navigation with the car? <span class="mindatory">*</span></label>
            <input type="radio" name="gps" value="Yes" required>
            <label for="gpsYes">Yes</label>
            <input type="radio" name="gps" value="No" required>
            <label for="gpsNo">No</label>
            
            <label>
                <input type="checkbox" name="terms" required>
                I agree to the terms and conditions of the car rental company.
            </label>

            <button type="submit" class="btn btn-primary mt-2">Book Car Now</button>
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