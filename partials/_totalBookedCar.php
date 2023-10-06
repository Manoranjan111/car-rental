<?php
echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="../img/fav-icon.png" type="image/x-icon" sizes="16x16" >
    <link rel="stylesheet" href="../style.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script  src="https://kit.fontawesome.com/53fb958445.js" crossorigin="anonymous"></script>
    <title>View Booked Car</title>
    <style> 
    a{
        text-decoration: none;
        color: #fff;
    }
    a:hover{
        text-decoration: none;
        color: #fff;
    }
    </style>
</head>
<body>';
    include "_header.php";
    include "_dbconnect.php";
    echo'
        <div class="container w-100 ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Vehicle Model</th>
                        <th scope="col">Vehicle Number</th>
                        <th scope="col">how many days</th>
                        <th scope="col">Total Bill</th>
                    </tr>
                </thead>
                <tbody>
                    ';
                        //  iterating for loop 
                        $sql= "SELECT * FROM `booked_car_details`";
                        $result=mysqli_query($conn,$sql);
                        $sno = 0;
                        while($row=mysqli_fetch_assoc($result)){
                            $name=$row['full_name'];
                            $phonenumber=$row['phone_number'];
                            $email=$row['email'];
                            $vehicle_model=$row['vehicle_model'];
                            $vehicle_number=$row['vehicle_number'];
                            $seating_capacity = $row['seating_capacity'];
                            $rent_per_day = $row['rent_per_day'];
                            $pickupdate = $row['pickup_date'];
                            $noofdays = $row['no_of_days'];
                            // $dateTime = strtotime($pickupdate);
                            // $pickupdate = date("d", $dateTime);

                            // $returndate = $row['return_date'];
                            // $dateTime = strtotime($returndate);
                            // $returndate = date("d", $dateTime);

                            // $noofdays = ($returndate - $pickupdate);
                            $gpsnavigation = $row['gps_navigaton'];
                            
                            $totalbill = $noofdays * $rent_per_day;
                           
                            $sno+=1;

                            echo'
                            
                            <tr>
                                <th scope="row">'.$sno.'</th>
                                <td>'.$name.'</td>
                                <td>'.$phonenumber.'</td>
                                <td>'.$email.'</td>
                                <td>'.$vehicle_model.'</td>
                                <td>'.$vehicle_number.'</td>
                                <td>'.$noofdays.'</td>
                                <td>'.$totalbill.'</td>
                            </tr>';
                    
                        }echo'
                </tbody>
            </table>
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