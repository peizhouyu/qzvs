<?php
/**
 * Created by PhpStorm.
 * User: 夏嘻嘻
 * Date: 2016/8/15
 * Time: 12:26
 */
namespace Home\Controller;
use Think\Controller;

class VideoFileController extends Controller{
    public function Addvideo()
    {
        $this->display('video');
    }


    //把上传视频的文件名称上传到数据库
    public function filewrite($name = null,$cryptname = null){
        //  $name=I('get.name');
        //$cryptname=I('get.cryptname');
        $file = M('qzvideo_file');
        $data['filename'] = $name;
        $data['cryptname']=$cryptname;
        $data['createtime']=date('Y-m-d');
        $file -> add($data);
    }

    public function fileread()
    {
        $dir='D:/xampp/htdocs/qzvs/qzvs_video/tokens/';
        $files=scanMyDir($dir);
        var_dump($files);
    }
    public function VideoFileList()
    {
        $filemodel=M('qzvideo_file');
        $condition=null;
        $p=getpage($filemodel,$condition,20);
        $fileinfo=$filemodel->order('id desc')->select();
        $this->list=$fileinfo;
        $this->page=$p->show();
        $this->assign('fileinfo',$fileinfo);
        $this->display('videofile');

    }
    public function VideoFileDel()
    {
        $filename=I('get.filename');
        $id=I('get.id');

        $filePath="D:/xampp/htdocs/qzvs/qzvs_video/files/".$filename;
        unlink($filePath);

        $delmodel=M('qzvideo_file');
        $condition['id']=$id;
        $infodel=$delmodel->where($condition)->delete();

        if($infodel)
        {
            $this->assign("jumpUrl",U('VideoFile/VideoFileList'))->success('已删除');
        }else{
            $this->error('删除失败,请重试');
        }
    }

    public function searchurl()
    {
        $keyword=I('post.key');
        $this->redirect("{:U('VideoFile/searchfile',array('key'=>$keyword))}",array('cat_id'=>2),0,'搜索中...');
    }


    public function searchfile()
    {
        $keyword=I('get.key');
        $where['filename']=array('like','%'.$keyword.'%');
        $where['cryptname']=array('like','%'.$keyword.'%');
        $where['_logic']='or';
        $map=$where;
        $searchmodel=M('qzvideo_file');
        $p=getpage($searchmodel,$map,10);
        $searchinfo=$searchmodel->where($map)->select();
        $searchcount=$searchmodel->where($map)->count();
       // var_dump($p->parameter);
        $this->page=$p->show();
        $this->assign('count',$searchcount);
        $this->assign('fileinfo',$searchinfo);
       $this->display('videofile');
    }

}
