<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="./img/fav-icon.png" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" href="style.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <script  src="https://kit.fontawesome.com/53fb958445.js" crossorigin="anonymous"></script>
    <title>Rantal-car</title>
    <style>
        a{
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        include "partials/_header.php";
        include "partials/_dbconnect.php";
        include "partials/_carousel.php";
        include "partials/_addCarButton.php";
        include "partials/_carcontainer.php";
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- INCLUDING FOOTER -->
    <?php include "partials/_footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>