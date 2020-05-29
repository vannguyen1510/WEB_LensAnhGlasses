<?php
header('Content-Type: text/html; charset=utf-8');
  
// Kết nối cơ sở dữ liệu
//$conn = mysqli_connect('localhost', 'root', '', 'Login') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");


// Dùng isset để kiểm tra nút Login 
if (isset($_POST['dangnhap']))
{
    require 'Connection.php';
    $username = isset($_POST['name']);
    $password = isset($_POST['password']);

    // Kiểm tra hợp lệ các textbox
    if (empty($username) || empty($password))
    {
        //Đưa người dùng về lại trang Login
        header("Location: ../Login.php?error=emptyfields&name=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        header("Location: ../Login.php?error=invalidusr");
        exit();
    }
    else
    {
        // Kiểm tra username có trùng hay không
        $sql = "SELECT * FROM member WHERE username = '".$username."' AND password = '".$password."' limit 1";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../Login.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0)
            {
                header("Location: ../Login.php?error=usertaken");
                exit();
            }
            else
            {
                $sql = "INSERT INTO  member (username, password) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../Login.php?error=sqlerror");
                    exit();
                }
                else
                {
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../Login.php?singup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysql_close($conn);
}
else
{
    header("Location: ../Login.html");
    exit();
}
?>

 