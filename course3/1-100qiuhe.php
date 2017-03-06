<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 9:09
 */
//求出1-100的和
    $qiuhe = 0;
for ( $i  =  1 ;  $i  <=  100 ;  $i=$i+1){
    echo $i." " ;
    $qiuhe = $qiuhe + $i;
}

echo '<hr/>';
    echo '累计和为：'.$qiuhe.'<br/>';

