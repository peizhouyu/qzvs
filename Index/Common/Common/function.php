<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/21
 * Time: 15:39
 */
//验证时间是否是一个月
 function BoolMonth($start_time,$end_time){
    $one = getMonthEndDay($start_time);//获取第一个时间 月份和最后一个日期
    $two = getMonthEndDay($end_time);  //获取第二个时间 月份和最后一个日期
    $bool_type = false;
    if($one['y']==$two['y'] && $one['m'] == $two['m']){//判断第一,二时间的月份是否一致

            $bool_type = true;

    }
    return $bool_type;
}
//获取 月份,月的最后一天
 function getMonthEndDay($data){
    $year =  date("Y",strtotime($data));
    $lastday =  date("t",strtotime($data));//获取月份的最后一天
    $month = date("n",strtotime($data));//获取是几月
    $day = date("j",strtotime($data)); //获取日期
    return array('m'=>$month,'t'=>intval($lastday),'d'=>intval($day),'y'=>$year);
}
//判断是否是一周
 function BoolWork($start,$end){
    $bool_type =false;
    $begindate = strtotime($start);
    $enddate = strtotime($end);
     $one = getMonthEndDay($start);//获取第一个时间 月份和最后一个日期
     $two = getMonthEndDay($end);  //获取第二个时间 月份和最后一个日期
     $s=date('W',$begindate);
     $e=date("W",$enddate);

    if($one['y']==$two['y'] &&$s==$e){
        $bool_type = true;
    }
    return $bool_type;
}




function change_info($db_name,$id,$data){
    $db_info = M("$db_name");
    $condition['id']=$id;
    $db_info->where($condition)->save($data);
    return true;
}


//分页调用函数
function getpage(&$m,$where,$pagesize=1){
    $m1=clone $m;//浅复制一个模型
    $count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
    $m=$m1;//为保持在为定的连惯操作，浅复制一个模型
    $p=new Think\Page($count,$pagesize);
    $p->lastSuffix=false;
    $p->setConfig('header','<a class="total">%TOTAL_ROW%条</a>');
    $p->setConfig('prev','上一页');
    $p->setConfig('first','首页');
    $p->setConfig('last','尾页');
    $p->setConfig('theme',' <li>%HEADER%</li> <li>%FIRST%</li><li>%UP_PAGE%</li> %LINK_PAGE% <li>%DOWN_PAGE%</li><li>%END%</li> ');
    $p->setConfig('next','下一页');


    $p->parameter=I('get.');

    $m->limit($p->firstRow,$p->listRows);

    return $p;
}

/**
2  * 获取客户端IP地址
3  * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
4  * @return mixed
5  */
/*function get_client_ip($type = 0) {
   $type       =  $type ? 1 : 0;
   static $ip  =   NULL;
     if ($ip !== NULL) return $ip[$type];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
          $arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
       $pos    =   array_search('unknown',$arr);
        if(false !== $pos) unset($arr[$pos]);
        $ip     =   trim($arr[0]);
     }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip     =   $_SERVER['HTTP_CLIENT_IP'];
    }elseif (isset($_SERVER['REMOTE_ADDR'])) {
                $ip     =   $_SERVER['REMOTE_ADDR'];
     }
     // IP地址合法验证
    $long = sprintf("%u",ip2long($ip));
    $ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
     return $ip[$type];
 }*/