<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>清泽微视 - index_v1 页面</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/qzvs/Public/asset/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/qzvs/Public/asset/css/animate.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/style.css?v=4.0.0" rel="stylesheet"><base target="_self">

</head>
 <div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onclick="displaynavbar(this)"></a></div>
<body class="gray-bg">
     <div class="pd-20" style="padding-top:20px; padding-left: 20px;">
  <p class="f-20 text-success" style="font-size: 20px; font-family: '微软雅黑';color:  #333; line-height: 40px;text-align: center;">欢迎使用清泽微视后台管理系统！</p>
  
  
                            <div class="col-sm-11" style="width:98%;">
                                 <div class="panel panel-default">
                                    <div class="panel-heading">
                                       我的个人信息
                                    </div>
                                    <div class="panel-body">
                                        <p style="padding-top: 10px;">你好，<?php echo ($_SESSION['name']); ?></p>
                                        <p>所属角色：<?php echo ($_SESSION['userrole']); ?></p>
                                        <p>登陆IP：<?php echo ($_SESSION['loginip']); ?></p>
                                        <p>登陆时间：<?php echo ($_SESSION['logintime']); ?></p>
                                    </div>

                                </div>
                            </div>

<div class="col-sm-11" style="width:98%;">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>TIPS</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseOne">幻灯管理</a>
                                            </h5>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                          <p style="padding-top: 10px;">选择添加幻灯，需上传内容包括文字内容和图片文件。</p>
                                          <p>文字部分有标题，副标题，点击文字。</p>
                                          <p>图片文件有幻灯背景图片（1920px*480px）,悬浮图片。</p>
                                          <p>排序值输入（第一张幻灯为1，之后依次增加）。</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseTwo">上传视频</a>
                                            </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="padding-top: 10px;">选择添加视频，需上传视频文件和完善视频信息两部分</p>
                                            <p>上传视频文件在<strong>视频文件管理</strong>模块内</p>
                                            <p>视频信息完善在<strong>视频信息管理</strong>模块 ‘添加视频文件信息’ 页面</p>
                                            <p style="color:red;">注意：上传视频文件名称与文件信息中视频信息名称必须一致</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseThree">专题模块上传视频</a>
                                            </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p style="padding-top: 10px;">选择添加某个专题的视频，需上传视频文件和完善视频信息两部分</p>
                                            <p>上传视频文件在<strong>视频文件管理</strong>模块内，具体步骤详见上传页面</p>
                                            <p>视频信息完善在<strong>专题信息管理</strong>模块专题信息列表页面，<span style="color:red;">点击管理视频->点击添加视频内容信息->完善视频信息</span></p>
                                            <p style="color:red;">注意：上传视频文件名称与文件信息中视频信息名称必须一致</p>
                                        </div>
                                    </div>
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


</body>

<html>