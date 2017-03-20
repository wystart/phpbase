<?php
/**
 * Created by PhpStorm.
 * User: wys
 * Date: 2017/3/9
 * Time: 14:05
 */

//数据的定义方法 一
//方式一
$arr = array('小白','小明','小李子');


echo $arr['2'];
echo '<hr/>';

//关联数组  ，数组定义的第二种方式
//key => value
$arr2 = array(
    'li' => '小李子',
    'ming' => '姚明',
    'x' =>'X战警的前世今生'
);

//var_dump($arr2);
echo $arr2['ming'];