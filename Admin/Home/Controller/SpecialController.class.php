<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/11
 * Time: 16:14
 */

namespace Home\Controller;
use Think\Controller;

class SpecialController extends Controller
{
    public function Showlist()
    {
        $specialmodel=M('qzvideo_special');
        //$specialinfo=$specialmodel->order('id desc')->select();
        //$this->assign('info',$specialinfo);
        //$this->display('list');
        $condition=NULL;
//分页获取数据
         $p=getpage($specialmodel,$condition,10);
        $list=$specialmodel->field(true)->where($condition)->order('id desc')->select();
        $this->list=$list;
        $this->page=$p->show();

        //$admin=$adminmodel->order('userid desc')->select();
        //$this->assign('info',$admin);
        //
        $count=$specialmodel->where($condition)->Count();
        $this->assign('count',$count);
        $this->assign('info',$list);
        $this->display('list');
    }
    public function Add()
    {
        if(empty(I('post.title')))
        {
            //获取栏目信息
            $catmodel=M('qzvideo_category');
            $catinfo=$catmodel->select();
            //var_dump($catinfo);
            $this->assign('catinfo',$catinfo);
            $this->display('add');
        }else
        {
            $url1 = "Public/upload/special/" . $_FILES["img1"]["name"];
            $banner =LOCALHOST."/Public/upload/special/".$_FILES["img1"]["name"];
            move_uploaded_file($_FILES["img1"]["tmp_name"],"$url1");

            $url2 = "Public/upload/special/" . $_FILES["img2"]["name"];
            $thumb =LOCALHOST."/Public/upload/special/".$_FILES["img2"]["name"];
            move_uploaded_file($_FILES["img2"]["tmp_name"],"$url2");

            $usermodel=M('qzvideo_admin');
            $condition['username']=session('name');
            $userinfo=$usermodel->where($condition)->find();

            $data['title']=I('post.title');
            $data['catname']=I('post.category');
            $data['description']=I('post.description');
            $data['thumb']=$thumb;
            $data['banner']=$banner;
            $data['createtime']=date('y-m-d h:i:s',time());
            $data['username']=session('name');
            $data['userid']=$userinfo['userid'];

            //var_dump($data);
            $databasename="qzvideo_special";
            if (add_info($databasename, $data) == true) {
                $this->success('专题添加成功', 'Showlist');
            } else {
                $this->error('专题添加失败，请重试');
            }

        }

    }


    public  function  SpecialChange()
    {
        $specialid=I('get.id');
        if(empty(I('post.title')))
        {
            $condition['id']=$specialid;
            $bannermodel=M('qzvideo_special');
            $bannerinfo=$bannermodel->where($condition)->find();
            $this->assign('info',$bannerinfo);

            $catmodel=M('qzvideo_category');
            $catinfo=$catmodel->select();
            //var_dump($catinfo);
            $this->assign('catinfo',$catinfo);

            $this->display('change');
        }else{
            //修改专题图片
            if(!empty($_FILES['img1']['name']))
            {
                $url1 = "Public/upload/special/" . $_FILES["img1"]["name"];
                $banner =LOCALHOST."/Public/upload/special/".$_FILES["img1"]["name"];
                move_uploaded_file($_FILES["img1"]["tmp_name"],"$url1");
                $data['banner'] = $banner;
            }
            if(!empty($_FILES['img2']['name']))
            {
                $url2 = "Public/upload/special/" . $_FILES["img2"]["name"];
                $thumb =LOCALHOST."/Public/upload/special/".$_FILES["img2"]["name"];
                move_uploaded_file($_FILES["img2"]["tmp_name"],"$url2");
                $data['thumb'] = $thumb;
            }

            $usermodel=M('qzvideo_admin');
            $condition['username']=session('name');
            $userinfo=$usermodel->where($condition)->find();

            $data['title']=I('post.title');
            $data['catname']=I('post.category');
            $data['description']=I('post.description');
            $data['createtime']=date('y-m-d h:i:s',time());

            $changemodel=M('qzvideo_special');
            $con['id']= I('post.id');
            //var_dump($con);


            if($changemodel->where($con)->save($data))
            {
                $this->success('修改信息成功！','Showlist');
            }else {
                //var_dump($data);
                $this->error('修改信息失败！请重试');
            }
        }
    }
    public function SpecialDel()
    {

        $id=I('get.id');
        // var_dump($userid);
        $condition['id']=$id;
        $delmodel=M('qzvideo_special');
       $delinfo=$delmodel->where($condition)->find();
       //删除专题文件夹中物理图片
        $thumb=basename($delinfo['thumb']);
        $bannner=basename($delinfo['banner']);
        unlink('D:/phpStudy/WWW/qzvs/Public/upload/special/'.$thumb);
        unlink('D:/phpStudy/WWW/qzvs/Public/upload/special/'.$banner);

        if($delmodel->where($condition)->delete())
        {
            $this->assign("jumpUrl",U('Special/Showlist'))->success('已删除');
        }else
        {
            $this->error('删除专题失败，请重试');
        }
    }


