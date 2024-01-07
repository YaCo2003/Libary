<?php
//头文件声明
header('Content-Type:text/html; charset=utf-8');
//连接数据库
$servername="localhost";
$username="root";
$password="root";
$dbname="lmsdb";//创建链接
//检测连接
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
//定义弹窗方法
function alert($str,$url){
    echo '<script> alert("'.$str.'");location.href="'.$url.'";</script>';
}

//接受由登陆界面传来的数据
session_start();