$(".zan").click(function () {

                var Oa=$(this);
                var id=Oa.attr('id');//获取id属性
                var vl=Oa.find("b").text();

                vl=parseInt(vl)+1;

                $.post('http://123.57.30.41/qzvs/index.php/Home/Video/zan',{id:id},function(data){
                    if(data.status==1){
                        //alert('感谢您的支持！');//模拟异步数据加1
                        Oa.find("b").text(vl);//页面元素加1
                    }else {

                    }
                },'json');
            })