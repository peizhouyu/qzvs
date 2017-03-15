<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/9
 * Time: 10:47
 */
namespace Home\Controller;
use Think\Controller;

 class CategoryController extends Controller
 {
     public function Showlist()
     {
         $catmodel=M('qzvideo_category');
        // $catinfo=$catmodel->order('catid desc')->select();
        // $this->assign('info',$catinfo);
         //$this->display('list');
         $condition=NULL;
//分页获取数据
         $p=getpage($catmodel,$condition,10);
        $list=$catmodel->field(true)->where($condition)->order('catid desc')->select();
        $this->list=$list;
        $this->page=$p->show();

        //$admin=$adminmodel->order('userid desc')->select();
        //$this->assign('info',$admin);
        //
        $count=$catmodel->where($condition)->Count();
        $this->assign('count',$count);
        $this->assign('info',$list);
        $this->display('list');

     }


     public function Add()
     {
         if(empty(I('post.catname')))
         {
             $this->display('add');
         }else{

             $url = "Public/upload/category/" . $_FILES["img"]["name"];
             $caturl = LOCALHOST."/Public/upload/category/".$_FILES["img"]["name"];
             move_uploaded_file($_FILES["img"]["tmp_name"], "$url");

             $data['catname']=I('post.catname');
             $data['letter']=I('post.catdir');
             $data['image']=$caturl;
             $data['description']=I('post.description');

             $databasename="qzvideo_category";
             if (add_info($databasename, $data) == true) {
                 $this->success('栏目添加成功', 'Showlist');
             } else {
                 $this->error('栏目添加失败，请重试');
             }
         }
     }

     public function Change()
     {
         $catid=I('get.id');
        // var_dump($catid);
         if(empty(I('post.catname')))
         {
            $condition['catid']=$catid;
             $catmodel=M('qzvideo_category');
             $catinfo=$catmodel->where($condition)->find();
             $this->assign('info',$catinfo);
            // var_dump($catinfo);
             $this->display('change');
         }else
         {
             if(!empty($_FILES['img']['name']))
             {
                 $url = "Public/upload/category/" . $_FILES["img"]["name"];
                 $caturl = LOCALHOST."/Public/upload/category/".$_FILES["img"]["name"];
                 move_uploaded_file($_FILES["img"]["tmp_name"], "$url");
                 $data['image']=$caturl;
             }
             $data['catname']=I('post.catname');
             $data['letter'] =I('pot.catdir');
             $data['description']=I('post.description');

             $changinfo=M('qzvideo_category');
             $condition['catid']=I('post.catid');
             if($changinfo->where($condition)->save($data))
             {
                 $this->success('修改栏目信息成功','Showlist');
             }else{
                 $this->error('修改栏目信息失败，请重试');
             }
         }
     }

     public function  Del()
     {
         $catid=I('get.id');
         $delmodel=M('qzvideo_category');

         $condition['catid']=$catid;
         if($delmodel->where($condition)->delete())
         {
             $this->assign("jumpUrl",U('Category/Showlist'))->success('已删除');
         }else
         {
             $this->error('删除栏目失败，请重试');
         }

     }


 }