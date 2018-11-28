<?php
header("content-type:text/html;charset=utf-8");
$servername = "113.204.229.170";
$username = "root";
$password = "root";
$dbname = "test";
$n5=null; $i=1;
 $n5=$_GET['n5'];
  $conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql2 = "SELECT * FROM news2 where (title)='n5'";//拼成一个完整的SQL语句
     $result = $conn->query($sql2);
     $attr = $result->fetch_all();
     // echo $attr[0][2]; 
     $i=$attr[0][2]+1; 
$sql="UPDATE news2 SET num = $i WHERE title = 'n5'";
if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo $i;
//删除数据
//$con=mysql_connect("localhost","root","19960621");
//mysql_select_db("dbmysql",$con);
//mysql_query("delete from person where `personID`=2");
//mysql_close($con);
?>