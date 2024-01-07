<?php
//用户信息删除实现
include('../connect.php');
$id=$_GET['id'];
$sql="delete from book where id = $id";
$rs=mysqli_query($conn,$sql);
if($rs){
    alert('删除成功','book_list.php');
}else{
    alert('删除失败','book_list.php');
}