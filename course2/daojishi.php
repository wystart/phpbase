<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14
 * Time: 10:16
 */
$day_total = 365;
echo '一年是365天';
echo '<br/>';
$a = localtime();
$day_remain = $day_total - $a[7]-1;
echo '离本年结束还有：'.$day_remain;