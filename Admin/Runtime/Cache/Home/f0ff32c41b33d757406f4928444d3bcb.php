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

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-6" style="width:100%;">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>修改个人信息</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" id="signupForm" action="<?php echo U('Index/adminchange');?>" method="post">
                            <input type="hidden" value="<?php echo ($userinfo["userid"]); ?>" name="userid" >
                            <div class="form-group">
                                <label class="col-sm-3 control-label">用户名：</label>
                                <div class="col-sm-8">
                                    <input id="username" name="username" class="form-control" type="text" aria-required="true" aria-invalid="true" class="error" value="<?php echo ($userinfo["username"]); ?>">
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="col-sm-3 control-label">密码：</label>
                                <div class="col-sm-8">
                                    <input id="password" name="password" class="form-control" type="password" value="<?php echo ($userinfo["password"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">确认密码：</label>
                                <div class="col-sm-8">
                                    <input id="confirm_password" name="confirm_password" class="form-control" type="password" value="<?php echo ($userinfo["password"]); ?>">
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请再次输入您的密码</span>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 control-label">真实姓名：</label>
                                <div class="col-sm-8">
                                    <input id="lastname" name="realname" class="form-control" type="text" aria-required="true" aria-invalid="false" class="valid" value="<?php echo ($userinfo["realname"]); ?>">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-3 control-label">E-mail：</label>
                                <div class="col-sm-8">
                                    <input id="email" name="email" class="form-control" type="email" value="<?php echo ($userinfo["email"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">所属角色：</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="role" >
                                        <?php if(is_array($adminrole)): $i = 0; $__LIST__ = $adminrole;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo["rolename"]) == $userinfo["rolename"]): ?><option value="<?php echo ($vo["rolename"]); ?>" selected><?php echo ($vo["rolename"]); ?></option><?php endif; ?>
                                            <?php if(($vo["rolename"]) != $userinfo["rolename"]): ?><option value="<?php echo ($vo["rolename"]); ?>" ><?php echo ($vo["rolename"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
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