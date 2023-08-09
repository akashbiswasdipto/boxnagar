<html>
<head>
    <title>Boxnagar Wood & Furnitures</title>
    <link rel="stylesheet" href="shop.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php
require_once ("navbar2.php");
?>

<style>
    .row{
width: 101%;
    }
    .container1 {
        position: relative;
        width: 33.33%;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlay {
        position: absolute;
        bottom: 100%;
        left: 0;
        right: 0;
        background-color: #062121;
        overflow: hidden;
        width: 100%;
        height:0;
        transition: .5s ease;
        opacity: 80%;
    }

    .container1:hover .overlay {
        bottom: 0;
        height: 100%;
    }

    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
        font-family: aller_b;
    }
    .text p{
        font-family: ginebra;
        font-size: 9vh;
    }
</style>


<body>
    <div class="home">
        <div class="container">
            <h4>From Our Family</h4>
            <h4>To Yours</h4>
            <hr class="border">
            <br>
            <h5>Shop from our 160+ designed furniture's because,</h5>
            <h5>Life is too short for boring furniture.</h5>
        </div>
    </div>
    <div class="subscribe">
        <div class="subcontainer">
            <h5>Home Furniture</h5>
        </div>
    </div>
    <div class="row">
        <div class="container1">
            <img src="sofa4.jpg" alt="Sofa" class="image">
            <div class="overlay">
                <div class="text">
                    <p>SOFA</p>
                    <hr class="border">
                    <a href="sofa.php" class="btn btn-info">View Designs</a>
                </div>

            </div>
        </div>
        <div class="container1">
            <img src="bedintro.jpg" alt="Bed" class="image">
            <div class="overlay">
                <div class="text">
                    <p>BED</p>
                    <hr class="border">
                    <a href="bed.php" class="btn btn-info">View Designs</a></div>
            </div>
        </div>
        <div class="container1">
            <img src="bedrintro.jpg" alt="Bedroom" class="image">
            <div class="overlay">
                <div class="text">
                    <p>BEDROOM</p>
                    <hr class="border">
                    <a href="bedroom.php" class="btn btn-info">View Designs</a></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container1">
            <img src="dining.jpg" alt="Dining Table" class="image">
            <div class="overlay">
                <div class="text"><p>DINING ROOM</p>
                    <hr class="border">
                    <a href="diningtable.php" class="btn btn-info">View Designs</a></div>
            </div>
        </div>
        <div class="container1">
            <img src="light.jpg" alt="Alo" class="image">
            <div class="overlay">
                <div class="text"><p>WOODEN LAMP</p>
                    <hr class="border">
                    <a href="light.php" class="btn btn-info">View Designs</a></div>
            </div>
        </div>
        <div class="container1">
            <img src="living.jpg" alt="Living Room" class="image">
            <div class="overlay">
                <div class="text"><p>LIVING ROOM</p>
                    <hr class="border">
                    <a href="living.php" class="btn btn-info">View Designs</a></div>
            </div>
        </div>
    </div>
    <?PHP
    require_once ("footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Akash Biswas
 * Date: 1/24/2020
 * Time: 11:00 PM
 */