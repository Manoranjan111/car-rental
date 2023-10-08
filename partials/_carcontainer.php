<div class="container text-center">
<p class="h1 text-start mb-4">Available Cars </p>
    <div class="row row-cols-2">
            <!-- iterating for loop -->
        <?php
            $sql= "SELECT * FROM `added_vehicle`";
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
                        <img src="./img/carDisplayImage/'.$vehicle_model.'.png" class="card-img-top" alt="car-image">
                        <div class="card-body">
                            <h4 class="card-title mb-2 text-start ">'.$vehicle_model.'</h4>

                            <div class="container text-start mb-3">
                                <div class="row">
                                    <div class="col card-text font-weight-bold"><b>Number</b> <br> '.$vehicle_number.'</div>

                                    <div class="col card-text font-weight-bold"><b>Capacity </b> <br> '.$seating_capacity.' </div>

                                    <div class="col card-text font-weight-bold"><b>rent/day</b> <br>
                                      '.$rent_per_day.' </div>
                                </div>
                            </div>
                            
                            <div class="button text-start">
                                ';
                                //CHEKC IF USER == AGENT THAN WE CAN SHOW EDIT CAR DETAILS BUTTON
                                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true  && $_SESSION['role']=='agent'){
                                    // echo'<button class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#editCarModalLable">Edit Car Details</button>';

                                    echo'<a href="partials/_editCarDetails.php?carsno='.$id.'" class="btn btn-success  mt-2">Edit Car Details</a>';

                                }else{
                                    // CHECK IF USER IS LOGIN THEN WE CAN SHOW BOOT IT BUTTON
                                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true  && $_SESSION['role']=='customer'){
    
                                        echo'<a href="partials/_bookCar.php?carsno='.$id.'" class="btn btn-success  mt-2">Book It</a>';
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
