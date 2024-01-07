<?php
include ('head.php');
limits('图书管理');
?>
    <div class="layui-body">
        <!-- 图书管理-新增图书信息 -->
        <div style="padding: 15px;">
            <h2>图书管理</h2>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li><a href="book_list.php">图书列表</a></li>
                    <li class="layui-this">新增图书</a></li>
                </ul>
            </div>
            <!--创建表单-->
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="layui-row">
                        <div class="layui-col-md6">
                            <form class="layui-form" method="post" action="book_save.php">
                                <div class="layui-form-item">
                                    <div style="height: 15px"></div>
                                    <label class="layui-form-label">图书名称*</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="book_name" required lay-verify="required" class="layui-input">
                                    </div>
                                    <div style="height: 15px"></div>
                                    <label class="layui-form-label">作者*</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="author" required lay-verify="required" class="layui-input">
                                    </div>
                                    <div style="height: 15px"></div>
                                    <label class="layui-form-label">位置*</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="position" required lay-verify="required" class="layui-input">
                                    </div>
                                    <div style="height: 15px"></div>
                                    <label class="layui-form-label">数量*</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="num" required lay-verify="required" class="layui-input">
                                    </div>
                                    <div style="height: 15px"></div>
                                    <label class="layui-form-label">分类*</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="assort" required lay-verify="required" class="layui-input">
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