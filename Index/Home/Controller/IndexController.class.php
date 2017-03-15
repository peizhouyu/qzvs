<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
        $slide = M('banner');
        $condition['if_valid']="有效";

        $info = $slide->limit(9)->where($condition)->order('slide_order desc')->select();
        $this->assign('info',$info);

        $special=M('qzvideo_special');
        $specialinfo=$special->limit(7)->order('id desc')->select();
        $this->assign('weizhuanti',$specialinfo);

        /*从数据库获取视频信息*/
        $video =M('qzvideo_weishi');
        $condition['catid']=$con['catid']='26';
        $info1 = $video ->limit(6)->where($condition)->order('id desc')->select();
        $count1=$video->where($condition)->Count();
        $con['up']='1';
        $upinfo=$video->limit(1)->where($con)->order('id desc')->find();
        $this->assign('wzxup',$upinfo);
        $this->assign('count1',$count1);
        $this->assign('weizixun',$info1);

        $condition['catid']='23';
        $info2 = $video ->limit(5)->where($condition)->order('id desc')->select();
        $count2=$video->where($condition)->Count();
        $this->assign('count2',$count2);
        $this->assign('weishenghuo',$info2);

        $condition['catid']= $con['catid']='27';
        $info4 = $video ->limit(6)->where($condition)->order('id desc')->select();
        $count3=$video->where($condition)->Count();
        $con['up']='1';
        $wftup=$video->limit(5)->where($con)->order('id desc')->select();
        $this->assign('wftup',$wftup);
        $this->assign('count3',$count3);
        $this->assign('weifangtan',$info4);

        $condition['catid']='25';
        $info5 = $video ->limit(5)->where($condition)->order('id desc')->select();
        $count4=$video->where($condition)->Count();
        $this->assign('count4',$count4);
        $this->assign('weidianying',$info5);

        $condition['catid']=$con['catid']='28';
        $info6 = $video ->limit(3)->where($condition)->order('id desc')->select();
        $count1=$video->where($condition)->Count();
        $wktup=$video->limit(1)->where($con)->order('id desc')->find();
        $this->assign('wktup',$wktup);
        $this->assign('count5',$count1);
        $this->assign('weiketang',$info6);

        $condition['catid']='29';
        $info7 = $video ->limit(5)->where($condition)->order('id desc')->select();
        $count1=$video->where($condition)->Count();
        $this->assign('count6',$count1);
        $this->assign('shengyadaohang',$info7);

        $condition['catid']='30';
        $info8 = $video ->limit(5)->where($condition)->order('id desc')->select();
        $count1=$video->where($condition)->Count();
        $this->assign('count7',$count1);
        $this->assign('weifenxiang',$info8);

        $condition['catid']='31';
        $info9 = $video ->limit(5)->where($condition)->order('id desc')->select();
        $count1=$video->where($condition)->Count();
        $this->assign('count8',$count1);
        $this->assign('sucaiku',$info9);
        /*视频获取结束*/

        /*获取右侧栏目标签*/
        $catmodel=M('qzvideo_category');
        $catlist=$catmodel->select();
        $labmodel=M('qzvideo_lable');
        $lable['uplm']='1';
        for($i=0;$i<count($catlist,0);){
            $lable['catname']=$catlist[$i]['catname'];
            $labinfo=$labmodel->limit(3)->where($lable)->order('lableid desc')->select();
            $this->assign($catlist[$i]['letter'].'lab',$labinfo);
            // var_dump($labinfo);
            $i=$i+1;
        }
        /*获取右侧栏目标签结束*/

       /* 获取热门关键字*/
        $keymodel=M('qzvideo_search');
        $keyinfo=$keymodel->limit(5)->order('searchnums desc')->select();
        $this->assign('hotkey',$keyinfo);
      /* 获取热门关键字结束*/

        $this ->display(index);

    }
    public function play(){
        $info= I('get.id');
        $video =M('qzvideo_weishi');
        $condition['id']=$info;
        $ar = $video->where($condition)->find();
        $this ->assign('play',$ar);

        //获取导航栏目标签
        $catmodel=M('qzvideo_category');
        $catlist=$catmodel->select();
        $labmodel=M('qzvideo_lable');
        $lable['updh']='1';
        for($i=0;$i<count($catlist,0);){
            $lable['catname']=$catlist[$i]['catname'];
            $labinfo=$labmodel->limit(3)->where($lable)->order('lableid desc')->select();
            $this->assign($catlist[$i]['letter'].'lab',$labinfo);
            // var_dump($labinfo);
            $i=$i+1;
        }
        $lable['catname']="微专题";
        $labinfo=$labmodel->limit(3)->where($lable)->select();
        $zhuantimodel=M('qzvideo_special');//根据标签获取专题id
        for($i=0;$i<count($labinfo,0);$i++){
            $zhuanti['title']=$labinfo[$i]['labname'];
            $zhuantiinfo=$zhuantimodel->where($zhuanti)->find();
            $labinfo[$i]['specialid']=$zhuantiinfo['id'];
            //var_dump($zhuantiinfo['id']);
        }
        $this->assign('zhuantilab',$labinfo);
        //获取导航栏目标签结束


        $con['catid']=$ar['catid'];
        $catmodel=M('qzvideo_category');
        $catinfo=$catmodel->where($con)->find();
        $this->assign('catname',$catinfo['catname']);


        //更改qzvideo_weishi表中点击量
        $data['hits']=$ar['hits']+1;
        $databasename="qzvideo_weishi";
        change_info($databasename,$info,$data);



        $hitmodel=M('qzvideo_hits');
        $hit['videoid']=$ar['id'];
        $hitinfo=$hitmodel->where($hit)->find();
        //更改qzvideo_hits表中的观看量
        $data['views']=$data['hits'];
        $date=time();
       $time=date('Y-m-d',$date);
        $data['updatetime']=$time;
        //判断日期是否为同一天
        if($time==$hitinfo['updatetime']){
            $data['dayviews']=$hitinfo['dayviews']+1;
        }else{
            $data['dayviews']=1;
        }
        //判断日期是否为同一周
        if(BoolWork($time,$hitinfo['updatetime']))
        {
            $data['weekviews']=$hitinfo['weekviews']+1;
        }else{
            $data['weekviews']=1;
        }
        //判断日期是否为同一个月
        if(BoolMonth($time,$hitinfo['updatetime']))
        {
            $data['monthviews']=$hitinfo['monthviews']+1;
        }else{
            $data['monthviews']=1;
        }
        $con['videoid']=$ar['id'];
         //$changemode=M('qzvideo_hits');
        $hitmodel->where($con)->save($data);


        $keyword=trim($ar['keywords']);
        $keywords=explode(";",$keyword);
        $this->assign('keywords',$keywords);

        //侧栏视频
        $videomodel=M('qzvideo_weishi');
        $videoinfo=$videomodel ->limit(7)->order('hits desc')->select();
        $this->assign('videoinfo',$videoinfo);
       // echo "sdafasdfsa";
       $this ->display(play);
        //$bool[1]=BoolWork($time,$hitinfo['updatetime']);
        //$bool[0]=BoolMonth($time,$hitinfo['updatetime']);
        //var_dump($bool);
    }
}