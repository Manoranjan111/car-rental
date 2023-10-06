<?php
session_start();
session_destroy();
header("Location: /rentalcar/index.php?logoutsuccess=true");
?> 