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
?>
