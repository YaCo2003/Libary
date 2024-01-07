<?php
include ('../connect.php');
//处理新增用户传递的信息保存

$book_name=$_POST['book_name'];
$author=$_POST['author'];
$position=$_POST['position'];
$num=$_POST['num'];
$assort=$_POST['assort'];

//判断用户明是否重复
$sql="select book_name from book where book_name='$book_name'";
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
    alert('该书籍已经存在','book_add.php');
    exit();
}


//向user数据表新增一个用户数据
$sql= "INSERT INTO book (book_name,author,position,num,assort)
VALUES ('$book_name','$author','$position','$num','$assort')";

//判断登录是否成功
$rs=mysqli_query($conn,$sql);
if($rs){
    alert('添加成功','book_add.php');
}
else{
    alert('添加失败','book_add.php');
}