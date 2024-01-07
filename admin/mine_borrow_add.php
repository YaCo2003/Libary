<?php
include ('head.php');
$id=$_GET['id'];
$sql="select * from book where id = $id";
$rs = mysqli_query($conn,$sql);
if($rs){
    $row = mysqli_fetch_assoc($rs);
}
?>
    <div class="layui-body">
        <!-- 个人中心-借阅申请-详情界面 -->
        <div style="padding: 15px;">
            <h2>个人中心</h2>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li class="layui-this">借阅申请-详情界面</a></li>
                </ul>
            </div>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="layui-row">
                        <div class="layui-col-md6">
                            <form class="layui-form" method="post" action="mine_borrow_save.php">
                                <input type="hidden" name="book_id" value="<?php echo $id; ?>">
                                <input type="hidden" name="book_name" value="<?php echo $row['book_name']; ?>">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">图书名称</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="book_name" required lay-verify="required" class="layui-input" value="<?php echo $row['book_name'] ?>" disabled="disabled">
                                    </div>                                    
                                </div>
                                <div class="layui-form-item">
                                        <label class="layui-form-label">图书类型</label>
                                        <div class="layui-input-block">
                                            <input type="text" name="assort" class="layui-input" lay-verify="required" value="<?php echo $row['assort'] ?>" disabled="disabled">
                                        </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">存放位置</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="position" class="layui-input" lay-verify="required" value="<?php echo $row['position'] ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">数量</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="num" class="layui-input" lay-verify="required" value="<?php echo $row['num'] ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">借阅数量*</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="borrow_num" class="layui-input" lay-verify="required">
                                    </div>
                                </div>
                                 <div class="layui-form-item">
                                    <div class="layui-input-block">
                                        <input type="submit" class="layui-btn layui-btn-normal" value="立即提交">
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