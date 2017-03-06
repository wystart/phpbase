<?php
/**
 * Created by PhpStorm.
 * User: wys
 * Date: 2017/3/2
 * Time: 16:28
 */
//4、输出1~100 所有被5整数的数字。（if)
for ($i = 1; $i<=100; $i++ ){
    if($i%5 == 0){
        echo $i." ";
    }
}