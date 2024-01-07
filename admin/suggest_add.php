<?php
require_once 'suggest_config.php';

$t = $_GET["t"];
$n = $_GET["n"];
$q = $_GET["q"];
$time = date("Y-m-d H:i:s",time());
$username = $_SESSION['username'];
$sql = "INSERT INTO `liuyan` (`id`, `username`, `qq`, `text`, `time`) VALUES (NULL, '$username', '$q', '$t', '$time');";
//执行sql的添加代码
$conn->query($sql);
//回到首页
header("Location:suggest_gpt.php");
?>

