
<?php
require_once('../config.php');
?>
<?php
$name = "";
$pass = "";
$email = "";
$phone = "";
if(isset($_POST['dangnhap']))
{
   $name = $_POST['username'];
   $pass= md5($_POST['password']);
   $sql = "SELECT * from user where username = '$name' && password = '$pass'";
   $cmd = mysqli_query($conn, $sql);
   $count = mysqli_num_rows($cmd);
   $row = mysqli_fetch_assoc($cmd);
   if ($count > 0) {
    // session_start();
    $_SESSION['username'] = $row["username"];
    if ($row['LOAI'] == 1) {
        header("Location: http://localhost:7979/music-thayhoang-test/?UI=trang_chu");
    } else if ($row['LOAI'] == 2) {
        header("Location: http://localhost:7979/music-thayhoang-test/admin/?UI=trang_chu");
    }
} else {
    echo "Đăng nhập thất bại";
}

}

if(isset($_POST['dangky']))
{
 
   if (isset($_POST["username"])) {
       $name = $_POST['username'];
   }

   if (isset($_POST["password"])) {
       $pass = $_POST['password'];

   }

   if (isset($_POST["email"])) {
       $email = $_POST['email'];
   }

   if (isset($_POST["phone"])) {
       $phone = $_POST['phone'];
   }
   $md5= $pass;
   $pass = md5($md5);
   $sql = "insert into user (username,password,email,phone) values ('$name','$pass','$email','$phone')";
   if ($conn->query($sql) === true) {
       echo "Thêm dữ liệu thành công";
   } else {
       echo "Lỗi: " . $sql . "<br>" . $conn->error;
   }
}


?>


