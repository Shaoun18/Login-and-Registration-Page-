<?php
session_start();
$conn = mysqli_connect('localhost','shaoun20','123456');
mysqli_select_db($conn, 'login_page');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name='$name'&&password='$pass'";

$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num == 1 ){
   $_SESSION['username'] = $name;
   header('location:home.php');
}else{
   header('location:index.php');
}
 
?>