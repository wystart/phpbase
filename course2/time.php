<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/23
 * Time: 16:04
 */
//输出时间戳
echo time();
echo '<hr/>';

echo date('Y-m-d H:i:s');
echo '<br/>';
echo date('Y-m-d H:i:s','1487159216');
/*
year
month
day
hour
minute
second
*/
echo '<hr/>';
$a = localtime();
echo '今天是本月的第：'.$a[3];
echo '<hr/>';
$year_count = $a[7]+1;
echo '今天是本年的第：'.$year_count;
/*$a = localtime();
$y_d = $a[7]+1;
echo '今天是这个月的第'.$a[3].'天';
echo '<hr/>';
echo '今天是这2017年的第'.$y_d.'天';
echo '<hr/>';
echo '今天是星期：'.$a[6];*/
