<?php
require_once 'suggest_config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
       *{
           margin:0;
           padding:0;
           box-sizing:border-box;
       }

       body{
           background-image: url("../picture/log3.jpg");
           background-repeat: no-repeat;
           background-size: cover;
           max-width:700px;
           margin:auto;
       }
       h1{
           margin:50px 0;
           border-bottom:1px solid #000000;
           text-align:center;
       }
       textarea{
           width:100%;
           padding:10px;
           margin-bottom:30px;
       }
       input{
           width:100%;
           padding:10px;
           margin-bottom:10px;

       }
       img{
           width:100px;
           height:100px;
       }
       .content {
           background-color: white;
           max-width: 700px;
           margin: 0 auto;
           padding: 20px;
       }
    </style>
</head>

<body>
<div class="content">
<h1><a href="./index.php"><?php echo $title; ?></a></h1>

<h2>反馈</h2>
<form action="suggest_add.php" method="GET">
    <textarea name="t" cols="30" rows="10" placeholder="说点什么..."></textarea>
    <p><input name="q" type="text" placeholder="你的QQ"></p>
    <p><input type="submit" value="发表"></p>
</form>

<hr>

<h2>反馈列表</h2>
<ul>
    <?php
    // 最新留言展示前面
    $sql = "SELECT * FROM `liuyan` ORDER BY `liuyan`.`id` DESC";
    // ORDER BY `liuyan`.`id` DESC 加上这个是降序排列
    $result = $conn->query($sql);

    if($result->num_rows>0){
        //输出数据
        while($row = $result->fetch_assoc()){
            // $result->fetch_assoc()执行一次显示第一条，执行第二次显示第二条
            ?>
            <li>
                <img src="http://q1.qlogo.cn/g?b=qq&nk=<?php echo $row["qq"];?>&s=640" alt="">
                <p><?php echo $row["id"];?>楼</p>
                <p>反馈内容：<?php echo $row["text"];?></p>
                <p>用户：<?php echo $row['username']?></p>
                <p>反馈时间：<?php echo $row["time"];?></p>
                <p>
                    <a href="suggest_edit.php?id=<?php echo $row['id'];?>">编辑</a>
                    <a href="suggest_del.php?id=<?php echo $row['id'];?>">删除</a>
                </p>
            </li>
            <?php
        }
    } else {
        echo"暂无留言";
    }
    ?>
</ul>
</div>
</body>

</html>