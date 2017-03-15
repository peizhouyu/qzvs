<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2016/7/31 0031
 * Time: 17:30
 */

namespace Home\Controller;
use Think\Controller;

class SearchController extends Controller
{
    public function SearchList()
    {
        //接收传递的参数
        $catid=I('get.catid');
        $type=I('get.type');//搜索的类型
        $lablekey=I('get.lable');//搜索的标签名字
        $time=I('get.time');//搜索的事件类型
        $hot=I('get.hot');//搜索的排行类型
        $searchmodel=M('qzvideo_weishi');
        //判断需要搜索的类型
        switch ($type){
            case 0;//按类别搜索，标签
                //拼接限制条件的参数并查找
                $condition['lable']=$lablekey;
                //  $condition['catid']=$catid;
                $p=getpage($searchmodel,$condition,15);
                $list=$searchmodel->field(true)->where($condition)->order('hits desc')->select();
                $this->page=$p->show();
                $count=$searchmodel->where($condition)->Count();
                $this->assign('count',$count);
                $this->assign('info',$list);
                break;
            case 1;//按时间搜索
                if($time=="today") {
                    $starttime=date('Y-m-d',time()-3600*24);
                }elseif ($time=="week"){
                    $starttime=date('Y-m-d',time()-3600*24*7);
                }elseif ($time=="month"){
                    $starttime=date('Y-m-d',time()-3600*24*30);
                }else{
                    $starttime=date('Y-m-d',time()-3600*24*30*12);
                }
                $endtime=date('Y-m-d',time());
                $condition['catid']=$catid;
                $condition['inputtime']= array(array('gt',$starttime),array('elt',$endtime));
                $p=getpage($searchmodel,$condition,15);
                $list=$searchmodel->field(true)->where($condition)->order('id desc')->select();
                $this->page=$p->show();
                $count=$searchmodel->where($condition)->Count();
                $this->assign('count',$count);
                $this->assign('info',$list);
                break;
            case 2;//按热度搜索
                $condition['catid']=$catid;
                $p=getpage($searchmodel,$condition,15);
                if($hot=="zan") {
                    $list = $searchmodel->field(true)->where($condition)->order('zan desc')->select();
                }else{
                    $list=$searchmodel->field(true)->where($condition)->order('hits desc')->select();
                }
                $this->page=$p->show();
                $count=$searchmodel->where($condition)->Count();
                $this->assign('count',$count);
                $this->assign('info',$list);
                break;
        }

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
        //根据栏目id 选择需要展示的页面
        switch($catid) {
            case 23:
                $lab['catname'] = "微生活";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:weishenghuo');
                break;
            case 25:
                $lab['catname'] = "微电影";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:weidianying');
                break;
            case 26:
                $lab['catname'] = "微资讯";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:weizixun');
                break;
            case 27:
                $lab['catname'] = "微访谈";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:weifangtan');
                break;
            case 28:
                $lab['catname'] = "微课堂";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:weiketang');
                break;
            case 29:
                $lab['catname'] = "生涯导航";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:shengyadaohang');
                break;
            case 30:
                $lab['catname'] = "微分享";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:weifenxiang');
                break;
            case 31:
                $lab['catname'] = "素材库";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:sucaiku');
                break;
            case zhuanti:
                $lab['catname'] = "微专题";
                $lab = $labmodel->limit(6)->where($lab)->select();
                $this->assign('lab', $lab);
                $this->display('Video:weizhuanti');
                break;
        }
    }
    public function search()
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

        //显示类别下面的标签
        $condition['uplm']='1';
        $condition['updh']='1';
        $lab=$labmodel->limit(4)->where($condition)->order('lableid desc')->select();
        $this->assign('lab',$lab);
        //类别下的标签显示结束

        $time_start = microtime(ture);//获取查询开始时间

        $type=isset($_GET['type'])?I('get.type'):3;//搜索的类型
        $lablekey=I('get.lable');//搜索的标签名字
        $time=I('get.time');//搜索的事件类型
        $hot=I('get.hot');//搜索的排行类型

