<?php
namespace Home\Controller;
use Think\Controller;

class LableController extends Controller
{
    public function Showlist()
    {
        //echo "string";
        //获取栏目
        $catmodel=M('qzvideo_category');
        $catinfo=$catmodel->select();
        $this->assign('catinfo',$catinfo);

        //获取标签数据
        $labmodel=M('qzvideo_lable');
        $p=getpage($labmodel,$condition,10);
        $list=$labmodel->field(true)->where($condition)->order('lableid desc')->select();
         //$this->list=$list;
        $this->page=$p->show();

        $i=0;
        //输出汉字
        for ($i=0;$i<count($list,0);) {
            if($list[$i]['uplm']==0){
                $list[$i]['uplm']="推荐首页栏目标签";

            }else{
                $list[$i]['uplm']="取消首页栏目标签";
            }
            $i=$i+1;
        }
         for ($i=0;$i<count($list,0);) {
            if($list[$i]['updh']==0){
                $list[$i]['updh']="推荐导航栏目标签";

            }else{
                $list[$i]['updh']="取消导航栏目标签";
            }
            $i=$i+1;
        }
        //var_dump($list);
        $this->assign('labinfo',$list);
        //$labinfo=$labmodel->select();
        //$this->assign('labinfo',$labinfo);
        $this->display('list');
    }

    public function Add()
    {
        if (empty(I('post.name'))) {
           $this->error('添加标签失败');
        }else{
            //获取数据
            $data['labname']=I('post.name');
            $data['catname']=I('post.catname');

            //添加信息到数据库
            $databasename="qzvideo_lable";
            if(add_info($databasename, $data))
            {
                $this->success('添加标签成功','Showlist');
            }else
            {
                $this->error('添加标签成功');
            }
        }
    }
    public function search(){
        $key=I('post.key');
        $searchmodel=M('qzvideo_lable');
        $where['labname'] = array('like','%'.$key.'%');
        $where['catname'] = array('like','%'.$key.'%');
        $where['_logic']='or';
        $map['_complex']=$where;



        $p=getpage($searchmodel,$map,10);
        $list=$searchmodel->field(true)->where($map)->order('lableid desc')->select();
         $this->list=$list;
        $this->page=$p->show();
        $i=0;
        //输出汉字
        for ($i=0;$i<count($list,0);) {
            if($list[$i]['uplm']==0){
                $list[$i]['uplm']="推荐首页栏目标签";

            }else{
                $list[$i]['uplm']="取消首页栏目标签";
            }
            $i=$i+1;
        }
         for ($i=0;$i<count($list,0);) {
            if($list[$i]['updh']==0){
                $list[$i]['updh']="推荐导航栏目标签";

            }else{
                $list[$i]['updh']="取消导航栏目标签";
            }
            $i=$i+1;
        }
        $this->assign('labinfo',$list);
        //获取栏目       
        $catmodel=M('qzvideo_category');
        $catinfo=$catmodel->select();
        $this->assign('catinfo',$catinfo);

        //$map['labname|catname']=$key;
        //$info=$searchmodel->where($where)->order('lableid desc')->select();
        //$this->assign('labinfo',$info);
        //var_dump($where);
        $this->display('list');
    }
    //推荐首页栏目标签
    public function uplm()
    {
        $lableid=I('get.id');
        $condition['lableid']=$lableid;

        $upmodel=M('qzvideo_lable');

        //从数据库获取uplm的值
        $upinfo=$upmodel->where($condition)->find();
        //判断值并赋值
        if ($upinfo['uplm']==0) {
            $data['uplm']=1;            
        }else{
            $data['uplm']=0;
        }
       //修改数据表中uplm的值
        if ($upmodel->where($condition)->save($data)) {
           // var_dump($data);
            //var_dump($condition);
            //$this->success('修改管理员信息成功！','Showlist');
            $this->redirect('Lable/Showlist', array('cate_id' => 2), 1, '设置成功');
        }else
        {
            $this->error('设置失败');
        }
    }
    //推荐导航标签
    public function updh()
    {
        $lableid=I('get.id');
        $condition['lableid']=$lableid;

        $upmodel=M('qzvideo_lable');


        //从数据库获取uplm的值
        $upinfo=$upmodel->where($condition)->find();
        //判断值并赋值
        if ($upinfo['updh']==0) {
            $data['updh']=1;            
        }else{
            $data['updh']=0;
        }
       //修改数据表中uplm的值
      
    
        if ($upmodel->where($condition)->save($data)) {
            $this->redirect('Lable/Showlist', array('cate_id' => 2), 1, '设置成功');
        
        }else
        {
            $this->error('设置失败');
        }
    }


    public function Del()
    {
        $id=I('get.id');
        $delmodel=M('qzvideo_lable');
        $condition['lableid']=$id;
        if ($delmodel->where($condition)->delete()) {
          $this->assign("jumpUrl",U('Lable/Showlist'))->success('已删除');
        }else
        {
            $this->error('删除失败');
        }
    }

    public function change()
    {
        if(empty(I('post.name')))
        {
           //获取栏目
            $catmodel=M('qzvideo_category');
            $catinfo=$catmodel->select();
            $this->assign('catinfo',$catinfo); 
            //获取需要标签信息
            $lableid=I('get.id');
            $condition['lableid']=$lableid;
            $labmodel=M('qzvideo_lable');
            $lableinfo=$labmodel->where($condition)->find();
            $this->assign('labinfo',$lableinfo);
            $this->display(change);
        }else
        {
            $condition['lableid']=I('post.lableid');
            $data['labname']=I('post.name');
            $data['catname']=I('post.catname');
            $labmodel=M('qzvideo_lable');
            $result=$labmodel->where($condition)->save($data);
            if($result)
            {
                $this->success('修改标签信息成功！','Showlist');
            }else{
                $this->error('修改标签信息失败！');
            //var_dump($condition);
            //var_dump($data);
            }
        }
    }
}