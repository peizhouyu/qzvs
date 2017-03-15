<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>清泽微视- 主页</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"> <link href="/qzvs/Public/asset/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/animate.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/style.css?v=4.0.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span><img alt="image" class="img-circle" src="/qzvs/Public/asset/img/logo_1.jpg" /></span>
                    </div>

                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">幻灯管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Banner/Add');?>"  date-index="0">新增首页幻灯</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Banner/Showlist');?>">管理首页幻灯</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">管理员管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="<?php echo U('Admin/userchange');?>">个人信息</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a><span class="">欢迎！</span> </a>
                    </li>
                    <li class="dropdown">
                        <a ><span><?php echo ($name); ?></span></a>
                    </li>
                    <li class="dropdown">
                        <a ><span>[<?php echo ($userrole); ?>]</span></a>
                    </li>
                    <li class="dropdown">
                        <a >当前日期:<script type="text/javascript">
                            a=new Date();
                            document.write(a.getFullYear()+"-"+(a.getMonth()+1)+"-"+a.getDate())

                        </script></a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;"  class="active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                </button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a>定位当前选项卡</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                    </li>
                    <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                    </li>
                </ul>
            </div>
            <a href="<?php echo U('Index/loginout');?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="index_v1.html?v=4.0" frameborder="0" data-id="index_v1.html" seamless></iframe>
        </div>
        <div class="footer">
            <div class="pull-right"> CopyRight 2013 qzxy-v.tyut.edu.cn .All Rights Reserved
            </div>
        </div>
    </div>
    <!--右侧部分结束-->
    <!--右侧边栏开始-->

    <!--右侧边栏结束-->




    <!-- 全局js -->
    <script src="/qzvs/Public/asset/js/jquery.min.js?v=2.1.4"></script>
    <script src="/qzvs/Public/asset/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/qzvs/Public/asset/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/qzvs/Public/asset/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/qzvs/Public/asset/js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="/qzvs/Public/asset/js/hplus.js?v=4.0.0"></script>
    <script type="text/javascript" src="/qzvs/Public/asset/js/contabs.js"></script>

    <!-- 第三方插件 -->
    <script src="/qzvs/Public/asset/js/plugins/pace/pace.min.js"></script>

    <script type="text/javascript">
        function getNowFormatDate() {
            var date = new Date();
            var seperator1 = "-";
            var seperator2 = ":";
            var month = date.getMonth() + 1;
            var strDate = date.getDate();
            if (month >= 1 && month <= 9) {
                month = "0" + month;
            }
            if (strDate >= 0 && strDate <= 9) {
                strDate = "0" + strDate;
            }
            var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
                    + " " + date.getHours() + seperator2 + date.getMinutes()
                    + seperator2 + date.getSeconds();
            return currentdate;
        }
    </script>

</body>

</html>