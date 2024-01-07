<?php
include ('head.php');
?>
    <style>
        .layui-body {
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* 居中文本和图片 */
        }
        h1 {
            color: #333;
        }
        .user-image {
            max-width: 65%; /* 限制图片宽度不超过父元素 */
            border-radius: 50%; /* 将图片变为圆形 */
            margin-top: 10px; /* 为图片添加上边距 */
        }
    </style>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div style="padding: 10px;">
            <h1>欢迎<?php echo $_SESSION['username']?>来到图书管理系统</h1>
            <img src="../picture/log2.jpg" alt="User Image" class="user-image">
        </div>
    </div>


<?php
include ('foot.php');
?>