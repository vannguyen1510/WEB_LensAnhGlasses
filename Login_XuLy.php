<?php
include ('Connection.php');
header('Content-Type: text/html; charset=utf-8');
 
if(isset($_POST['dangnhap']))
{
   
    if(empty($_POST['username']) || empty($_POST['password']))
    {
        $error = "Username or Password is valid";
    }
    else
    {
         //Xác minh $username và $password
        $username = $_POST['username'];
        $password = $_POST['password'];
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
        $sql = "SELECT * FROM member WHERE username = '".$username."' AND password = '".$password."' limit 1";
        //Tránh xung đột trong MySQL
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();

        if($stmt->fetch())
        {
            $_SESSION['username'] = $username;
            header("location: Logged_Welcome.php");
        }
        else
        {
            $error = "Username or Password is invalid";
        }
        mysqli_close($conn);
    }
}
?>

 