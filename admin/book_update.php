<?php
//数据库连接
include '../connect.php';
//修改用户信息的后端保存
$book_name=$_POST['book_name'];
$author=$_POST['author'];
$position=$_POST['position'];
$num=$_POST['num'];
$assort=$_POST['assort'];

$sql="update book
set book_name='$book_name'
    ,author='$author'
    ,position='$position'
    ,num='$num'
    ,assort='$assort'
    where book_name= '$book_name'";
$rs=mysqli_query($conn,$sql);
if($rs){
    alert('修改成功','book_list.php');
}else{
    alert('修改失败','book_list.php');
}