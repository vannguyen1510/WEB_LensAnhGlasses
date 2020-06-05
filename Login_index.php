<?php
include ('Connection.php');
    session_start();
    $user_check = $_SESSION['username'];
    $sql = "SELECT username FROM member WHERE username = |'.$user_check.'";
    $result = mysqli_query($conn, $user_check);
    $row = mysqli_fetch_array($result, MYSQL_ASSOC);
    $login_session = mysqli_num_rows($row);
?>