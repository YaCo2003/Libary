<?php
//登出功能
include ('connect.php');
$_SESSION=[];
session_destroy();
alert('已成功退出','login.php');