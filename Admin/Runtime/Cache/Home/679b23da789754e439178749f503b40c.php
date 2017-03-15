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
    <link href="/qzvs/Public/asset/css/animate.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/style.css?v=4.0.0" rel="stylesheet"><base  target="_self">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-6" style="width:100%;">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>新增专题</h5>
                    </div>
                    <div class="ibox-content">
                         <form class="form-horizontal m-t" id="signupForm" enctype="multipart/form-data" action="<?php echo U('Special/Add');?>" method="post">
                         <div  class="form-group">
                            <label class="col-sm-3 control-label">专题名称：</label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" placeholder="请输入文本">
                            </div>
                         </div> 
                             <div class="form-group">
                               <label class="col-sm-3 control-label">专题横幅：</label>
                                <div class="col-sm-8">
                                   <input type="file" name="img1" class="form-control">
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 图片尺寸为：1920px*480px</span>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-3 control-label">专题图片：</label>
                                <div class="col-sm-8">
                                   <input type="file" name="img2" class="form-control">
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 图片尺寸为：230px*150px</span>
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 control-label">所属栏目：</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="category">
                                        <?php if(is_array($catinfo)): $i = 0; $__LIST__ = $catinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo["catname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">专题导读：</label>
                                <div class="col-sm-8">
                                    <textarea  class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <button class="btn btn-primary" type="submit">提交</button>
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

    <!-- 自定义js -->
    <script src="/qzvs/Public/asset/js/content.js?v=1.0.0"></script>

    <!-- jQuery Validation plugin javascript-->
    <script src="/qzvs/Public/asset/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/qzvs/Public/asset/js/plugins/validate/messages_zh.min.js"></script>
    
    <script src="/qzvs/Public/asset/js/demo/form-validate-demo.js"></script>

</body>

</html>