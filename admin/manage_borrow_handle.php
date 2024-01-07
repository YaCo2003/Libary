<?php
include ('head.php');
$id=$_GET['id'];
$sql="select * from borrow where id = $id";
$rs = mysqli_query($conn,$sql);
if($rs){
    $row = mysqli_fetch_assoc($rs);
    $book_id=$row['book_id'];
}
$sql_book="select * from book where id = $book_id";
$rs_book=mysqli_query($conn,$sql_book);
if($rs_book){
    $row_book=mysqli_fetch_assoc($rs_book);
}
?>
    <div class="layui-body">
        <!-- 个人中心-借阅申请-详情界面 -->
        <div style="padding: 15px;">
            <h2>借阅管理</h2>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li class="layui-this">处理界面</a></li>
                </ul>
            </div>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="layui-row">
                        <div class="layui-col-md6">
                            <form class="layui-form" method="post" action="manage_borrow_update.php">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
                                <input type="hidden" name="num" value="<?php echo $row_book['num']; ?>">
                                <input type="hidden" name="borrow_num" value="<?php echo $row['borrow_num']; ?>">
                                <div class="layui-form-item">
                                    <label class="layui-form-label">图书名称</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="book_name" required lay-verify="required" class="layui-input"
                                               value="<?php echo $row_book['book_name'] ?>" disabled="disabled">
                                    </div>                                    
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">借阅人员</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="entry_user" required lay-verify="required" class="layui-input"
                                               value="<?php echo $row['entry_user'] ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                        <label class="layui-form-label">图书类型</label>
                                        <div class="layui-input-block">
                                            <input type="text" name="assort" class="layui-input" lay-verify="required"
                                                   value="<?php echo $row_book['assort'] ?>" disabled="disabled">
                                        </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">存放位置</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="position" class="layui-input" lay-verify="required"
                                               value="<?php echo $row_book['position'] ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">数量</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="num" class="layui-input" lay-verify="required"
                                               value="<?php echo $row_book['num'] ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">借阅数量*</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="borrow_num" class="layui-input" lay-verify="required"
                                               value="<?php echo $row['borrow_num'] ?>" disabled="disabled">
                                    </div>
                                </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">是否通过</label>
                                    <div class="layui-input-block">
                                        <select name="state" lay-verify="required">
                                            <option value="">请选择</option>
                                            <option value="1">通过</option>
                                            <option value="2">不通过</option>
                                        </select>
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