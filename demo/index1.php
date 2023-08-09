<?php
session_start();

$username= "user";
$password= "password";

if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin'] == true){
    header("Location:home.php");

}

if(isset($__POST['username'])&& isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password)
    {$_SESSION['loggedin']= true;
        header("Location: home.php");
    }
}




?>







<html lang="">
<h1>Demo Project</h1>
<body>
<form method = "post"action = "index.html">
    Username:<br/>

    <input type = "text" name = "username"> <br/>
    Password:  <br/>

    <label>
        <input type = "password" name = "password">
    </label> <br/>

    <input type = "submit" value = "Login"> <br/>
</form>
</body>

</html>


