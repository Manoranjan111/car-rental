<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true  && $_SESSION['role']=='agent'){
echo'
    <div class="container add-topic-bar">
        <div class="row text-start mt-3">
            <div class="col text-left">
                <h4 class="card-title"><a href="/rentalcar/partials/_totalBookedCar.php">View Booked Car</a> </h4>
            </div> 
            <div class="col-4 text-end">
                
                <button class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#addCarModalLable">Add Car</button>
            </div>
        </div>
    </div>
    ';
}
?>