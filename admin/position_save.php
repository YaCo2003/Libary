<?php
include ('../connect.php');

// 保存新增位置信息

$positionInfo = $_POST['positionInfo'];

// 判断是否重复
$sql = "select * from position where positionInfo='$positionInfo' ";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
    $_SESSION['positionInfo']=$positionInfo;
    alert('该位置信息已经存在','position_new.php');
    exit();
}

$sql="INSERT INTO position (positionInfo) VALUE ('$positionInfo')";

// 判断是否添加成功
$rs=mysqli_query($conn,$sql);
if($rs){
    $_SESSION['positionInfo']=$positionInfo;
    alert('添加成功','position_list.php');
}else{
    alert('添加失败','position_new.php');
}