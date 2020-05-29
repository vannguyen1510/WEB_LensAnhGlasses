<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        $_SESSION['msg'] = "You must log in first to view this page";
        header("location: Login.php");
    }
    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['username']);
        header("location: Login.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Home Page </title>
    </head>
    <body>
        <h1> This is home page after login successfull </h1>
        <?php 
            if(isset($_SESSION['success'])) : ?>
        <div>
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php endif ?>  
    </body>
</html>