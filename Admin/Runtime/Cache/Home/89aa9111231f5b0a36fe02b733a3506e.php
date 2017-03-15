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
   <!-- <link href="/qzvs/Public/asset/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/qzvs/Public/asset/css/animate.css" rel="stylesheet">-->
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
                          <a  class="btn btn-primary "style="margin-top:-8px;" href="#modal-form" data-toggle="modal">添加标签</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                         <div class="form-group" >
                                <div class="col-sm-4" style="float:none;margin:0 auto;">
                                 <form action="<?php echo U('Lable/search');?>" method="post">

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
                                    <th style="width:20%;">栏目名称</th>
                                    <th style="width:40%;">标签名称</th>
                                    <th style="width:40%;">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($labinfo)): $i = 0; $__LIST__ = $labinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($vo["catname"]); ?></td>
                                        <td><?php echo ($vo["labname"]); ?></td>
                                        <td><a href="<?php echo U('Lable/change',array('id'=>$vo['lableid']));?>">[修改]</a><a onclick="drop_confirm('确定要删除吗？','<?php echo U('Lable/Del',array('id'=>$vo['lableid']));?>')">[删除]</a><a href="<?php echo U('Lable/uplm',array('id'=>$vo['lableid']));?>">[<?php echo ($vo["uplm"]); ?>]</a><a href="<?php echo U('Lable/updh',array('id'=>$vo['lableid']));?>">[<?php echo ($vo["updh"]); ?>]</a></td>
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



    <div id="modal-form" class="modal fade" aria-hidden="true" >
       
            
                <div class="modal-body"style="transform: translateY(-50%); position: absolute;
    top: 50%;
    width:100%;
    left: 0;">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div id="row_rag" class="row"style="width:38%; margin: 0 auto;">
                            <div id="my_sm_6" class="col-sm-6" style="width: 100%;" >
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                        <h5>添加标签</h5>
                                    </div>
                                    <div class="ibox-content">
                                         <form class="form-horizontal m-t" id="signupForm" action="<?php echo U('Lable/Add');?>" method="get">
                                         <div  class="form-group">
                                            <label class="col-sm-3 control-label">标签名称：</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="name" class="form-control" placeholder="请输入文本">
                                            </div>
                                         </div> 
                                           <div class="form-group">
                                                <label class="col-sm-3 control-label">所属栏目：</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="catname">
                                                        <?php if(is_array($catinfo)): $i = 0; $__LIST__ = $catinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["catname"]); ?>"><?php echo ($vo["catname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        <option value="微专题">微专题</option>
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
                </div>
           
    </div>
          
    <!-- 全局js -->
    <script src="/qzvs/Public/asset/js/jquery.min.js?v=2.1.4"></script>
    <script src="/qzvs/Public/asset/js/bootstrap.min.js?v=3.3.5"></script>



  <!--  &lt;!&ndash; Peity &ndash;&gt;
    <script src="/qzvs/Public/asset/js/plugins/peity/jquery.peity.min.js"></script>-->

    <!-- 自定义js -->
    <script src="/qzvs/Public/asset/js/content.js?v=1.0.0"></script>

<!--    &lt;!&ndash; iCheck &ndash;&gt;
    <script src="/qzvs/Public/asset/js/plugins/iCheck/icheck.min.js"></script>

    &lt;!&ndash; Peity &ndash;&gt;
    <script src="/qzvs/Public/asset/js/demo/peity-demo.js"></script>

    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>-->
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