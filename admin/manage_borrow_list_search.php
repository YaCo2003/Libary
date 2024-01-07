<?php
include ('head.php');
?>
 <div class="layui-body">
        <!-- 借阅管理-申请列表 -->
        <div style="padding: 15px;">
            <h2>借阅管理</h2>
            <div class="layui-tab layui-tab-brief">
                <ul class="layui-tab-title">
                    <li class="layui-this">搜索结果</a></li>
                </ul>
            </div>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div>
                        <form class="layui-form" method="post" action="manage_borrow_list_search.php">
                            <div class="layui-inline">
                                <input class = "layui-input" name="search" style="width:350px" placeholder="按图书名称查找">
                            </div>
                            <button class="layui-btn layui-btn-normal" type="submit">搜索</button>
                        </form>
                    </div>
                    <script type="text/html" id="toolbar">
                        <div class="layui-btn-container">
                            <a class="layui-btn layui-btn-xs layui-btn-normal" lay-event="handle">处理</a>
                        </div>
                    </script>
                    <table class="layui-table" lay-data="{height:543, page:true, id:'id_table' ,toolbar: true}" lay-filter="test">
                        <thead>
                            <tr>
                                <td lay-data="{field:'id',sort:true}">ID</td>
                                <td lay-data="{field:'book_name'}">图书名称</td>
                                <td lay-data="{field:'num'}">申请数量</td>
                                <td lay-data="{field:'state'}">状态</td>
                                <td lay-data="{field:'',toolbar:'#toolbar',width:100}">操作</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $search = $_POST['search'];
                        if($search==''){
                            alert('搜索框内容不能为空','manage_borrow_list.php');
                        }
                        $sql="select * from borrow where book_name like '%".$search."%'  order by id";
                        $rs = mysqli_query($conn,$sql);
                        if($row=mysqli_num_rows($rs)<1){
                            alert('未检索到相关结果','manage_borrow_list.php');
                        }
                        if($rs){
                            while ($rows = mysqli_fetch_assoc($rs)){
                                if($rows['state']==0){
                                    $state = "未处理";
                                }else if($rows['state']==1){
                                    $state="已处理并通过，未归还";
                                }else if ($rows['state']==2){
                                    $state="已处理未通过";
                                }else if ($rows['state']){
                                    $state="已处理并通过，已归还";
                                }

                                echo '<tr>';
                                echo '<td>'.$rows['id'].'</td>';
                                echo '<td>'.$rows['book_name'].'</td>';
                                echo '<td>'.$rows['borrow_num'].'</td>';
                                echo '<td>'.$state.'</td>';
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
                                if(eventName=='handle'){
                                    //修改
                                    window.location.href="manage_borrow_handle.php?id="+arr[0];
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