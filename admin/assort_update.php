<?php
//数据库连接
//修改分类信息的后端保存
include ('../connect.php');
$id=$_POST['id'];
$assort=$_POST['assort'];
$book_name=$_POST['book_name'];


$sql="update book
set assort='$assort',
    book_name='$book_name'
    where id= $id";
$rs=mysqli_query($conn,$sql);
if($rs){
    alert('修改成功','assort_list.php');
}else{
    alert('修改失败','assort_list.php');
}