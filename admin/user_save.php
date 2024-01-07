<?php
include ('../connect.php');
//处理新增用户传递的信息保存
$username=$_POST['username'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$real_name=$_POST['real_name'];
//判断用户明是否重复
$sql="select * from user where username='$username'";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
    $_SESSION['username']=$username;
    alert('该用户名已经存在','user_new.php');
    exit();
}
//判断用户名长度
if(strlen($username)<5){
    alert('用户名不能少于5个字','user_new.php');
    exit();
}
if($password1!=$password2){
    alert('两次输入的密码不相同，请重新输入','user_new.php');
    exit();
}
//向user数据表新增一个用户数据
$sql= "INSERT INTO user (username,password,real_name)
VALUES ('$username','$password1','$real_name')";
//判断登录是否成功
$rs=mysqli_query($conn,$sql);
if($rs){
    $_SESSION['username']=$username;
    alert('添加成功','user_list.php');
}
else{
    alert('添加失败','user_new.php');
}