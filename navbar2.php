<!DOCTYPE html>
<html>
<head>
    <meta property="og:url"                content="https://www.boxnagargroup.com" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Boxnagar Wood & Furnitures" />
    <meta property="og:description"        content="Comfort you can live with." />
    <meta property="og:image"              content="img/about.jpg" />

    <style>

        ul {
            padding: 0;
            list-style: none;
            display: table;
            width: 100%;
            text-align: center;
            background-color: black;
            padding-bottom: 1%;
        }
        li {
            display: table-cell;
            position: relative;

        }
        .menu a {
            color: #fff;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 0.15em;

            display: inline-block;
            padding: 15px 20px;
            position: relative;
        }
        .menu a:after {
            background: none repeat scroll 0 0 transparent;
            bottom: 0;
            content: "";
            display: block;
            height: 2px;
            left: 50%;
            position: absolute;
            background: #fff;
            transition: width 0.3s ease 0s, left 0.3s ease 0s;
            width: 0;

        }
        .menu a:hover{
            text-decoration: none;
            color: yellow;
        }
        .menu a:hover:after {
            width: 100%;
            left: 0;
        }
        @media screen and (max-height: 300px) {
            ul {
                margin-top: 40px;
            }
        }

        .logo{
            padding-left: 5%;
            color:white;
        }
        .logo a{

        }
        .menu{
            padding-top: .5%;
            padding-left: 40%;
            padding-bottom: .5%;

        }
    </style>
</head>
<body>
    <ul>

            <li>
                <div class="logo">
                <img src="img/logo-furniture.png" width="60px" height="60px" style="color:yellow;"> Boxnagar Wood & Furniture
                </div>
            </li>
        <div class="menu" id="myTopnav">
                <li><a href="home.php" >Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
        </div>
    </ul>


</body>
</html>
