<?php
header('Content-Type: text/html; charset=utf-8');
  
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'Login') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
// Dùng isset để kiểm tra Form
if (isset($_POST['dangnhap']))
{
    $username = isset($_POST['username']) ? mysql_escape_string($_POST['name']) : '';
    $password = isset($_POST['password']) ? md5($_POST['password']) : '';
  
    // Kiểm tra username có bị trùng hay không
    $sql = "SELECT * FROM member WHERE username = '$username'";
  
    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
  
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username đã tồn tại trong CSDL --> Cho phép đăng nhập
    if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        $message = "Long time no see !";
        echo "<script type='javascript.js'>alert('$message'); window.location='lens&glasses.html';</script>";
        // Dừng chương trình
        die ();
    }
    else // Đăng ký 
    {
        $sql = "INSERT INTO member (username, password) VALUES ('$username','$password')";
  
        if (mysqli_query($conn, $sql))
        {
            echo "Tên đăng nhập: ".$_POST['name']."<br/>";
            echo "Mật khẩu: " .$_POST['password']."<br/>";
        }
        else 
        {
            echo "<script type='javascript.js'>alert('ERROR HERE'); window.location='Login.php';</script>";
        }
    }
}
?>