<?php
$servernamedb = "mysql";
$usernamedb = "ptchan";
$passworddb = "ptchan";
$conn = new mysqli($servernamedb, $usernamedb, $passworddb, 'banhang');

// Khởi tạo SESSION
@ob_flush();
session_start();
if (isset($_SESSION['username'])){
unset($_SESSION['username']);
}

// Dùng Isset kiểm tra
if (isset($_POST['login'])) {
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

if (!$username || !$password) {
  echo "Nhập đầy đủ thông tin <a href='login.php'>Trở lại</a>";
  exit;
}

//Kiểm tra tên đăng nhập có tồn tại không
$query = "SELECT * FROM users WHERE username='$username'";

$result = mysqli_query($conn, $query) or die( mysqli_error($conn));

$row = mysqli_fetch_array($result);

//So sánh 2 mật khẩu có trùng khớp hay không
if ($password != $row['password']) {
    echo ("Password is incorrect, please re-enter. <a href='login.php'>Return</a>");
    exit;
}

//So sánh 2 user có trùng khớp hay không
if ($username != $row['username']) {
    echo ("Username is incorrect, please re-enter. <a href='login.php'>Return</a>");
    exit;
}

if($row['level'] == 1){
    $_SESSION ['level'] = $row['level'];
}
 else {
    $_SESSION ['level'] = 0;
}
$_SESSION['username'] = $username;
    // echo ("Hello <b>" .$username. "</b>. Successful login. <a href='index1.php'>Go home</a>");
$conn->close();
header('Location: index.php');
exit;
}

?>