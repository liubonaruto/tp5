<?php
header("content-type:text/html;charset=utf-8");

$str = 'zxsdf gff ggf jhgjhg j';
$mail = 'asd@qq.cn';
$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/';

preg_match($pattern, $mail, $result);
print_r($result);exit;
