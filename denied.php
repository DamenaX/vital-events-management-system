<?php 
session_start();
session_unset();
session_destroy();
?>

<html>
    <body>
        <h1>YOUR ACCOUNT DOES NOT HAVE ACCESS TO THIS PAGE.</h1>
        <a href="home.php">LOG IN AGAIN </a>
    </body>
</html>