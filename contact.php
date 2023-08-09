<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php
require_once ("navbar2.php");
?>
<body>

<div class="contact">
    <div class="container">
        <h5> Contact Us </h5>
    </div>
</div>

<div class="message">
    <div class="conmessage">
        <p>If you can’t find your answer in <a class="faq"href="faq.php">Frequently Asked Questions,</a><br>
        please fill out the form below with any other questions you may have:</p><br>
        <h5> Send us a Message </h5>
        <br>
            <form method="post" class="formdata">
                <label >Name:</label> <input type="text" class="emailide" name="username" placeholder="Enter your Full Name"><br>
                <label>Email:</label> <input type="text" class="emailide"  name="useremail" placeholder="Email"><br>
                <label>Contact: </label> <input type="text" class="emailide"  name="usercontact" placeholder="Contact Number"><br>
                <label>Message: </label> <input type="text" class="emailide"  name="usermessage" placeholder="Message" style="height:200px;"><br>
                <br>
                <button type="submit" name="submit" class="btn btn-outline-info">Submit</button>
            </form>
        <?php require_once ("footer.php"); ?>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
