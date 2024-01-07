<?php
//数据库连接
include ('connect.php');

$username=$_POST['username'];
$password=$_POST['password'];
if(strlen($username)<5){
    alert('用户名不能少于5个字','login.php');
    exit();
}
$sql= "select * from user where username='$username' and password = '$password'";
//判断登录是否成功
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
    $_SESSION['username']=$username;
    alert('登录成功','admin/index.php');
}
else{
    alert('用户名或密码错误，登陆失败','login.php');
}