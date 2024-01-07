<?php
//用户信息删除实现
include('../connect.php');
$id=$_GET['id'];
$sql="delete from assort where id = $id";
$rs=mysqli_query($conn,$sql);
if($rs){
    alert('删除成功','assort_list.php');
}else{
    alert('删除失败','assort_list.php');
}