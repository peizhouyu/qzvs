<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/10
 * Time: 20:34
 */
namespace Home\Controller;
use  Think\Controller;

class BannerController extends  Controller
{
    public function Showlist()
    {
        $bannermodel=M('banner');
       // $bannerinfo=$bannermodel->order('slide_order desc')->select();
       // $this->assign('info',$bannerinfo);
       // $this->display('list');
       $condition=NULL;
       $p=getpage($bannermodel,$condition,10);
        $list=$bannermodel->field(true)->where($condition)->order('slide_order desc')->select();
        $this->list=$list;
        $this->page=$p->show();

        //$admin=$adminmodel->order('userid desc')->select();
        //$this->assign('info',$admin);
        //
        $count=$bannermodel->where($condition)->Count();
        $this->assign('count',$count);
        $this->assign('info',$list);
        $this->display('list');
    }

    public function Add()
    {
       if(empty(I('post.title')))
       {
            $this->display('add');
       }else
       {
           $url1 = "Public/upload/banner/" . $_FILES["img1"]["name"];
           $banner_img1 =LOCALHOST."/Public/upload/banner/".$_FILES["img1"]["name"];
           move_uploaded_file($_FILES["img1"]["tmp_name"],"$url1");

           $url2 = "Public/upload/banner/" . $_FILES["img2"]["name"];
           $banner_img2 =LOCALHOST."/Public/upload/banner/".$_FILES["img2"]["name"];
           move_uploaded_file($_FILES["img2"]["tmp_name"],"$url2");

           $data['slide_title'] = I('post.title');
           $data['slide_subtitle'] = I('post.subtitle');
           $data['slide_img'] = $banner_img1;
           $data['slide_smimg']=$banner_img2;

           $data['slide_dump'] = I('post.jumpurl');
           $data['slide_order'] = I('post.number');
           $data['slide_time'] = date('y-m-d h:i:s',time());
           $data['if_valid']="无效";
           $data['click']=I('post.click');
           //var_dump($data);

          $databasename="banner";
           if (add_info($databasename, $data) == true) {
               $this->success('幻灯添加成功', 'Showlist');
           } else {
               $this->error('添加失败，请重试');
           }

       }

    }

    public function Change()
    {
        $slide_id=I('get.id');
        if(empty(I('post.title')))
        {
            $condition['slide_id']=$slide_id;
            $bannermodel=M('banner');
            $bannerinfo=$bannermodel->where($condition)->find();
            $this->assign('info',$bannerinfo);
            $this->display('change');
        }else{
            if(!empty($_FILES['img1']['name']))
            {
                $url1 = "Public/upload/banner/" . $_FILES["img1"]["name"];
                $bannerurl1 = LOCALHOST."/Public/upload/banner/".$_FILES["img1"]["name"];
                move_uploaded_file($_FILES["img1"]["tmp_name"], "$url1");
                $data['slide_img'] = $bannerurl1;
            }
            if(!empty($_FILES['img2']['name']))
            {
                $url2 = "Public/upload/banner/" . $_FILES["img2"]["name"];
                $bannerurl2 = LOCALHOST."/Public/upload/banner/".$_FILES["img2"]["name"];
                move_uploaded_file($_FILES["img2"]["tmp_name"], "$url2");
                $data['slide_smimg'] = $bannerurl2;
            }
            $data['slide_title'] = I('post.title');
            $data['slide_subtitle'] = I('post.subtitle');

            $data['slide_dump'] = I('post.jumpurl');
            $data['slide_order'] = I('post.number');
            $data['slide_time'] = date('y-m-d h:i:s',time());
            $data['click'] = I('post.click');
            $changemodel=M('banner');
            $con['slide_id']= I('post.slide_id');
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

    public function Del()
    {
     //echo "<script>if(confirm('是否确认删除？')) {</script>";
        $slide_id=I('get.id');
        // var_dump($userid);
        $condition['slide_id']=$slide_id;
        $delmodel=M('banner');
        $slideinfo=$delmodel->where($condition)->find();
        $slide_url=basename($slideinfo['slide_img']);
        $slide_sminfo=basename($slideinfo['slide_smimg']);
        unlink('D:/phpStudy/WWW/qzvs/Public/upload/banner/'.$slide_url);
        unlink('D:/phpStudy/WWW/qzvs/Public/upload/banner/'.$slide_sminfo);
        if($delmodel->where($condition)->delete())
        {
            $this->assign("jumpUrl",U('Banner/Showlist'))->success('已删除');
        }else
        {
            $this->error('删除幻灯失败，请重试');
        }
   //   echo "<script>}</script>";
    }

    public function check()
    {
        $slide_id = I('get.id');
        $bannerModel = M('banner');
        $condition['slide_id'] = $slide_id;
        $bannerInfo = $bannerModel->where($condition)->find();
        $if_valid = $bannerInfo["if_valid"];
        if($if_valid=="有效"){
            $data['if_valid'] = "无效";
        }else{
            $data['if_valid'] = "有效";
        }
       // $changemodel=M('banner');
       // $con['slide_id']= I('post.slide_id');

        //var_dump($condition);
        if($bannerModel->where($condition)->save($data))
        {
            $this->success('幻灯状态设置成功');
        }else{
            //var_dump($data);
            $this->error('幻灯状态设置失败！请重试');
        }


    }


  public function search(){
        $key=I('post.key');
        $searchmodel=M('banner');
        $where['slide_title'] = array('like','%'.$key.'%');



        $p=getpage($searchmodel,$where,8);
        $list=$searchmodel->field(true)->where($where)->order('slide_id desc')->select();
         $this->list=$list;
        $this->page=$p->show();
       
        $this->assign('info',$list);
        
        //$map['labname|catname']=$key;
        //$info=$searchmodel->where($where)->order('lableid desc')->select();
        //$this->assign('labinfo',$info);
        //var_dump($where);
        $this->display('list');
    }
}
