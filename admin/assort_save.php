<?php
include ('../connect.php');
//处理新增图书分类信息的信息保存

$assort=$_POST['assort'];
$book_name=$_POST['book_name'];
$real_name=$_POST['real_name'];

//判断图书分类是否重复
$sql="select * from book where assort='$assort'";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
    $_SESSION['assort']=$assort;
    alert('该图书分类已经存在','assort_new.php');
    exit();
}


//向assort数据表新增一个用户数据
$sql= "INSERT INTO book (assort,book_name)
VALUES ('$assort_name','$other')";

//判断登录是否成功
$rs=mysqli_query($conn,$sql);
if($rs){
    $_SESSION['assort_name']=$assort_name;
    alert('添加成功','assort_list.php');
}
else{
    alert('添加失败','assort_new.php');
}