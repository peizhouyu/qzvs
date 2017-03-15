<?php
/**
 * Created by PhpStorm.
 * User: 裴周宇
 * Date: 2016/4/30 0030
 * Time: 18:23
 */
    $con = mysql_connect("localhost","root","root");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db('qzvs',$con);
    mysql_query("set names 'utf-8'");