    public function videolist()
    {
        //查找当前专题id
        $specialid=I('get.specialid');
        $con['id']=$specialid;
        $condition['specialid']=$specialid;
        
        //获取当前专题信息
        $specialmodel=M('qzvideo_special');
        $specialinfo=$specialmodel->where($con)->find();
        $this->assign('specialinfo',$specialinfo);

        //在视频所在表查找相应专题id的视频
        $videomodel=M('qzvideo_weishi');
        //$videoinfo=$videomodel->where($condition)->order('id desc')->select();
        //$this->assign('info',$videoinfo);
        //
//分页获取数据
         $p=getpage($videomodel,$condition,10);
        $list=$videomodel->field(true)->where($condition)->order('id desc')->select();
        $this->list=$list;
        $this->page=$p->show();

       
        $count=$videomodel->where($condition)->Count();
        $this->assign('count',$count);
        $this->assign('info',$list);
        //$this->display('list');
        $this->display('videolist');
    }

    public function videodel()
    {
        $id=I('get.id');
        $specialid=I('get.specialid');

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

        $weishimodel=D('Weishi');
        $result=$weishimodel->relation(true)->where($condition)->delete();
        if($result)
        {
            $this->assign("jumpUrl",U('Special/videolist',array('specialid'=>$specialid)))->success('已删除');
        }else
        {
            $this->error('删除视频失败，请重试');
        }

    }


