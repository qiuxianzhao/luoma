<?php
//生成验证码图片
session_start();
Header("Content-type: image/gif");
srand((double)microtime()*1000000);
$im = imagecreate(45,18);//设置图片的宽与高
$black = ImageColorAllocate($im, 0,0,0);//设置背景颜色
$white = ImageColorAllocate($im, 255,255,255);//设置文字颜色
$gray = ImageColorAllocate($im, 200,200,200);//干扰颜色
imagefill($im,45,18,$gray);
while(($chk_num=rand()%10000)<1000);
$_SESSION["chk_num"] = $chk_num;
//将四位整数验证码绘入图片
//
imagestring($im, 5, 5, 1,$chk_num , $white);//5, 5, 1分别表示为字体大小,左边距,上边距
for($i=0;$i<100;$i++) //加入干扰象素
{
imagesetpixel($im, rand()%70 , rand()%30 , $gray);
}
//外边距 

//验证码与session 同时更新


ImagePNG($im);
ImageDestroy($im);
?>