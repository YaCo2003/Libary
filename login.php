<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书馆管理系统登录界面</title>
    <link rel = "stylesheet" href="layui/css/layui.css">
    <script src="layui/layui.js"></script>
    <style>
        body
        {
            background-image: url("./picture/log1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="layui-container">
        <div style="height: 150px"></div>
        <div class="layui-row">
        <!--里面的内容-->
            <div class="layui-col-md4" style="height: 150px"></div>
            <div class="layui-col-md4" style="height: 150px">
                <p style="text-align: center;font-size:25px;color: #0C0C0C" >
                    <big><b style="color: #004C96">图书管理系统登录界面</b></big>
                </p>
                <!-- 登录框-->
                <form class="layui-form" action="login_check.php" method="post">
                    <div style="height: 20px"></div>
                    <input type="text" name="username" placeholder="请输入用户名" class="layui-input">
                    <div style="height: 15px"></div>
                    <label>
                        <input type="password" name="password" placeholder="请输入密码" class="layui-input">
                    </label>
                    <div style="height: 15px"></div>
                    <input type="submit" value="登录" class="layui-btn layui-btn-normal layui-btn-fluid">
                </form>
                <div style="height: 15px"></div>
                <div style="text-align: left">
                    <button type="button" onclick="window.location.href='signup.php'" style="padding: 4px 8px; background-color: deepskyblue; color: white; border: none; border-radius: 4px; cursor: pointer;">
                        <b>无账号点此注册</b>
                    </button>
                </div>

            </div>
            <div class="layui-col-md4" style="height: 150px"></div>
        </div>
    </div>
<script>
    layui.use('form',function(){
        var form=layui.form;
    });
</script>
</body>
</html>