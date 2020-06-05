<?php

    // Connect to database
    $servername = "localhost";
    $dBusername = "root";
    $dBpassword = "";
    $dB = "login";

    $conn = mysqli_connect ($servername, $dBusername, $dBpassword, $dB) or die ("Could not connect to database");

    if (!$conn)
    {
        // If there is an error with the connection, stop the script and display the error.
        die ("Connection failed: ".mysql_connect_error());
    }
/*
    // Login
    // Lấy thông tin từ các textbox 
		$username = $_POST['name'];
		$password = md5($_POST['password']);
    // Ngăn ngừa xung đột MySQL
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$username = mysql_real_escape_string($conn, $username);
        $password = mysql_real_escape_string($conn, $password);

    // Form validation
    if(empty($username)) 
    {
        array_push($errors, "Username is required");
    }
    if(empty($password)) 
    {
        array_push($errors, "Password is required");
    }

    // Check database for existing account
    $user_check_query = "SELECT * FROM member WHERE username = '.$username.' AND password = '.$password.' limit 1";
    $results = mysqli_query($conn, $user_check_query);
    $row = mysqli_fetch_array($results, MYSQL_ASSOC);
    $check = mysqli_num_rows($results);

    if ($check == 1)
    {
        echo "<html><a href='lens&glasses.html'></a></html>";
    }
    else
    {
        echo "that bai";
    }

    /*
    //LOGIN user
    if(isset($_POST['dangnhap']))
    {
        $username = mysql_real_escape_string($conn, $_POST['name']);
        $password = mysql_real_escape_string($conn, $_POST['password']);
        if(empty($username)) 
        {
            array_push($errors, "Username is required");
        }
        if(empty($password)) 
        {
            array_push($errors, "Password is required");
        }
        if(count($errors) == 0)
        {
            $password = md5($password);
            $query = "SELECT * FROM member WHERE username = '".$username."' AND password = '".$password."'";
            $results = mysqli_query($conn, $query);
            if(mysqli_num_rows($results))
            {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: Login_index.php');
            }
            else
            {
                array_push($errors, "Username or Password is INCORRECT !");
            }
        }
    }
    */
?>
