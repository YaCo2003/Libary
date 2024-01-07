<?php

//数据库连接
//修改用户信息的后端保存
include ('../connect.php');
$id=$_POST['id'];
$position=$_POST['position'];

$sql="update book
set book.position='$position'
    where id= $id";
$rs=mysqli_query($conn,$sql);
if($rs){
    alert('修改成功','position_list.php');
}else{
    alert('修改失败','position_list.php');
}