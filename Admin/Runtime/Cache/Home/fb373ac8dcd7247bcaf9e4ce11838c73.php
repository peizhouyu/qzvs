<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title></title>
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
                    <h5>栏目列表</h5>
                    <div class="ibox-tools">
                        <a  class="btn btn-primary "style="margin-top:-8px;" href="<?php echo U('VideoFile/Addvideo');?>" data-toggle="modal">上传视频文件</a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="form-group" >
                        <div class="col-sm-4" style="float:none;margin:0 auto;">
                            <form action="<?php echo U('VideoFile/searchfile');?>" method="get">

                                <div class="input-group">
                                    <input type="text" class="form-control" name="key" placeholder="输入要搜索的关键字">
                                    <span class="input-group-btn"> <button type="submit" class="btn btn-primary">搜索</button> </span>
                                </div>
                            </form>
                        </div>
                    </div>


                    <table class="table">
                        <thead>
                        <tr style="text-align:center;">
                            <th style="width:35%;">上传前视频文件名称</th>
                            <th style="width:30%;">上传后视频文件名称</th>
                            <th style="width:40%;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($fileinfo)): $i = 0; $__LIST__ = $fileinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($vo["filename"]); ?></td>
                                <td><?php echo ($vo["cryptname"]); ?></td>
                                <td><a onclick="drop_confirm('确定要删除吗？','<?php echo U('VideoFile/VideoFileDel',array('id'=>$vo['id'],'filename'=>$vo['cryptname']));?>')">[删除]</a></td><?php endforeach; endif; else: echo "" ;endif; ?>
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

<!-- 自定义js -->
<script src="/qzvs/Public/asset/js/content.js?v=1.0.0"></script>

</body>

</html>