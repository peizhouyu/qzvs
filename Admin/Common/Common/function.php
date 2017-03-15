<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/3
 * Time: 22:45
 */

function add_info($db_name,$data){
    $build_news = M("$db_name");
    $build_news->add($data);
    return true;
}
function change_info($db_name,$id,$data){
    $db_info = M("$db_name");
    $condition['id']=$id;
    $db_info->where($condition)->save($data);
    return true;
}

function del_info($db_name,$id){
    $db_info = M("$db_name");
    $condition['id']=$id;
    $db_info->where($condition)->delete();
    return true;
}

function select_info($db_name,$condition){
    $db_info = M("$db_name");
    $info = $db_info->where($condition)->select();
    if (!empty($info)) {
        return true;
    }else{
        return false;
    }
}

//分页调用函数
function getpage(&$m,$where,$pagesize=10){
    $m1=clone $m;//浅复制一个模型
    $count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
    $m=$m1;//为保持在为定的连惯操作，浅复制一个模型
    $p=new Think\Page($count,$pagesize);
    $p->lastSuffix=false;
    $p->setConfig('rollPage',4);
    $p->setConfig('header','<li class="rows">共<b>%TOTAL_ROW%</b>条记录  第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev','上一页');
    $p->setConfig('next','下一页');
    $p->setConfig('last','末页');
    $p->setConfig('first','首页');
    $p->setConfig('theme','<li>%FIRST%</li> <li>%UP_PAGE%</li> %LINK_PAGE% <li>%DOWN_PAGE%</li> <li>%END%</li> %HEADER%');
    $p->parameter=I('get.');
    $m->limit($p->firstRow,$p->listRows);
    return $p;
}

//扫描某个文件目录并返回文件名称数组
function scanMyDir($dir){
    $handler = opendir($dir);
    while (($filename = readdir($handler)) !== false) {//务必使用!==，防止目录下出现类似文件名“0”等情况
        if ($filename != "." && $filename != "..") {
            $files[] = $filename ;
        }
    }
    closedir($handler);
    return $files;
}