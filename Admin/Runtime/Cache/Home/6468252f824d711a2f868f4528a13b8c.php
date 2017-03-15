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
    <link href="/qzvs/Public/asset/css/style.css?v=4.0.0" rel="stylesheet"><base  target="_self">
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
                        <h5>专题列表</h5>
                        <div class="ibox-tools">
                          <a type="button" class="btn btn-primary" style="margin-top:-8px;" target="_self" href="<?php echo U('Special/Add');?>">添加专题</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="form-group" >
                                <div class="col-sm-4" style="float:none;margin:0 auto;">
                                 <form action="<?php echo U('special/search');?>" method="get">

                                    <div class="input-group">
                                        <input type="text" class="form-control" name="key" placeholder="输入要搜索的专题名称或栏目">
                                         <span class="input-group-btn"> <button type="submit" class="btn btn-primary">搜索</button> </span>
                                    </div>   
                                 </form>
                                </div>
                            </div>

                        <table class="table">
                            <thead>
                                <tr style="text-align:center;">
                                    <th>序号</th>
                                    <th>专题图片</th>  
                                    <th style="width: 600px;">专题信息</th>
                                    <th>所属栏目</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td><img width="120px" src="<?php echo ($vo["thumb"]); ?>"></td>
                                    <td>
                                    <table style="font:normal;">
                                        <tr>
                                            <th><?php echo ($vo["title"]); ?></th>
                                        </tr>
                                        <tr>
                                            <td><?php echo ($vo["description"]); ?></td>
                                        </tr>
                                        <tr>
                                                    <td>创建人：<?php echo ($vo["username"]); ?>//创建时间：<?php echo ($vo["createtime"]); ?></td>


                                        </tr>
                                        </table>
                                    </td>
                                    <td><?php echo ($vo["catname"]); ?></td>
                                    <td>
                                        <table >
                                            <tr>
                                                <td><a href="<?php echo U('Special/videoadd',array('specialid'=>$vo['id'],'catname'=>$vo['catname']));?>">[添加信息]</a></td>
                                                <td><a href="<?php echo U('Special/videolist',array('specialid'=>$vo['id']));?>">[管理信息]</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="<?php echo U('Special/SpecialChange',array('id'=>$vo['id']));?>">[修改专题]</a></td>
                                                <td><a onclick="drop_confirm('确定要删除吗？','<?php echo U('Special/SpecialDel',array('id'=>$vo['id']));?>')" >[删除专题]</a></td>
                                            </tr>
                                        </table>
                                    </td>
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