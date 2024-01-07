<?php
//数据库连接
//修改个人信息的后端保存
include ('../connect.php');
$id=$_POST['id'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$real_name=$_POST['real_name'];

if($password1!=$password2){
    alert('两次输入的密码不相同，请重新输入','user_list.php');
    exit();
}
$sql="update user set 
            password='$password1'
            ,real_name='$real_name'
             where id = $id ";
$rs=mysqli_query($conn,$sql);
if($rs){
    alert('修改成功','mine_info_list.php');
}else{
    alert('修改失败','mine_info_list.php');
}