<?php
include ('head.php');
?>
 <div class="layui-body">
        <!-- 个人中心-借阅申请 -->
        <div style="padding: 15px;">
            <h2>个人中心</h2>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li><a href="mine_info_list.php">个人信息</a></li>
                    <li class="layui-this">借阅申请</li>
                    <li><a href="mine_borrow_list.php">申请列表</a></li>
                    <li><a href="mine_book_list.php">我的书籍</a></li>
                </ul>
            </div>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div>
                        <form class="layui-form" method="post" action="mine_borrow_new_search.php">
                            <div class="layui-inline">
                                <input class = "layui-input" name="search" style="width:350px" placeholder="按图书名称查找">
                            </div>
                            <button class="layui-btn layui-btn-normal" type="submit">搜索</button>
                        </form>
                    </div>
                    <script type="text/html" id="toolbar">
                        <div class="layui-btn-container">
                            <a class="layui-btn layui-btn-xs layui-btn-normal" lay-event="add">借阅</a>
                        </div>
                    </script>
                    <table class="layui-table" lay-data="{height:543, page:true, id:'id_table' ,toolbar: true}" lay-filter="test">
                        <thead>
                            <tr>
                                <td lay-data="{field:'id',sort:true}">ID</td>
                                <td lay-data="{field:'book_name'}">图书名称</td>
                                <td lay-data="{field:'author'}">作者名称</td>
                                <td lay-data="{field:'assort',sort:true}">图书分类</td>
                                <td lay-data="{field:'num'}">数量</td>
                                <td lay-data="{field:'',toolbar:'#toolbar',width:60}">操作</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql="select * from book order by id";
                        $rs = mysqli_query($conn,$sql);
                        if($rs){
                            while ($rows = mysqli_fetch_assoc($rs)){
                                echo '<tr>';
                                echo '<td>'.$rows['id'].'</td>';
                                echo '<td>'.$rows['book_name'].'</td>';
                                echo '<td>'.$rows['author'].'</td>';
                                echo '<td>'.$rows['assort'].'</td>';
                                echo '<td>'.$rows['num'].'</td>';
                                echo '<td></td>';
                                echo '</tr>';
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    <script>
                        layui.use('table', function(){
                            var table = layui.table;
                            table.on('tool(test)',function (obj) {
                                var tr = obj.data;
                                let arr = Object.values(tr);
                                var eventName = obj.event;
                                if(eventName=='add'){
                                    //修改
                                    window.location.href="mine_borrow_add.php?id="+arr[0];
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