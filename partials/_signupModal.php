<div class="modal fade" id="signupModalLable" tabindex="-1" aria-labelledby="signupModalLable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLable">Signup to Rental-car</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/rentalcar/partials/_handleSignup.php" method="post">
                    <div class="mb-3">
                        <label for="signupusername" class="form-label">Name</label>
                        <input type="text" class="form-control" id="signupusername" name="signupusername"
                        placeholder="Name">
                    </div>
                    <div class="mb-3"> 
                        <label for="useremail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="useremail" name="useremail"
                        placeholder="Email"  aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">Phone No</label>
                        <input type="text" pattern="[6-9]{1}[0-9]{9}" class="form-control" id="phonenumber" name="phonenumber" placeholder="95XXXXXXXX">
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="role" aria-label="Default select example">
                            <option selected>Select Role Type</option>
                            <option value="customer">Customer</option>
                            <option value="agent">Agency</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="signuppassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signuppassword" name="signuppassword" placeholder="Password">
                    </div> 
                    <div class="mb-3">
                        <label for="signupcpassword" class="form-label">Conform Password</label>
                        <input type="password" class="form-control" id="signupcpassword" name="signupcpassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary signup">signup</button>
                </form>
            </div>
        </div>
    </div>
</div>