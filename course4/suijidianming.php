<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/9
 * Time: 14:15
 */
//  mt_rand()  生成一个随机的整数
$arr = array('丁文达','王悦','王莉','徐咪笛','胡学梅');
//var_dump($arr);
//$suiji = mt_rand(0,4);
$suiji = mt_rand(0,4);
echo '你就是今天上帝选中的人：'.$arr[$suiji];
?>

