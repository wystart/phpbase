<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 9:38
 */

//  %求余操作符
echo '第一种方法</br>';
$qiuhe=0;
for ( $i  = 0 ;  $i  <=  100 ;  $i=$i+2){
        $qiuhe=$qiuhe+$i;
}
echo "</br>";
echo $qiuhe." ";
echo '<hr/>';
echo '第二种方法</br>';
$qiuhe=0;
for ( $i  = 1 ;  $i  <=  100 ;  $i++){
    if($i % 2 == 0)
    {
        $qiuhe=$qiuhe+$i;
    }
}
echo "</br>";
echo $qiuhe." ";
