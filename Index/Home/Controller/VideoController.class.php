<?php
/**
 * Created by PhpStorm.
 * User: kailiu
 * Date: 2016/6/9
 * Time: 21:56
 */

namespace Home\Controller;
use Think\Controller;
class VideoController extends Controller
{
    public function showlist()
    {
        //获取列表页面展示的数据
        $catid=I('get.catid');
        $condition['catid']=$catid;
        $datamodel=M('qzvideo_weishi');
        //分页获取数据
        $p=getpage($datamodel,$condition,8);
        $list=$datamodel->field(true)->where($condition)->order('id desc')->select();
        $this->list=$list;
        $this->page=$p->show();
     //   $datainfo=$datamodel->where($condition)->order('id desc')->select();
        $count=$datamodel->where($condition)->Count();
        $this->assign('count',$count);
        $this->assign('info',$list);
        //获取专题列表页面的数据
        if($catid=="zhuanti")
        {
            $zhuantimodel=M('qzvideo_special');

            $p=getpage($zhuantimodel,$condition,8);
            $list=$zhuantimodel->field(true)->order('id desc')->select();
            $this->list=$list;
            $this->page=$p->show();
            //$zhuantiinfo=$zhuantimodel->select();
            $count=$zhuantimodel->Count();
            $this->assign('count',$count);
            $this->assign('zhuanti',$list);
        }
        //获取数据完成

        //获取导航栏目标签
        $catmodel=M('qzvideo_category');
        $catlist=$catmodel->select();
        $labmodel=M('qzvideo_lable');
        $lable['updh']='1';
        for($i=0;$i<count($catlist,0);){
            $lable['catname']=$catlist[$i]['catname'];
            $labinfo=$labmodel->limit(3)->where($lable)->order('lableid desc')->select();
            $this->assign($catlist[$i]['letter'].'lab',$labinfo);
            //  var_dump($labinfo);
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

        /* 获取热门关键字*/
        $keymodel=M('qzvideo_search');
        $keyinfo=$keymodel->limit(5)->order('searchnums desc')->select();
        $this->assign('hotkey',$keyinfo);
        /* 获取热门关键字结束*/

        switch($catid)
        {
            case 23:
                $lab['catname']="微生活";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display('Video:weishenghuo');
                break;
            case 25:
                $lab['catname']="微电影";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display(weidianying);
                break;
            case 26:
                $lab['catname']="微资讯";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display(weizixun);
                break;
            case 27:
                $lab['catname']="微访谈";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display(weifangtan);
                break;
            case 28:
                $lab['catname']="微课堂";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display(weiketang);
                break;
            case 29:
                $lab['catname']="生涯导航";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display(shengyadaohang);
                break;
            case 30:
                $lab['catname']="微分享";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display(weifenxiang);
                break;
            case 31:
                $lab['catname']="素材库";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display(sucaiku);
                break;
            case zhuanti:
                $lab['catname']="微专题";
                $lab=$labmodel->limit(6)->where($lab)->select();
                $this->assign('lab',$lab);
                $this->display(weizhuanti);
                break;
        }

    }


    public function specialvideo()
    {
        $specialid=I('get.id');
        $condition['id']=$specialid;
        $specialmodel=M('qzvideo_special');
        $specialinfo=$specialmodel->where($condition)->find();
        $this->assign('special',$specialinfo);

        //获取导航栏目标签
        $catmodel=M('qzvideo_category');
        $catlist=$catmodel->select();
        $labmodel=M('qzvideo_lable');
        $lable['updh']='1';
        for($i=0;$i<count($catlist,0);){
            $lable['catname']=$catlist[$i]['catname'];
            $labinfo=$labmodel->limit(3)->where($lable)->order('lableid desc')->select();
            $this->assign($catlist[$i]['letter'].'lab',$labinfo);
            //  var_dump($labinfo);
            $i=$i+1;
        }

        $lable['catname']="微专题";
        $labinfo=$labmodel->limit(3)->where($lable)->select();
        $zhuantimodel=M('qzvideo_special');
        for($i=0;$i<count($labinfo,0);$i++){
            $zhuanti['title']=$labinfo[$i]['labname'];
            $zhuantiinfo=$zhuantimodel->where($zhuanti)->find();
            $labinfo[$i]['specialid']=$zhuantiinfo['id'];
            //var_dump($zhuantiinfo['id']);
        }
        $this->assign('zhuantilab',$labinfo);
        //获取导航栏目标签结束

        //根据专题id获取视频内容
        $con['specialid']=$specialid;
        $videomodel=M('qzvideo_weishi');
        $videoinfo=$videomodel->where($con)->order('id desc')->select();
        $videoinfo5=$videomodel->where($con)->order('hits desc')->select();
        
        //获取幻灯显示视频
        $co['specialid']=$specialid;
        $co['up']='1';
        $upvideo=$videomodel->limit(5)->where($co)->order('id desc')->select();
        $this->assign('upvideo',$upvideo);

        $this->assign('video',$videoinfo5);
        $this->assign('videoinfo',$videoinfo);

        $cond['catid']=$videoinfo['0']['catid'];
        $catmodel=M('qzvideo_category');
        $catinfo=$catmodel->where($cond)->find();
        $this->assign('catname',$catinfo['catname']);

        $this->display(specialvideo);
    }


    public function rank()
    {
        $date=I('get.date');
        if(empty($date))
        {

            //获取导航栏目标签
            $catmodel=M('qzvideo_category');
            $catlist=$catmodel->select();
            $labmodel=M('qzvideo_lable');
            $lable['updh']='1';
            for($i=0;$i<count($catlist,0);){
                $lable['catname']=$catlist[$i]['catname'];
                $labinfo=$labmodel->limit(3)->where($lable)->order('lableid desc')->select();
                $this->assign($catlist[$i]['letter'].'lab',$labinfo);
                //  var_dump($labinfo);
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
            
            //获取相应栏目视频
           $videomodel=M('qzvideo_weishi');
            for($i=0;$i<count($catlist,0);){
                $condition['catid']=$catlist[$i]['catid'];
                $videoinfo=$videomodel->limit(10)->where($condition)->order('hits desc')->select();
                $this->assign($catlist[$i]['letter'],$videoinfo);
              //var_dump($videoinfo);
                $i=$i+1;
            }
            //获取相应栏目栏目视频结束
        }else{

            //获取导航栏目标签
            $catmodel=M('qzvideo_category');
            $catlist=$catmodel->select();
            $labmodel=M('qzvideo_lable');
            $lable['updh']='1';
            for($i=0;$i<count($catlist,0);){
                $lable['catname']=$catlist[$i]['catname'];
                $labinfo=$labmodel->limit(3)->where($lable)->order('lableid desc')->select();
                $this->assign($catlist[$i]['letter'].'lab',$labinfo);
                //  var_dump($labinfo);
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

            //获取栏目名称
            $catmodel=M('qzvideo_category');
            $catlist=$catmodel->select();
            //根据栏目获取qzvideo_hits表中相应的数据
            $hitmodel=M('qzvideo_hits');
            $videomodel=M('qzvideo_weishi');
            for($i=0;$i<count($catlist,0);){
                $where['catid']=$catlist[$i]['catid'];
                switch ($date)
                {
                    case today:
                        $info=$hitmodel->limit(10)->where($where)->order('dayviews desc')->select();
                        for($j=0;$j<count($info);$j++)//根据排行取出的记录取出具体数据
                        {
                            $condition['id']=$info[$j]['videoid'];
                            $videoinfo=$videomodel->where($condition)->find();
                            $video[$j]=$videoinfo;
                            $video[$j]['hits']=$info[$j]['dayviews'];
                        }
                        break;
                    case week:
                        $info=$hitmodel->limit(10)->where($where)->order('weekviews desc')->select();
                        for($j=0;$j<count($info);$j++)//根据排行取出的记录取出具体数据
                        {
                            $condition['id']=$info[$j]['videoid'];
                            $videoinfo=$videomodel->where($condition)->find();
                            $video[$j]=$videoinfo;
                            $video[$j]['hits']=$info[$j]['weekviews'];
                        }
                        break;
                    case month:
                        $info=$hitmodel->limit(10)->where($where)->order('monthviews desc')->select();
                        for($j=0;$j<count($info);$j++)//根据排行取出的记录取出具体数据
                        {
                            $condition['id']=$info[$j]['videoid'];
                            $videoinfo=$videomodel->where($condition)->find();
                            $video[$j]=$videoinfo;
                            $video[$j]['hits']=$info[$j]['monthviews'];
                        }
                        break;

                }
                $this->assign($catlist[$i]['letter'],$video);
                //var_dump($i);
                $video=null;
                $i=$i+1;
            }
        }

        $this->display(rank);
    }


    public function zan(){
        $data['id']=isset($_POST['id'])?intval(trim($_POST['id'])):0;
       // var_dump($data);

        $obj = M("qzvideo_weishi");
        $ip=get_client_ip(1);

        if(!isset($_COOKIE[$ip+$_POST['id']+10000])&&$obj->where($data)->setInc('zan')){
            $cookiename = $ip+$_POST['id']+10000;
            setcookie($cookiename,40,time()+3600*24,'/');

            $data['info'] = "ok";
            $data['status'] = 1;
            $this->ajaxReturn($data);

            exit();
        }else{
            $data['info'] = "fail";
            $data['status'] = 0;
            $this->ajaxReturn($data);
            exit();
        }


    }



}
