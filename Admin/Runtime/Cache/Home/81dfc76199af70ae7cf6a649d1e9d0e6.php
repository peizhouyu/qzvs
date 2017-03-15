<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>清泽微视 管理员列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/qzvs/Public/asset/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/animate.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/style.css?v=4.0.0" rel="stylesheet"><base target="_self">


<style type="text/css">
    .page ul div li{
        float: left;  
        margin-left: 5px;
        margin-right: 5px;    
    }
</style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-6" style="width:100%;">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>管理员列表</h5>
                        <div class="ibox-tools">
                          <a type="button" class="btn btn-primary J_menuItem"style="margin-top:-8px;" href="<?php echo U('Admin/Add');?>"  target="_self">添加管理员</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="form-group" >
                                <div class="col-sm-4" style="float:none;margin:0 auto;">
                                 <form action="<?php echo U('Admin/search');?>" method="get">

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="key" placeholder="输入要搜索的用户名或角色">
                                         <span class="input-group-btn"> <button type="submit" class="btn btn-primary">搜索</button> </span>
                                    </div>   
                                 </form>
                                </div>
                            </div>

                        <table class="table">
                            <thead>
                                <tr style="text-align:center;">
                                    <th>序号</th>
                                    <th>用户名</th>
                                    <th>所属角色</th>
                                    <th>最后登陆IP</th>
                                    <th>最后登陆时间</th>
                                    <th>E-mail</th>
                                    <th>真实姓名</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($vo["userid"]); ?></td>
                                    <td><?php echo ($vo["username"]); ?></td>
                                    <td><?php echo ($vo["rolename"]); ?></td>
                                    <td><?php echo ($vo["lastloginip"]); ?></td>
                                    <td><?php echo ($vo["lastlogintime"]); ?></td>
                                    <td><?php echo ($vo["email"]); ?></td>
                                    <td><?php echo ($vo["realname"]); ?></td>
                                    <td><a href="<?php echo U('Admin/Change',array('id'=>$vo['userid']));?>">[修改]</a><a onclick="drop_confirm('确定要删除吗？','<?php echo U('Admin/Del',array('id'=>$vo['userid']));?>')">[删除]</a></td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                            </tbody>
                        </table>
                        <div class="page">
                            <ul style="list-style:none;float:right;margin-right: 100px;">
                                <?php echo ($page); ?>
                            </ul>
                            
                        </div>
                                
                    </div>
                </div>
            </div>
                    </div>
                </div>
          
    <!-- 全局js -->
    <script src="/qzvs/Public/asset/js/jquery.min.js?v=2.1.4"></script>
    <script src="/qzvs/Public/asset/js/bootstrap.min.js?v=3.3.5"></script>



    <!-- Peity -->
    <script src="/qzvs/Public/asset/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- 自定义js -->
    <script src="/qzvs/Public/asset/js/content.js?v=1.0.0"></script>


    <!-- iCheck -->
    <script src="/qzvs/Public/asset/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="/qzvs/Public/asset/js/demo/peity-demo.js"></script>

    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>


<script>
    function drop_confirm(message,pathurl)
    {
        if(confirm(message))
        {
            window.location.href=pathurl;
        }else
        {
             return false;
        }
    }
 </script>


</body>

</html>