    public function videoadd()
    {
        if(empty(session('name')))
        {
            $this->redirect('Index/login',array('cate_id=>2'),0,'请先登录...');
        }else{
            if(empty(I('post.title')))
            {
                $specialid=I('get.specialid');
                $catmodel=M('qzvideo_category');

                $this->assign('specialid',$specialid);

                //根据获取到的栏目名称获取栏目数据
                $specialtype=I('get.catname');
                $condition['catname']=$specialtype;
                $catinfo = $catmodel->where($condition)->find();

                /*//根据获取到的栏目名称获取相应的标签数据*/
                $labmodel=M('qzvideo_lable');
                $labinfo=$labmodel->where($condition)->select();
                $this->assign('labinfo',$labinfo);

               /* 获取最近上传的8个视频*/
                $filemodel=M('qzvideo_file');
                $time=date('Y-m-d',time());
                $where['createtime']=array('eq',$time);
                $fileinfo=$filemodel->limit(8)->where($where)->order('id desc')->select();
                $this->assign('fileinfo',$fileinfo);
                /*获取视频文件名称完成*/


                $this->assign('catid',$catinfo['catid']);
                $this->display(videoadd);
            }else
            {
                $specialid=I('post.specialid');
               // $type= I('post.type');
                // session('video_type', $type);

               // $columntypemodel=M('qzvideo_category');
               // $condition['catname']=$type;
               // $columntype=$columntypemodel->where($condition)->find();


                //根据获取到的栏目id从数据表取出相应栏目信息
                $catid=I('post.catid');
                $catmodel=M('qzvideo_category');
                $condition['catid']=$catid;
                $catinfo=$catmodel->where($condition)->find();



                //从前端接收数据信息
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

                $data['catid']=I('post.catid');
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
              //  $data['catid']=$columntype['catid'];
                //session('video_type',$columntype['letter']);
                $data['inputtime']=time();
                //  $data['video_url']=$video;
                $data['thumb']=$img1_url;
                $data['bigpic']=$img2_url;
                $data['top']=$img3_url;
                $data['authorthum']=$img4_url;
                $data['username'] = session('name');
                $data['url']=I('post.name');
                $data['specialid']=$specialid;
                $data['lable']=I('post.lable');
                if(!empty(I('post.up')))
                {
                    $data['up']=1;
                }


              /*  $databasename="qzvideo_weishi";
                //$video=M('qzvideo_weishi');
                //$videoresult=$video->relation(true)->add($data);
                //add_info($databasename,$data);


                if (add_info($databasename,$data)) {
                    $infomodel=M('qzvideo_weishi');
                    $condition['title']=$data['title'];
                    $info=$infomodel->where($condition)->find();
                    $databasename2="qzvideo_hits";
                    //$videoid=$info['id']
                    $record['videoid']=$info['id'];
                    $record['catid']=$info['catid'];
                    $record['videotitle']=$info['title'];
                    $racord['updatetime']=date('y-m-d');
                    add_info($databasename2,$record);
                    $this->success('内容发布成功','Showlist');
                    // var_dump($data);
                } else {
                    $this->error('内容发布失败，请重试');
                }*/
                //获取存放在点击量表中的数据
                $data['hits']=array('videotitle'=>$data['title'],'catid'=>$data['catid'],'updatetime'=>date('y-m-d'));
                //实例化关联模型
                $weishimodel=D("Weishi");
                //获取存放在视频对应标签表中的数据
                $data['keyword'] = array('keydata' => $data['title'].' '.$catinfo['catname'].' '.$data['lable'].' '.$data['keywords'],'creattime'=>date('Y-m-d'));
                //把获取的数据存放在对应表中
                $result = $weishimodel->relation(true)->add($data);
                if($result)
                {
                    $this->success('内容发布成功');
                }else {
                    $this->error('内容发布失败，请重试');
                }
            }

        }

    }


