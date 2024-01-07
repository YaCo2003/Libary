<?php
include ('head.php');
$id=$_GET['id'];
$sql="select * from book where id=$id";
$rs=mysqli_query($conn,$sql);
if($rs){
    $row=mysqli_fetch_assoc($rs);
}
limits('位置管理');
?>
    <div class="layui-body">
        <!-- 用户管理-修改用户信息 -->
        <div style="padding: 15px;">
            <h2>位置管理</h2>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li class="layui-this">修改位置信息</a></li>
                </ul>
            </div>
            <!--创建表单-->
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="layui-row">
                        <div class="layui-col-md6">
                            <form class="layui-form" method="post" action="position_update.php">
                                <input type="hidden" name = id value="<?php echo $row['id']?>">
                                <div class="layui-form-item">
                                    <label class="layui-form-label" >图书名称</label>
                                    <div style=" padding-left: 12px;padding-top: 7px">
                                        <?php echo $row['book_name']?>
                                    </div>

<!--                                    <div class="layui-input-block">-->
<!--                                        <input type="text" name="name" required lay-verify="required" class="layui-input"-->
<!--                                               value="--><?php //echo $row['book_name']?><!--"-->
<!--                                        >-->
<!--                                    </div>-->
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">位置信息*</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="position" required lay-verify="required" class="layui-input"
                                               value="<?php echo $row['position']?>"
                                        >
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <input type="submit" class="layui-btn layui-btn-normal" value="立即提交">
                                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include ('foot.php');