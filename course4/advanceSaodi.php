<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/13
 * Time: 10:24
 */

//简单版本扫地人
$str = "张书平、吴波静、张书翰、朱伟豪、赵哲斌、王倩倩、常盈盈、龚永桂、孙伟、丁开荣、潘孝明、张函黎、张海芳、唐晓庆、任东梅、李毛、吴金华、尹建文、秦朝、徐春生、魏枭、李先斌、张立言、方乾、叶保永、朱军虎、吴义飞、周望军、张华峰、陈涛、康阿磊";
$nameArr = explode("、",$str);
//var_dump($nameArr);
//mt_rand()
$suiji = array_rand($nameArr);
$saodi = "今天扫地的人是：".$nameArr[$suiji];
unset($nameArr[$suiji]);

$suiji = array_rand($nameArr);
$saodi = $saodi." ".$nameArr[$suiji];
unset($nameArr[$suiji]);

$suiji = array_rand($nameArr);
$saodi = $saodi." ".$nameArr[$suiji];
unset($nameArr[$suiji]);

echo $saodi;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<hr>
<a href="http://localhost/php/course4/advanceSaodi.php">点 我 重 新 选 人</a>
<hr>
</body>
</html>
