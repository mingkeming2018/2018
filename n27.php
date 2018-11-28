<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"> -->
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap</title>
    <link rel="shortcut icon" type="images/x-icon" href="search.ico"/>
    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/content.css" rel="stylesheet">
    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="lib/html5shiv/html5shiv.min.js"></script>
    <script src="lib/respond/respond.min.js"></script>
  </head>
  <body style="background-image: url(images/222.png);background-size:cover;">
  
  <div class="head">
    <div class="left"><h1>标题7</h1></div>
  </div>

  <div id="video">
    
  <!-- <video src="images/test.mp4" width="100%" height="300px" controls="controls" id="v1">
您的浏览器不支持 video 标签。
</video> -->
  <video id="v7" controls="" x5-playsinline="" playsinline="" webkit-playsinline="" width="100%" height="300px" preload="auto" poster="" x5nativepanel="freewififorvideo_fromvideoelment" src="" type="application/x-mpegURL"></video>
</div>
  <div class="text"><p>央视网消息（新闻联播）：党的十九大一年来，我国生态环境保护大事件不断、大动作频频：习近平生态文明思想确立、生态文明被写入宪法、一系列加强生态环境保护的战略决策出台、一个个重磅文件发布。从中央到地方，“用最严格制度最严密法治保护生态环境”，正在一步步被落实在一项项具体的举措当中。

今年5月，全国生态环境保护大会召开，标志着习近平生态文明思想的正式确立，也吹响了用习近平生态文明思想全面指引美丽中国建设的前进号角。

</p></div>
  <!-- <div class="vote"><img src="images/vote.png" height="57" width="171"/></div>-->


<div id="change"><img onclick="showBtn()" src="images/vote.png" class="vote"/>
  </div>
   



  
  <br>
  <div class="buttom">
  <h1 class="now">当前票数：</h1><h2>
    <?php
  
    header("content-type:text/html;charset=utf-8");
$servername = "113.204.229.170";
$username = "root";
$password = "root";
$dbname = "test";
  $conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
   $sql = "SELECT * FROM news2 where (title)='n7'";//拼成一个完整的SQL语句
     $result = $conn->query($sql);
     $attr = $result->fetch_all();
     echo $attr[0][2];
?>

  </h2>
  </div>

    <script src="lib/jquery/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="lib/bootstrap/bootstrap.min.js"></script>
  </body>
  <script type="text/javascript" src="js/n1.js"></script>

<script type="text/javascript">
var btnc=document.getElementById('change');
function btnclose(){
  btnc.onclick = null;
}
function showBtn(){

  document.getElementById('change').innerHTML='<img src="images/voted.png" class="vote"/>';
setTimeout(function(){ btnclose(); }, 10);
// btnc.onclick = null;
}
var m=0;
  document.getElementById('change').onclick=function(){
    
    var xhr=new XMLHttpRequest();
    xhr.open('get','update7.php?n7=n7');
    xhr.onload=function(){
      // console.log('dsfdsf');
       console.log(xhr.responseText);
       document.querySelector('h2').innerHTML=xhr.responseText;
    }
    xhr.send(null);
     
  }

</script>
</html>