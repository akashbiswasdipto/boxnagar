<html>
<head>
    <title>Boxnagar Wood & Furnitures</title>
    <link rel="stylesheet" href="faq.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php
require_once("navbar2.php");
?>
<body>



<div class="subscribe">
    <div class="subcontainer">
        <h5>Boxnagar Wood & Furniture's FAQ</h5>
    </div>
</div>
<br>
<br>
<div class="container">
<h5 style="font-size: 3vh;">FAQ</h5>
<p style="font-size:2vh;">Frequently asked questions have been grouped into various sections. View related questions:</p>

<h5>Shipping & Delivery</h5>
<br>

<button class="collapsible">How long does it take for delivery?</button>
<div class="content">
    <p>When you order from our social media/ website, we ensure that the order gets processed within 24 hours and gets delivered within 3-4 weeks.</p>
</div>
<button class="collapsible">How much do i have to pay for delivery?</button>
<div class="content">
    <p>Delivery cost is included in the total cost.</p>
</div>
<button class="collapsible">How can i track my order?</button>
<div class="content">
    <p>Once an order is submitted its details are emailed you. This email will contain the order number. You can login with your credentials to our site and track the order status as well as the order details.If you have any issues or queries please get in touch with our Customer Care immediately. Give us a call on +8801787659229 (9am-5pm) or drop us an email at info@boxnagargroup.com</p>
</div>
<button class="collapsible">Will i have to sign for my delivery?</button>
<div class="content">
    <p>Yes, you will be asked to sign a delivery form, in which you confirm that the product(s) was delivered in the correct condition (without obvious defects or damage).</p>
</div>
    <button class="collapsible">What if i am not home when my package arrives?</button>
    <div class="content">
        <p>Our shipping partner will leave a notice at your address notifying you of an alternative delivery or pick-up arrangement.</p>
    </div>
    <button class="collapsible">How do i change my shipping address after my order has been placed?</button>
    <div class="content">
        <p>We kindly ask you to call our customer service centre on +8801787659229 (9am-5pm)</p>
    </div>
    <br>
    <h5>Returns and Cancellations</h5>
    <br>
    <button class="collapsible">Can i cancel an order?</button>
    <div class="content">
        <p>No cancellations are allowed on Furniture categories once the order is placed. In case of any exception, at sole discretion of Boxnagar Wood & Furniture's, two-way shipping charges will be borne by the customer. In case of cancellations, no refund will be made for Part Payment orders that contain products from Furniture categories; the advance amount will be forfeited as cancellation charges.</p>
    </div>
    <button class="collapsible">What is the return notice period?</button>
    <div class="content">
        <p>Returns for Furniture category will be accepted only for Damaged/ Defective products. You will need to inform us of any damage/ defects within 48 hours of delivery of the product, in order to receive the replacement.</p>
    </div>
    <button class="collapsible">Are there any conditions placed on returning a product?</button>
    <div class="content">
        <p>Returns for Furniture category will be accepted only for Damaged/ Defective products. You will need to inform us of any damage/ defects within 48 hours of delivery of the product, in order to receive the replacement.</p>
    </div>
    <button class="collapsible">What if the packaging of the product is damaged upon delivery?</button>
    <div class="content">
        <p>If upon delivery of the product, you discover that the product packaging has been opened or is damaged, please do not accept the package and immediately notify our Customer Care team. We will offer to fix the product on the working site or taking it back to our workshop, depending on your preference and product availability.</p>
    </div>
    <button class="collapsible">Can i return a product that is found to be faulty upon see?</button>
    <div class="content">
        <p>Our products have a warranty period. If after using such a product, you identify any flaw or manufacturing defect, please get in touch with our Customer Care representative. We will be happy to facilitate a resolution.</p>
    </div>

</div>
<br>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
<?php
