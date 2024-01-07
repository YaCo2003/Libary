<?php
include('head.php');
limits('位置管理');
?>
    <div class="layui-body">
        <!--        位置管理，新增一个位置信息-->
        <div style="padding: 15px;">
            <h2>位置管理</h2>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li><a href="position_list.php">位置列表</a></li>
                    <li class="layui-this">新增位置</a></li>
                </ul>
            </div>

        </div>

        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <div class="layui-row">
                    <div class="layui-col-md6">
                        <form class="layui-form" method="post" action="position_save.php">
                            <div class="layui-form-item">
                                <label class="layui-form-label">位置信息*</label>
                                <div class="layui-input-block">
                                    <input type="text" name="positionInfo" required lay-verify="required"
                                           class="layui-input">
                                </div>

                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <div style="padding: 15px;">
                                        <input type="submit" class="layui-btn layui-btn-normal" value="立即提交">
                                    </div>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </div>

<?php
include('foot.php');