    public function videochange()
    {
        if(empty(session('name')))
        {
            $this->redirect('Index/login',array('cate_id=>2'),0,'请先登录...');
        }else{
            if(empty(I('post.title')))
            {
                //根据栏目id获取相应栏目数据
                $catid=I('get.catid');
                $condition['catid']=$catid;
                $catmodel=M('qzvideo_category');
                $catinfo=$catmodel->where($condition)->find();

                //根据获取到的栏目名称获取相应的标签数据
                $labmodel=M('qzvideo_lable');
                $con['catname']=$catinfo['catname'];
                $labinfo=$labmodel->where($con)->select();
                $this->assign('labinfo',$labinfo);

                $id=I('get.id');
                $condition['id']=$id;
                $videomodel=M('qzvideo_weishi');
                $videoinfo=$videomodel->where($condition)->find();
                $this->assign('info',$videoinfo);

                $this->display(videochange);
            }else
            {
                $id=I('post.id');
               // $type= I('post.type');
                $specialid=I('post.specialid');
                // session('video_type', $type);

               // $columntypemodel=M('qzvideo_category');
               // $condition['letter']=$type;
               // $columntype=$columntypemodel->where($condition)->find();

                //根据栏目id获取相应栏目数据
                $catid=I('post.catid');
                $condition['catid']=$catid;
                $catmodel=M('qzvideo_category');
                $catinfo=$catmodel->where($condition)->find();


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

                $data['catid']=I('post.catid');
                $data['title']=I('post.title');
                $data['keywords']=I('post.keywords');
                $data['director'] =I('post.director');
                $data['performer']=I('post.performer');
                $data['content']=I('post.content');
                $data['description']=I('description');
                if (!empty(I('post.inputtime')))
                {
                    $data['inputtime']=I('post.inputtime');
                }
                $data['teamdes']=I('post.teamdes');
                $data['director']=I('post.director');
                $data['guest']=I('guest');
                // $data['view_number']='0';
                //$data['catid']=$columntype['catid'];
                // session('video_type',$columntype['letter']);
                $data['inputtime']=time();
                //  $data['video_url']=$video;

                $data['url']=I('post.name');
                $data['lable']=I('post.lable');
                if(!empty(I('post.up')))
                {
                    $data['up']='1';
                }


               /* $databasename="qzvideo_weishi";
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
                    $this->assign("jumpUrl",U('Special/videolist',array('specialid'=>$specialid)))->success('修改内容成功');
                } else {
                    $this->error('内容发布失败，请重试');
                }*/

                //采用关联模型使存放点击量和存放视频关键字的表动态更新
                $data['hits']=array('videotitle'=>$data['title'],'catid'=>$data['catid'],'updatetime'=>date('y-m-d'));
                $weishimodel=D("Weishi");
                $data['keyword'] = array('keydata' => $data['title'].' '.$catinfo['catname'].' '.$data['lable'].' '.$data['keywords'],'creattime'=>date('Y-m-d'));
                $con['id']=$id;
                //通过获取到的数据更新三张表中的数据
                $result=$weishimodel->relation(true)->where($con)->save($data);
                if($result)
                {
                    $this->assign("jumpUrl",U('Special/videolist',array('specialid'=>$specialid)))->success('修改内容成功');
                } else {
                    $this->error('内容修改失败，请重试');
                }


            }

        }
    }


public function search(){
        $key=I('post.key');
        $searchmodel=M('qzvideo_special');
        $where['title'] = array('like','%'.$key.'%');
        $where['catname'] = array('like','%'.$key.'%');
        $where['_logic']='or';
        $map['_complex']=$where;



        $p=getpage($searchmodel,$map,10);
        $list=$searchmodel->field(true)->where($map)->order('id desc')->select();
         $this->list=$list;
        $this->page=$p->show();
        
        $this->assign('info',$list);
       

        //$map['labname|catname']=$key;
        //$info=$searchmodel->where($where)->order('lableid desc')->select();
        //$this->assign('labinfo',$info);
        //var_dump($where);
        $this->display('list');
    }

    public function videosearch(){
        $key=I('post.key');//获取用户输入的关键字
        $searchmodel=M('qzvideo_weishi');//定义查询数据表
        //进行组合查询，组合查询语句
        $where['title'] = array('like','%'.$key.'%');
        $where['catid'] = array('like','%'.$key.'%');
        $where['_logic']='or';
        $map['_complex']=$where;
        
        
        $map['specialid']=I('post.specialid');

         //进行组合查询，组合查询语句
        $where['title'] = array('like','%'.$key.'%');
        $where['username'] = array('like','%'.$key.'%');
        $where['_logic']='or';
        $map['_complex']=$where;
        
        //分页查询显示数据
        $p=getpage($searchmodel,$map,10);
        $list=$searchmodel->field(true)->where($map)->order('id desc')->select();
         $this->list=$list;
        $this->page=$p->show();
        

        $condition['specialid']=$specialid;
        
        //获取当前专题信息
        $specialmodel=M('qzvideo_special');
        $specialinfo=$specialmodel->where($condition)->find();
        $this->assign('specialinfo',$specialinfo);
        
        $this->assign('info',$list);
       
        //$this->assign('catname',$catname);
        //$map['labname|catname']=$key;
        //$info=$searchmodel->where($where)->order('lableid desc')->select();
        //$this->assign('labinfo',$info);
        //var_dump($catname);
     $this->display('videolist');
    }

}