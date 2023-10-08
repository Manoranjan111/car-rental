<?php
session_start();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container-fluid">
  <a class="navbar-brand" href="/index.php">Rental-car</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="https://manoranjan0001.netlify.app/" target="_blank">About</a>
      </li>';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
        echo'<li class="nav-item">
        <a class="nav-link active mx-5" href="#">'.strtoupper($_SESSION['useremail']).' Welcome to this forum </a>
      </li>
        ';
      
      }
      echo'
      </ul>';

      
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo'
      <form class="d-flex "  action= "search.php" method="get" >
      <input class="form-control me-2 " type="search" name="search"  placeholder="Search" aria-label="Search">

      <button class="btn btn-success" type="submit" >Search</button>
      <a href="partials/_logoutModal.php" class="btn btn-outline-success mx-1">Logout</a>  
      </form>';
    }
    else{
      echo'
      <form class="d-flex " action="/partials/_searchResult.php" method ="get" >
        <input class="form-control me-2  " type="search" name="search"  placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit" >Search</button>   
      </form>

      <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#loginModalLable" >Login</button>
      <button class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModalLable">Signup</button>';
      
    }
    echo'
    
  </div>
</div>
</nav>';
      
 
include '_loginModal.php';
include '_signupModal.php';
include '_addCarModal.php';
// include '_editCarModal.php';

// CHECKING SIGNUPMODAL FORM
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> Your account is created.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['userExist']) && $_GET['userExist']=="true"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> Email already exist.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['passwordNotMatch']) && $_GET['passwordNotMatch']=="true"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> Passowrd does not match.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
//CHECKING LOGINModal FORM
if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong> You have loggedlin .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['passwordnotmatch']) && $_GET['passwordnotmatch']=="true"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> Wrong password .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if(isset($_GET['invalidemail']) && $_GET['invalidemail']=="true"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong> Invalid email .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//LOGOUT FORM
if(isset($_GET['logoutsuccess']) && $_GET['logoutsuccess']=="true"){
  echo '<div class="alert alert-primary alert-dismissible fade show my-0" role="alert">
  <strong>Success!</strong>You have Successfully Logout.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
//NOTLOGIN
if(isset($_GET['notlogin']) && $_GET['notlogin']=="true"){
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
  <strong>Error!</strong>You are not login please login first.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

// Add CAR INTO DATABASE
if(isset($_GET['addCarSuccess']) && $_GET['addCarSuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success! </strong>Car added!!!.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


if(isset($_GET['addCarNotSuccess']) && $_GET['addCarNotSuccess']=="true"){
  echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>Error! </strong>Car Not Added Try some other time.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

// EDIT CAR INTO DATABASE
if(isset($_GET['editCarSuccess']) && $_GET['editCarSuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success! </strong>Car Details Updated!!!.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


if(isset($_GET['editCarNotSuccess']) && $_GET['editCarNotSuccess']=="true"){
  echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>Error! </strong>Car Details not Updated.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

// CAR BOOKED CONFORMATIONS
if(isset($_GET['carBookedSuccess']) && $_GET['carBookedSuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Success! </strong>Car Booked!!!.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


if(isset($_GET['carNotBookedSuccess']) && $_GET['carNotBookedSuccess']=="true"){
  echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>Error! </strong>Car Not Booked try some time letter !!!.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>