        $content=I('get.content');
        $searchmodel=D('qzvideo_keyword');
        $where['keydata']=array('like','%'.$content.'%');
        //判断搜索类型
        switch ($type){
            case 0://按类别搜索，标签
                //拼接限制条件的参数并查找
                $where['keydata']=array('like','%'.$lablekey.'%');
                $p=getpage($searchmodel,$where,15);
                $searchlist=$searchmodel->table('qzvideo_keyword keyword,qzvideo_weishi weishi')
                    ->field('keyword.videoid,weishi.title as title,weishi.thumb as thumb,weishi.description as description')
                    ->order('keyword.keyid desc')
                    ->where('keyword.videoid=weishi.id')
                    ->where($where)
                    ->select();
                $this->page=$p->show();
                $count=$searchmodel->where($where)->Count();
                $this->assign('count',$count);
                $this->assign('searchinfo',$searchlist);
                break;
            case 1://按时间搜索
                if($time=="today") {
                    $starttime=date('Y-m-d',time()-3600*24);
                }elseif ($time=="week"){
                    $starttime=date('Y-m-d',time()-3600*24*7);
                }elseif ($time=="month"){
                    $starttime=date('Y-m-d',time()-3600*24*30);
                }else{
                    $starttime=date('Y-m-d',time()-3600*24*30*12);
                }
                $endtime=date('Y-m-d',time());
                $where['creattime']= array(array('gt',$starttime),array('elt',$endtime));
                $p=getpage($searchmodel,$where,15);
                $searchlist=$searchmodel->table('qzvideo_keyword keyword,qzvideo_weishi weishi')
                    ->field('keyword.videoid,weishi.title as title,weishi.thumb as thumb,weishi.description as description')
                    ->order('keyword.keyid desc')
                    ->where('keyword.videoid=weishi.id')
                    ->where($where)
                    ->select();
                $this->page=$p->show();
                $count=$searchmodel->where($where)->Count();
                $this->assign('count',$count);
                $this->assign('searchinfo',$searchlist);
                break;
            case 2://按热度搜索
                $p=getpage($searchmodel,$where,1);
                if($hot=="zan") {   //按点赞数逆向排序
                    $searchlist=$searchmodel->table('qzvideo_keyword keyword,qzvideo_weishi weishi')
                        ->field('keyword.videoid,weishi.title as title,weishi.thumb as thumb,weishi.description as description')
                        ->order('weishi.zan desc')
                        ->where('keyword.videoid=weishi.id')
                        ->where($where)
                        ->select();
                }else{    //按点击量排序
                    $searchlist=$searchmodel->table('qzvideo_keyword keyword,qzvideo_weishi weishi')
                        ->field('keyword.videoid,weishi.title as title,weishi.thumb as thumb,weishi.description as description')
                        ->order('weishi.hits desc')
                        ->where('keyword.videoid=weishi.id')
                        ->where($where)
                        ->select();
                }
                $this->page=$p->show();
                $count=$searchmodel->where($where)->Count();
                $this->assign('count',$count);
                $this->assign('searchinfo',$searchlist);
                break;
            default  : //默认，只按关键字查询
                $p=getpage($searchmodel,$where,15);
                $searchlist=$searchmodel->table('qzvideo_keyword keyword,qzvideo_weishi weishi')
                    ->field('keyword.videoid,weishi.title as title,weishi.thumb as thumb,weishi.description as description')
                    ->order('keyword.keyid desc')
                    ->where('keyword.videoid=weishi.id')
                    ->where($where)
                    ->select();
                $this->page=$p->show();
                $count=$searchmodel->where($where)->count();
                $this->assign('count',$count);
                $this->assign('searchinfo',$searchlist);
                break;

        }
        $this->assign('content',$content);

        //把搜索的关键字放入数据库中
        if(!empty($searchlist)) {//判断此关键字是否查询得到数据，若没有则此关键字不加入数据库
            $ip = get_client_ip(1);
            $cookiename = strval($ip) . $content;
            if (!isset($_COOKIE[$cookiename])) {
                $keywordmodel = M('qzvideo_search');
                $condition['keyword'] = $content;
                $result = $keywordmodel->where($condition)->select();
                if (empty($result)) {
                    $condition['inputime'] = time();
                    $keywordmodel->where($condition)->add($condition);
                    // $cookiename = $ip+$_SESSION['content'];
                    setcookie($cookiename, 40, time() + 300, '/');
                } else {
                    $keywordmodel->where($condition)->setInc('searchnums');
                    //$cookiename = $ip+$_SESSION['content'];
                    setcookie($cookiename, 40, time() + 300, '/');
                }
            }
        }
       // var_dump($cookiename);

        $time_end = microtime(ture);//获取查询结束时间
        $this->assign('spendtime',round($time_end-$time_start,6));//前端展示查询时间
        $this->display('search');
    }
}