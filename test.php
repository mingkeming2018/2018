<!DOCTYPE html>
<?php session_start(); ?>
<html lang="zh-CN" style="height:100%;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"> -->
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>B</title>
 
  </head>
  <body>
  <?php
header("content-type:text/html;charset=utf-8");


 echo $_SESSION['views']; ?>
  </body>
  </html>