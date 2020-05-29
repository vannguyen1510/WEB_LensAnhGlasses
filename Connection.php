<?php
    session_start();
    //Initialising variables
    $errors = array();

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
    // Login
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Form validation
    if(empty($username)) 
    {
        array_push($errors, "Username is required");
    }
    if(empty($password)) 
    {
        array_push($errors, "Password is required");
    }

    // Check database for existing user with USERNAME
    $user_check_query = "SELECT * FROM member WHERE username = '".$username."' limit 1";
    $results = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($results);
    if($user)
    {
        if($user['username'] === $username)
        {
            array_push($errors, "Username already exists");
        }
    }

    // Registers the user if no errors
    if (count($errors) == 0)
    {
        $password = md5($password);
        $query = "INSERT INTO  member (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: Login_index.php');
    }

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

?>