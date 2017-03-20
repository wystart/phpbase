<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/9
 * Time: 16:25
 */

//简单版本扫地人
//$str = "张书平、吴波静、张书翰、朱伟豪、赵哲斌、王倩倩、常盈盈、龚永桂、孙伟、丁开荣、潘孝明、张函黎、张海芳、唐晓庆、任东梅、李毛、吴金华、尹建文、秦朝、徐春生、魏枭、李先斌、张立言、方乾、叶保永、朱军虎、吴义飞、周望军、张华峰、陈涛、康阿磊";
$str = "肖波、徐超、张承胜、殷文驰、汪宏伟、刘坤、柏坤、陆犇、孙远航、王宇晨、刘星宇、刘凯旋、冯振兴、谢大俊、宋磊、范中豪、伍德亮、戴荣城、俞小强、刘金辉、童友春、王浩浩、周亮、陈文豪、张永新、钟博、王子昂、段伦睿、李赏、李冬冬、桑辉、宁传杰、田野、陈雨、周逸";
$nameArr = explode('、',$str);

$suiji =mt_rand(0,34);
$saodi = "今天扫地的人是：".$nameArr[$suiji];
$suiji = mt_rand(0,34);
$saodi = $saodi." ".$nameArr[$suiji];
$suiji = mt_rand(0,34);
$saodi = $saodi." ".$nameArr[$suiji];

echo $saodi;