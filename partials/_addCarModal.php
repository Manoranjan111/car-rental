<div class="modal fade" id="addCarModalLable" tabindex="-1" aria-labelledby="addCarModalLable" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCarModalLable">Add Car Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/partials/_handleAddCar.php" method="post">
                    <div class="mb-3">
                        <label for="vehiclemodel" class="form-label">Vehicle model</label>
                        <input type="text" class="form-control" name="vehiclemodel">
                    </div>
                    <div class="mb-3">
                        <label for="vehiclenumber" class="form-label">Vehicle number</label>
                        <input type="text" class="form-control" name="vehiclenumber">
                    </div> 
                    <div class="mb-3">
                        <label for="seatingcapacity" class="form-label">Seating Capacity</label>
                        <input type="text" class="form-control" name="seatingcapacity">
                    </div> 
                    <div class="mb-3">
                        <label for="rentperday" class="form-label">Rent Per day</label>
                        <input type="text" class="form-control" name="rentperday">
                    </div> 

                    <button type="submit" class="btn btn-primary signup">Add Car</button>
                </form>
            </div>
        </div>
    </div>
</div>