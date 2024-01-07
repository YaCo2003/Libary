<?php
include('../connect.php');
$id=$_GET['id'];
$sql="delete from position where id = $id";
$rs=mysqli_query($conn,$sql);
if($rs){
    alert('删除成功','position_list.php');
}else{
    alert('删除失败','position_list.php');
}