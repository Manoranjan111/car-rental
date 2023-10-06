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
    <title>Search-car</title>
    <style>
        a{
            text-decoration: none;
            color: black;
            font-weight: bold; 
        }
    </style>
</head>
<body class="mw-100vh">
    <?php 
        include "_header.php";
        include "_dbconnect.php";
        include "_addCarButton.php";

    ?>

    <div class="container text-center">
        <div class="row row-cols-2">
                <!-- iterating for loop -->
            <?php
                $search=$_GET['search'];
                $sql= "SELECT * FROM added_vehicle WHERE MATCH (vehicle_model) against('$search')";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['sno'];
                    $vehicle_model=$row['vehicle_model'];
                    $vehicle_number=$row['vehicle_number'];
                    $seating_capacity=$row['seating_capacity'];
                    $rent_per_day = $row['rent_per_day'];
                    $agent_name = $row['agent_name'];
                    
                    echo '   
                    <div class="col">
                        <div class="card w-100">
                            <img src="../img/carDisplayImage/'.$vehicle_model.'.png" class="card-img-top  " alt="car-image">
                            <div class="card-body">
                                <h4 class="card-title mb-2 text-start ">'.$vehicle_model.'</h4>
                                <div class="container text-center">
                                        <div class="row row-cols-3 mb-2">
                                            <div class="col card-text font-weight-bold"><b>Number</b></div>
                                            <div class="col card-text font-weight-bold"><b>Capacity</b></div>
                                            <div class="col card-text font-weight-bold"><b>rent/day</b></div>

                                            <div class="col card-text">'.$vehicle_number.'</div>
                                            <div class="col card-text">'.$seating_capacity.'</div> 
                                            <div class="col card-text">'.$rent_per_day.'</div>
                                        </div>
                                </div>
                                <div class="button text-start">
                                    ';
                                    //CHEKC IF USER == AGENT THAN WE CAN SHOW EDIT CAR DETAILS BUTTON
                                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true  && $_SESSION['role']=='agent'){

                                        echo'<a href="_editCarDetails.php?carsno='.$id.'" class="btn btn-success  mt-2">Edit Car Details</a>';

                                    }else{
                                        // CHECK IF USER IS LOGIN THEN WE CAN SHOW BOOT IT BUTTON
                                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true  && $_SESSION['role']=='customer'){
        
                                            echo'<a href="_bookCar.php?carsno='.$id.'" class="btn btn-success  mt-2">Book It</a>';
                                        }else{
                                            echo'<a href="#" class="btn btn-success disabled mt-2">Book It</a>';
                                        }
                                    }
                                    echo'   
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- INCLUDING FOOTER -->
    <?php include "_footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>