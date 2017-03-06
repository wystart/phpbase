<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 10:25
 */
for ($i =1 ; $i<=100; $i++){

    //判断
    if($i<10){
        echo '0'.$i.' ';
    }else{
        if($i > 90){
            echo '大数：'.$i." ";
        }else{
        echo $i. ' ';
        }
    }

    //判断
    if($i%5 == 0){
        echo '<br/>';
    }
}