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
    <link href="/qzvs/Public/asset/css/style.css?v=4.0.0" rel="stylesheet"><base target="_self">
    <link rel="stylesheet" type="text/css" href="/qzvs/Public/asset/css/plugins/simditor/simditor.css" />
    <link href="/qzvs/Public/asset/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/animate.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/animate.css" rel="stylesheet">
    <style type="text/css">
        .simditor .simditor-body
        {
            min-height: 100px;
        }
    </style>
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-6" style="width:100%;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>新增视频内容</h5>
                </div>
                <div class="ibox-content">
                <h5 style="text-align: center;color:red;">注意:填写信息同时需要在“内容管理”模块中“上传视频文件”页面上传相应视频</h5>
                    <form class="form-horizontal m-t" id="signupForm" action="<?php echo U('Special/videoadd');?>" method="post"  enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo ($specialid); ?>" name="specialid" >
                        <input type="hidden" value="<?php echo ($catid); ?>" name="catid" >
                        <div  class="form-group">
                            <label class="col-sm-3 control-label">视频标题：</label>
                            <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" placeholder="请输入文本">
                            </div>
                        </div>
                        <div  class="form-group">
                            <label class="col-sm-3 control-label">上传视频文件名称：</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="name" >
                                    <?php if(is_array($fileinfo)): $i = 0; $__LIST__ = $fileinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cryptname"]); ?>"><?php echo ($vo["filename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i>显示当天上传的8个视频名称</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">栏目标签：</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="lable" >
                                    <?php if(is_array($labinfo)): $i = 0; $__LIST__ = $labinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["labname"]); ?>"><?php echo ($vo["labname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <option value=" ">其他</option>
                                </select>
                            </div>
                        </div>
                        <div  class="form-group">
                            <label class="col-sm-3 control-label">视频标签（关键字）：</label>
                            <div class="col-sm-8">
                                <input type="text" name="keywords" class="form-control" placeholder="请输入文本">
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 多个标签间用分号分隔如 “清泽;微视”,分号为英文状态下</span>
                            </div>
                        </div>


                        <div  class="form-group">
                            <label class="col-sm-3 control-label">导演/项目主创：</label>
                            <div class="col-sm-8">
                                <input type="text" name="director" class="form-control" placeholder="请输入文本">
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 微电影的导演，生涯导航的项目主创</span>
                            </div>
                        </div>
                        <div  class="form-group">
                            <label class="col-sm-3 control-label">演员/指导老师：</label>
                            <div class="col-sm-8">
                                <input type="text" name="performer" class="form-control" placeholder="请输入文本">
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 微电影的演员，生涯导航的指导老师</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">视频简介：</label>
                            <div class="col-sm-8">
                                <textarea  class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div  class="form-group">
                            <label class="col-sm-3 control-label">视频时长：</label>
                            <div class="col-sm-8">
                                <input type="text" name="length" class="form-control" placeholder="请输入视频时长（例：00:00）" value="<?php echo ($info["length"]); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">影片团队：</label>

                            <div class="col-sm-8">
                                <textarea  class="form-control" name="teamdes" value="<?php echo ($info["teamdes"]); ?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">主创心声：</label>

                            <div class="col-sm-8">
                                <textarea  class="form-control" name="directoraim" value="<?php echo ($info["directoraim"]); ?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">嘉宾简介：</label>

                            <div class="col-sm-8">
                                <textarea  class="form-control" name="guest" value="<?php echo ($info["guest"]); ?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">内容：</label>
                            <div class="ibox-content col-sm-8" style="border-top:none;clear:none;">
                                <textarea id="editor" placeholder="这里输入内容" autofocus  name="content" value="<?php echo ($info["content"]); ?>">

                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">上传时间：</label>
                            <div class="col-sm-8">
                                <input class="form-control layer-date" name="inputtime" placeholder="YYYY-MM-DD hh:mm:ss" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value="<?php echo ($info["inputtime"]); ?>">
                                <label class="laydate-icon"></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">缩略图：</label>
                            <div class="col-sm-8">
                                <input type="file" name="img1" class="form-control" >
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 图片尺寸为：220p*145px</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">缩略大图：</label>
                            <div class="col-sm-8">
                                <input type="file" name="img2" class="form-control" >
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 图片尺寸为：220p*310px 或460px*400px 或460px*310px</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">播放器图片：</label>
                            <div class="col-sm-8">
                                <input type="file" name="img3" class="form-control" >
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 图片尺寸为：865px*500px</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">作者头像：</label>
                            <div class="col-sm-8">
                                <input type="file" name="img4" class="form-control" >
                                <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 图片尺寸为：68*68px</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">推荐：</label>

                            <div class="col-sm-8">
                                <label class="checkbox-inline i-checks">
                                    <input type="checkbox" value="option1" name="up">推荐到栏目大图</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">提交</button>
                                <a class="btn btn-primary" href="javascript:history.go(-1);">取消</a>
                                <a type="button" class="btn btn-primary J_menuItem" href="<?php echo U('Special/Showlist');?>" target="_self" >返回专题列表</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function back()
    {
        window.location.href="history.go(-1)";
    }
</script>

<!-- 全局js -->
<script src="/qzvs/Public/asset/js/jquery.min.js?v=2.1.4"></script>
<script src="/qzvs/Public/asset/js/bootstrap.min.js?v=3.3.5"></script>

<!-- 自定义js -->
<script src="/qzvs/Public/asset/js/content.js?v=1.0.0"></script>

<!-- jQuery Validation plugin javascript-->
<script src="/qzvs/Public/asset/js/plugins/validate/jquery.validate.min.js"></script>
<script src="/qzvs/Public/asset/js/plugins/validate/messages_zh.min.js"></script>

<script src="_/qzvs/Public/asset/js/demo/form-validate-demo.js"></script>

<!-- simditor -->
<script type="text/javascript" src="/qzvs/Public/asset/js/plugins/simditor/module.js"></script>
<script type="text/javascript" src="/qzvs/Public/asset/js/plugins/simditor/uploader.js"></script>
<script type="text/javascript" src="/qzvs/Public/asset/js/plugins/simditor/hotkeys.js"></script>
<script type="text/javascript" src="/qzvs/Public/asset/js/plugins/simditor/simditor.js"></script>
<script>
    $(document).ready(function () {
        var editor = new Simditor({
            textarea: $('#editor'),
            defaultImage: '/qzvs/Public/asset/img/a9.jpg'
        });
    });
</script>


<!-- SUMMERNOTE -->
<script src="/qzvs/Public/asset/js/plugins/summernote/summernote.min.js"></script>
<script src="/qzvs/Public/asset/js/plugins/summernote/summernote-zh-CN.js"></script>

<script>
    $(document).ready(function () {

        $('.summernote').summernote({
            lang: 'zh-CN'
        });

    });
    var edit = function () {
        $("#eg").addClass("no-padding");
        $('.click2edit').summernote({
            lang: 'zh-CN',
            focus: true
        });
    };
    var save = function () {
        $("#eg").removeClass("no-padding");
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };
</script>


<!-- layerDate plugin javascript -->
<script src="/qzvs/Public/asset/js/plugins/layer/laydate/laydate.js"></script>
<script>
    //外部js调用
    laydate({
        elem: '#hello', //目标元素。由于laydate.js封装了一个轻量级的选择器引擎，因此elem还允许你传入class、tag但必须按照这种方式 '#id .class'
        event: 'focus' //响应事件。如果没有传入event，则按照默认的click
    });

    //日期范围限制
    var start = {
        elem: '#start',
        format: 'YYYY/MM/DD hh:mm:ss',
        min: laydate.now(), //设定最小日期为当前日期
        max: '2099-06-16 23:59:59', //最大日期
        istime: true,
        istoday: false,
        choose: function (datas) {
            end.min = datas; //开始日选好后，重置结束日的最小日期
            end.start = datas //将结束日的初始值设定为开始日
        }
    };
    var end = {
        elem: '#end',
        format: 'YYYY/MM/DD hh:mm:ss',
        min: laydate.now(),
        max: '2099-06-16 23:59:59',
        istime: true,
        istoday: false,
        choose: function (datas) {
            start.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(start);
    laydate(end);
</script>





</body>

</html>