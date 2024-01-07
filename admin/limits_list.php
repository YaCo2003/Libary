<?php
include ('head.php');
limits('权限管理');
?>
    <div class="layui-body">
        <!-- 用户权限管理-用户权限信息列表 -->
        <div style="padding:15px;">
            <h2>权限管理</h2>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li class="layui-this">用户权限列表</a></li>
                </ul>
            </div>
            <!--显示表的内容-->
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div>
                        <form class="layui-form" method="post" action="limits_list_search.php">
                            <div class="layui-inline">
                                <input class="layui-input" name="search" style="width: 350px" placeholder="按真实姓名查找">
                            </div>
                            <button class="layui-btn layui-btn-normal" type="submit">搜索</button>
                        </form>
                    </div>
                    <script type="text/html" id="toolbar">
                        <div class="layui-btn-container">
                            <a class="layui-btn layui-btn-xs layui-btn-normal" lay-event="edit">编辑</a>
                        </div>
                    </script>
                    <table class="layui-table" lay-data="{
                        height:550,
                        page:true,
                        id:'id_table',
                        toolbar:true
                    }"
                           lay-filter="test">
                        <thead>
                            <tr>
                                <td lay-data="{field:'id',sort:true}">ID</td>
                                <td lay-data="{field:'username'}">用户名</td>
                                <td lay-data="{field:'real_name'}">真实姓名</td>
                                <td lay-data="{field:'limits'}">权限</td>
                                <td lay-data="{field:'',toolbar:'#toolbar',width:100}">操作</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql="select * from user order by id";
                        $rs=mysqli_query($conn,$sql);
                        if($rs){
                            while ($row=mysqli_fetch_assoc($rs)){
                                echo '<tr>';
                                echo '<td>'.$row['id'].'</td>';
                                echo '<td>'.$row['username'].'</td>';
                                echo '<td>'.$row['real_name'].'</td>';
                                echo '<td>'.$row['limits'].'</td>';
                                echo '<td></td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    <script>
                        layui.use('table',function (){
                            var table=layui.table;
                            table.on('tool(test)',function (obj){
                                var tr=obj.data;
                                let arr=Object.values(tr);
                                var eventName= obj.event;
                                if(eventName=='edit'){
                                    //x修改
                                    window.location.href="limits_edit.php?id="+arr[0];
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>

    </div>
<?php
include ('foot.php');