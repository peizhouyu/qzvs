<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/2
 * Time: 23:22
 */
namespace Home\Controller;
use Think\Controller;

class VideoController extends Controller
{
    public function Add()
    {
        if(empty(session('name')))
        {
            $this->redirect('Index/login',array('cate_id=>2'),0,'请先登录...');
        }else{
            if(empty(I('post.catname')))
            {
                $specialid=I('get.specialid');
                $catmodel=M('qzvideo_category');
                $catinfo = $catmodel->select();
                $this->assign('specialid',$specialid);
                 $this->assign('index',$catinfo);

                //获取最近上传的8个视频
                $filemodel=M('qzvideo_file');
                $time=date('Y-m-d',time());
                $where['createtime']=array('eq',$time);
                $fileinfo=$filemodel->limit(8)->where($where)->order('id desc')->select();
                $this->assign('fileinfo',$fileinfo);


                 //获取标签数据
                 $labmodel=M('qzvideo_lable');
                 $labinfo=$labmodel->select();
                 $weishenghuo=$weizixun=$weidianying=$weiketang=$weifangtan=$weifenxiang=$shengyadaohang=$sucaiku="";
                 //var_dump($labinfo);
                 for ($i=0; $i < count($labinfo,0); $i=$i+1) { 
                    $lab[$i]['catname']=$labinfo[$i]['catname'];
                    $lab[$i]['labname']=$labinfo[$i]['labname'];
                    
                    switch ($lab[$i]['catname']) {
                        case '微生活':
                            $weishenghuo=$weishenghuo."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                         case '微资讯':
                            $weizixun=$weizixun."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                         case '微电影':
                            $weidianying=$weidianying."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                         case '微课堂':
                            $weiketang=$weiketang."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                         case '微访谈':
                            $weifangtan=$weifangtan."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;

                         case '微分享':
                            $weifenxiang=$weifenxiang."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                         case '生涯导航':
                            $shengyadaohang=$shengyadaohang."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                         case '素材库':
                            $sucaiku=$sucaiku."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                        }
                 }
                 //var_dump($weishenghuo);
                 //var_dump($weizixun);
                 //赋值标签语句
                 $this->assign('weizixun',$weizixun);
                 $this->assign('weishenghuo',$weishenghuo);
                 $this->assign('weidianying',$weidianying);
                 $this->assign('weiketang',$weiketang);
                 $this->assign('weifangtan',$weifangtan);
                 $this->assign('weifenxiang',$weifenxiang);
                 $this->assign('shengyadaohang',$shengyadaohang);
                 $this->assign('sucaiku',$sucaiku);

                 //$this->assign('lab',$lab);
                $this->display(add);
            }else
            {
               // $specialid=I('post.specialid');
                $type= I('post.catname');
               // session('video_type', $type);

                $columntypemodel=M('qzvideo_category');
                $condition['catname']=$type;
                $columntype=$columntypemodel->where($condition)->find();


                $url1 = "Public/upload/img/" . $_FILES["img1"]["name"];
                $img1_url =LOCALHOST."/Public/upload/img/" . $_FILES["img1"]["name"];
                move_uploaded_file($_FILES["img1"]["tmp_name"], "$url1");

                $url2 = "Public/upload/img/" . $_FILES["img2"]["name"];
                $img2_url =LOCALHOST."/Public/upload/img/" . $_FILES["img2"]["name"];
                move_uploaded_file($_FILES["img2"]["tmp_name"], "$url2");

                $url3 = "Public/upload/img/" . $_FILES["img3"]["name"];
                $img3_url=LOCALHOST."/Public/upload/img/" . $_FILES["img3"]["name"];
                move_uploaded_file($_FILES["img3"]["tmp_name"], "$url3");

                $url4 = "Public/upload/img/" . $_FILES["img4"]["name"];
                $img4_url =LOCALHOST."/Public/upload/img/" . $_FILES["img4"]["name"];
                move_uploaded_file($_FILES["img4"]["tmp_name"], "$url4");

                $data['title']=I('post.title');
                $data['keywords']=I('post.keywords');
                $data['director'] =I('post.director');
                $data['performer']=I('post.performer');
                $data['content']=I('post.content');
                $data['description']=I('description');
                $data['inputtime']=!empty(I('post.inputtime'))?I('post.inputtime'):date('y-m-d');
                $data['teamdes']=I('post.teamdes');
                $data['director']=I('post.director');
                $data['guest']=I('post.guest');
                $data['length']=I('post.length');
               // $data['view_number']='0';
                $data['catid']=$columntype['catid'];
              //  session('video_type',$columntype['letter']);
                $data['inputtime']=time();
              //  $data['video_url']=$video;
                $data['thumb']=$img1_url;
                $data['bigpic']=$img2_url;
                $data['top']=$img3_url;
                $data['authorthum']=$img4_url;
                $data['username'] = session('name');
                //$data['url']=str_replace(' ','',I('post.name'));
                $data['url']=I('post.name');
                $data['lable']=I('post.lable');
                //$data['specialid']=$specialid;
                if(!empty(I('post.up')))
                {
                    $data['up']=1;
                }
                //获取存放在点击量表中的数据
                $data['hits']=array('videotitle'=>$data['title'],'catid'=>$data['catid'],'updatetime'=>date('y-m-d'));

                //实例化关联模型
                $weishimodel=D("Weishi");
                //获取存放在视频对应标签表中的数据
                $data['keyword'] = array('keydata' => $data['title'].' '.$type.' '.$data['lable'].' '.$data['keywords'],'creattime'=>date('Y-m-d'));
              //把获取的数据存放在对应表中
                $result = $weishimodel->relation(true)->add($data);
                if($result)
                {
                    $this->success('内容发布成功');
                }else {
                    $this->error('内容发布失败，请重试');
                }
               // var_dump($data);

            }

        }

    }

    public function Showlist()
    {

            $type = I('get.type');
            $condition['letter'] = $type;
            $condition['catname']=$type;
            $condition['_logic']='or';
        $map['_complex']=$condition;
       // $condition['catid']=I('get.catid');

          $catmodel=M('qzvideo_category');
           $catinfo=$catmodel->where($map)->find();
           $con['catid']=$catinfo['catid'];

          // $databasename="qzvideo_weishi";

        $weishitypemodel=M('qzvideo_weishi');

        $p=getpage($weishitypemodel,$con,10);
        $list=$weishitypemodel->field(true)->where($con)->order('id desc')->select();
        //$weishiinfo=$weishitypemodel->where($con)->order('id desc')->select();
        $this->assign('info',$list);
         $this->page=$p->show();

        $this->assign('catname',$catinfo['catname']);
        $this->display('list');
    }



    public function Change()
    {
        if(empty(session('name')))
        {
            $this->redirect('Index/login',array('cate_id=>2'),0,'请先登录...');
        }else{
            if(empty(I('post.type')))
            {
                $catmodel=M('qzvideo_category');
                $catinfo = $catmodel->select();
                $this->assign('index',$catinfo);

                //通过id获取视频信息
                $id=I('get.id');
                $condition['id']=$id;
                $videomodel=M('qzvideo_weishi');
                $videoinfo=$videomodel->where($condition)->find();
                $this->assign('info',$videoinfo);


                //获取标签数据
                $labmodel=M('qzvideo_lable');
                $labinfo=$labmodel->select();
                $weishenghuo=$weizixun=$weidianying=$weiketang=$weifangtan=$weifenxiang=$shengyadaohang=$sucaiku="";
                //var_dump($labinfo);
                for ($i=0; $i < count($labinfo,0); $i=$i+1) {
                    $lab[$i]['catname']=$labinfo[$i]['catname'];
                    $lab[$i]['labname']=$labinfo[$i]['labname'];

                    switch ($lab[$i]['catname']) {
                        case '微生活':
                            if($lab[$i]['catname']==$videoinfo['lable'])
                                $weishenghuo=$weishenghuo."<option value='".$lab[$i]['labname']."'"."selected".">".$lab[$i]['labname']."</option>";
                            else
                                $weishenghuo=$weishenghuo."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                        case '微资讯':
                            if($lab[$i]['catname']==$videoinfo['lable'])
                                $weizixun=$weizixun."<option value='".$lab[$i]['labname']."'"."selected".">".$lab[$i]['labname']."</option>";
                            else
                                $weizixun=$weizixun."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                        case '微电影':
                            if($lab[$i]['catname']==$videoinfo['lable'])
                                $weidianying=$weidianying."<option value='".$lab[$i]['labname']."'"."selected".">".$lab[$i]['labname']."</option>";
                            else
                                $weidianying=$weidianying."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                        case '微课堂':
                            if($lab[$i]['catname']==$videoinfo['lable'])
                                $weiketang=$weiketang."<option value='".$lab[$i]['labname']."'"."selected".">".$lab[$i]['labname']."</option>";
                            else
                                $weiketang=$weiketang."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                        case '微访谈':
                            if($lab[$i]['catname']==$videoinfo['lable'])
                                $weifangtan=$weifangtan."<option value='".$lab[$i]['labname']."'"."selected".">".$lab[$i]['labname']."</option>";
                            else
                                $weifangtan=$weifangtan."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;

                        case '微分享':
                            if($lab[$i]['catname']==$videoinfo['lable'])
                                $weifenxiang=$weifenxiang."<option value='".$lab[$i]['labname']."'"."selected".">".$lab[$i]['labname']."</option>";
                            else
                                $weifenxiang=$weifenxiang."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                        case '生涯导航':
                            if($lab[$i]['catname']==$videoinfo['lable'])
                                $shengyadaohang=$shengyadaohang."<option value='".$lab[$i]['labname']."'"."selected".">".$lab[$i]['labname']."</option>";
                            else
                                $shengyadaohang=$shengyadaohang."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                        case '素材库':
                            if($lab[$i]['catname']==$videoinfo['lable'])
                                $sucaiku=$sucaiku."<option value='".$lab[$i]['labname']."'"."selected".">".$lab[$i]['labname']."</option>";
                            else
                                $sucaiku=$sucaiku."<option value='".$lab[$i]['labname']."'>".$lab[$i]['labname']."</option>";
                            break;
                    }
                }
                //var_dump($weishenghuo);
                //var_dump($weizixun);
                //复制标签语句
                $this->assign('weizixun',$weizixun);
                $this->assign('weishenghuo',$weishenghuo);
                $this->assign('weidianying',$weidianying);
                $this->assign('weiketang',$weiketang);
                $this->assign('weifangtan',$weifangtan);
                $this->assign('weifenxiang',$weifenxiang);
                $this->assign('shengyadaohang',$shengyadaohang);
                $this->assign('sucaiku',$sucaiku);



                $this->display(change);
            }else
            {
                $id=I('post.id');
                $type= I('post.type');
                //session('video_type', $type);

                $columntypemodel=M('qzvideo_category');
                $condition['catname']=$type;
                $columntype=$columntypemodel->where($condition)->find();


                if(!empty($_FILES['img1']['name']))
                {
                    $url1 = "Public/upload/img/" . $_FILES["img1"]["name"];
                    $bannerurl1 = LOCALHOST."/Public/upload/img/".$_FILES["img1"]["name"];
                    move_uploaded_file($_FILES["img1"]["tmp_name"], "$url1");
                    $data['thumb'] = $bannerurl1;
                }

                if(!empty($_FILES['img2']['name']))
                {
                    $url2= "Public/upload/img/" . $_FILES["img2"]["name"];
                    $bannerurl2= LOCALHOST."/Public/upload/img/".$_FILES["img2"]["name"];
                    move_uploaded_file($_FILES["img2"]["tmp_name"], "$url2");
                    $data['bigpic'] = $bannerurl2;

                }
                if(!empty($_FILES['img3']['name'])) {
                    $url3 = "Public/upload/img/" . $_FILES["img3"]["name"];
                    $img3_url = LOCALHOST."/Public/upload/img/" . $_FILES["img3"]["name"];
                    move_uploaded_file($_FILES["img3"]["tmp_name"], "$url3");
                    $data['top']=$img3_url;
                }

                if(!empty($_FILES['img4']['name'])) {
                    $url4 = "Public/upload/img/" . $_FILES["img4"]["name"];
                    $img4_url = LOCALHOST."/Public/upload/img/" . $_FILES["img4"]["name"];
                    move_uploaded_file($_FILES["img4"]["tmp_name"], "$url4");
                    $data['authorthum']=$img4_url;
                }

                $data['title']=I('post.title');
                $data['keywords']=I('post.keywords');
                $data['director'] =I('post.director');
                $data['performer']=I('post.performer');
                $data['content']=I('post.content');
                $data['description']=I('description');
                $data['inputtime']=time();
                $data['teamdes']=I('post.teamdes');
                $data['director']=I('post.director');
                $data['guest']=I('guest');
               // $data['view_number']='0';
                $data['catid']=$columntype['catid'];
               // session('video_type',$columntype['letter']);
                if (!empty(I('post.inputtime')))
                {
                    $data['inputtime']=I('post.inputtime');
                }
                $data['lable']=I('post.lable');
                //  $data['video_url']=$video;
                if(!empty(I('post.up')))
                {
                    $data['up']=1;
                }

                $data['url']=I('post.name');



                /*$databasename="qzvideo_weishi";
                //$video=M('qzvideo_weishi');
                //$videoresult=$video->relation(true)->add($data);
                //add_info($databasename,$data);


                if (change_info($databasename,$id,$data)) {
                    $hitmodel=M('qzvideo_hits');
                    $condition['videoid']=$id;
                    $con['catid']=$data['catid'];
                    $con['title']=$data['title'];
                    $hitmodel->where($condition)->save($con);
                 //var_dump($data);
                    $this->assign("jumpUrl",U('Video/Showlist',array('type'=>$type)))->success('修改内容成功');
                } else {
                    $this->error('内容发布失败，请重试');
                }*/


                //采用关联模型使存放点击量和存放视频关键字的表动态更新
                $data['hits']=array('videotitle'=>$data['title'],'catid'=>$data['catid'],'updatetime'=>date('y-m-d'));
                $weishimodel=D("Weishi");
                $data['keyword'] = array('keydata' => $data['title'].' '.$columntype['catname'].' '.$data['lable'].' '.$data['keywords'],'creattime'=>date('Y-m-d'));
                $con['id']=$id;
                //通过获取到的数据更新三张表中的数据
                $result=$weishimodel->relation(true)->where($con)->save($data);
                if($result)
                {
                    $this->assign("jumpUrl",U('Video/Showlist',array('type'=>$type)))->success('修改内容成功');
                } else {
                    $this->error('内容发布失败，请重试');
                }

            }

        }
    }

    public function Del()
    {
        $id=I('get.id');
        $catid=I('get.catid');
        //根据获取到的栏目id在数据表中查询得到相应栏目信息
        $condition['catid']=$catid;
        $catmodel=M('qzvideo_category');
        $catinfo=$catmodel->where($condition)->find();

        //删除物理位置上得图片，视频文件
        // var_dump($userid);
        $condition['id']= $id;
        $delmodel=M('qzvideo_weishi');
        $info=$delmodel->where($condition)->find();
        //删除物理图片文件
        $thumb=basename($info['thumb']);
        unlink('D:/phpStudy/WWW/qzvs/Public/upload/img/'.$thumb);
        $bigpic=basename($info['bigpic']);
        unlink('D:/phpStudy/WWW/qzvs/Public/upload/img/'.$bigpic);
        $top=basename($info['top']);
        unlink('D:/phpStudy/WWW/qzvs/Public/upload/img/'.$top);
        $authorthum=basename($info['authorthum']);
        unlink('D:/phpStudy/WWW/qzvs/Public/upload/img/'.$authorthum);

        /*if($delmodel->where($condition)->delete())
        {
            //删除点击量数据表中信息
            $con['videoid']=$condition['id'];
            $hitmodel=M('qzvideo_hits');
            if ($hitmodel->where($con)->delete()) {
             $this->assign("jumpUrl",U('Video/Showlist',array('type'=>$catinfo['letter'])))->success('已删除');
            }
           
        }else
        {
            $this->error('删除视频失败，请重试');
        }*/

        $weishimodel=D('Weishi');
        $result=$weishimodel->relation(true)->where($condition)->delete();
        if($result)
        {
            $this->assign("jumpUrl",U('Video/Showlist',array('type'=>$catinfo['letter'])))->success('已删除');
        }else
        {
            $this->error('删除视频失败，请重试');
        }

    }

    public function search(){
        $key=I('post.key');//获取用户输入的关键字
        $catname=I('post.catname');//获取当前栏目名称
        $searchmodel=M('qzvideo_weishi');//定义查询数据表
        //进行组合查询，组合查询语句
        $where['title'] = array('like','%'.$key.'%');
        $where['catid'] = array('like','%'.$key.'%');
        $where['_logic']='or';
        $map['_complex']=$where;

        //根据获取到的栏目名称在数据表里查询得到相应的栏目id
        $catmodel=M('qzvideo_category');
        $con['catname']=$catname;
        $catinfo=$catmodel->where($con)->find();
        
        $map['catid']=$catinfo['catid'];

         //进行组合查询，组合查询语句
        $where['title'] = array('like','%'.$key.'%');
        $where['username'] = array('like','%'.$key.'%');
        $where['_logic']='or';
        $map['_complex']=$where;
        
        //分页查询显示数据
        $p=getpage($searchmodel,$map,1);
        $list=$searchmodel->field(true)->where($map)->order('id desc')->select();
         $this->list=$list;
        $this->page=$p->show();
        
        $this->assign('info',$list);
       
        $this->assign('catname',$catname);
        //$map['labname|catname']=$key;
        //$info=$searchmodel->where($where)->order('lableid desc')->select();
        //$this->assign('labinfo',$info);
        //var_dump($catname);
     $this->display('list');
    }


}
