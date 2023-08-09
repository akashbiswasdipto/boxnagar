<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="bedroom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>

</style>
<body style="background-color: black">
<?php
require_once ('../navbar2.php');
?>
<div class="row">
    <div class="column left">
        <div class="w3-content">
            <div class="imgcon">
                <img class="mySlides" src="img/prod-4/1.jpg" style=" padding-left:7%;display:none">
                <img class="mySlides" src="img/prod-4/2.jpg" style=" padding-left:7%;">
                <img class="mySlides" src="img/prod-4/3.jpg" style="padding-left:7%;display:none">
            </div>
            <div class="w3-row-padding w3-section" style="text-align: center" >
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/prod-4/1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/prod-4/2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                </div>
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="img/prod-4/3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                </div>
            </div>
        </div>
    </div>
    <div class="column right">
        <h1>Modern Bed - Linen Weave (Natural)</h1>
        <br>
        <p>Dimension: 57.3"w x 78.5"d x 45.2"h.</p>
        <div class="text">
            <p>Inspired by Scandinavian modernism, our Modern Bed marries a simple upholstered headboard with playfully angled legs in a warm pecan finish. The result? A streamlined piece that's easy on the eyes.</p>
        </div>
        <br>
        <h4>Material: Oak Wood.</h4>
        <p>38,000 Tk.</p>

        <h4>Material: Segun Wood.</h4>
        <p>48,000 Tk.</p>
        <p style="font-size: 1.5vh;">Delivery within 20 days</p>
        <br>
        <button class="submit" type="submit">Place Order</button>
    </div>
</div>

<script>
    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
    }
</script>

<?php
require_once ('footer.php');
?>
</body>
</html>
