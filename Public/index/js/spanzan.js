function  zan(id) {
            event.preventDefault();
            //var Oa=$(this);
            //var id=Oa.attr('id');//获取id属性
            var id=id;
            var vl=$("#"+id).text();

            vl=parseInt(vl)+1;
            $.post('http://123.57.30.41/qzvs/index.php/Home/Video/zan',{id:id},function(data){
                if(data.status==1){
                    //alert('感谢您的支持！');//模拟异步数据加1
                    $("#"+id).text(vl);//页面元素加1
                }else{
                   //alert('您已经点过赞了,不要重复哦！');
                }
            },'json');
            //window.location.href = "http://localhost/qzvs/index.php/Home/Video/zan/id/"+id;
        }