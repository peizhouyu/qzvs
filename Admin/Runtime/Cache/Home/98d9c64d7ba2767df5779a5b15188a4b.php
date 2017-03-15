<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>清泽微视 </title>
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
                        <h5>修改标签</h5>
                    </div>
                    <div class="ibox-content">
                         <form class="form-horizontal m-t" id="signupForm" action="<?php echo U('Lable/change');?>" method="post">
                         <input type="hidden" name="lableid" class="form-control"  value="<?php echo ($labinfo["lableid"]); ?>">
                                         <div  class="form-group">
                                            <label class="col-sm-3 control-label">标签名称：</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" class="form-control" placeholder="请输入文本" value="<?php echo ($labinfo["labname"]); ?>">
                                            </div>
                                         </div> 
                                           <div class="form-group">
                                                <label class="col-sm-3 control-label">所属栏目：</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="catname">
                                                        <?php if(is_array($catinfo)): $i = 0; $__LIST__ = $catinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["catname"]) == $labinfo['catname']): ?><option value="<?php echo ($vo["catname"]); ?>" selected><?php echo ($vo["catname"]); ?></option><?php endif; ?>
                                                            <?php if(($vo["catname"]) != $labinfo['catname']): ?><option value="<?php echo ($vo["catname"]); ?>" ><?php echo ($vo["catname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                        <option value="微专题" <?php echo $labinfo=="微专题"?'selected':'';?>微专题</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-3">
                                                    <button class="btn btn-primary" type="submit">提交</button>                                                    <a class="btn btn-primary" href= "<?php echo U('Lable/Showlist');?>">取消</a>
                                                </div>
                                            
                                            </div>
                                        </form>
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


</body>

</html>