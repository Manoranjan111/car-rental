<div class="modal fade" id="loginModalLable" tabindex="-1" aria-labelledby="loginModalLable" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLable">Login to Rental-car</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            <div class="modal-body">
                <form action="/rentalcar/partials/_handleLogin.php" method="post">
                    <div class="mb-3">
                        <label for="loginemail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="loginemail" name="loginemail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="loginpassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginpassword" name="loginpassword">
                    </div> 

                    <!-- <div class="mb-3">
                        <input type="radio" name="role" value="customer">
                        <label for="css">Customer</label><br>
                        <input type="radio" name="role" value="agent">
                        <label for="html">Agent</label><br>
                    </div> -->

                    <div class="mb-3">
                        <select class="form-select" name="role" aria-label="Default select example">
                            <option selected>Select Role Type</option>
                            <option value="customer">Customer</option>
                            <option value="agent">Agency</option>
                        </select> 
                    </div>

                    <button type="submit" class="btn btn-primary login">login</button>
                </form>
            </div>
        </div>
    </div>
</div>