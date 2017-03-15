<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/6/19
 * Time: 9:54
 */

namespace Home\Model;
use Think\Model;
use Think\Model\RelationModel;

class WeishiModel extends RelationModel{
    protected $tablePrefix='qzvideo_';
    protected $_link=array(
        'keyword'=>array(
            'mapping_type'=>self::HAS_ONE,
            'class_name'=>'qzvideo_keyword',
            'foreign_key'   => 'videoid',
        ),
        'hits'=>array(
            'mapping_type'=>self::HAS_ONE,
            'class_name'=>'qzvideo_hits',
            'foreign_key'=>'videoid',
        )
    );

}