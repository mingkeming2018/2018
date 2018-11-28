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
   $sql = "SELECT * FROM news2 where (title)='n1'";
   $sql2 = "SELECT * FROM news2 where (title)='n2'";
   $sql3 = "SELECT * FROM news2 where (title)='n3'";
   $sql4 = "SELECT * FROM news2 where (title)='n4'";
   $sql5 = "SELECT * FROM news2 where (title)='n5'";
   $sql6 = "SELECT * FROM news2 where (title)='n6'";
   $sql7 = "SELECT * FROM news2 where (title)='n7'";
   $sql8 = "SELECT * FROM news2 where (title)='n8'";
   $sql9 = "SELECT * FROM news2 where (title)='n9'";
   $sql10 = "SELECT * FROM news2 where (title)='n10'";
   
     $result = $conn->query($sql);$result2 = $conn->query($sql2);$result3 = $conn->query($sql3);
     $result4 = $conn->query($sql4);$result5 = $conn->query($sql5);$result6 = $conn->query($sql6);
     $result7 = $conn->query($sql7);$result8 = $conn->query($sql8);$result9 = $conn->query($sql9);
     $result10 = $conn->query($sql10);
     $attr = $result->fetch_all();$attr2 = $result2->fetch_all();$attr3 = $result3->fetch_all();
     $attr4 = $result4->fetch_all();$attr5 = $result5->fetch_all();$attr6 = $result6->fetch_all();
     $attr7 = $result7->fetch_all();$attr8 = $result8->fetch_all();$attr9 = $result9->fetch_all();
     $attr10 = $result10->fetch_all();
      echo $attr[0][2]; echo ",";echo $attr2[0][2];echo ",";echo $attr3[0][2];echo ",";
      echo $attr4[0][2];echo ",";echo $attr5[0][2];echo ",";echo $attr6[0][2];echo ",";
      echo $attr7[0][2];echo ",";echo $attr8[0][2];echo ",";echo $attr9[0][2];echo ",";
      echo $attr10[0][2];
       // print_r($attr);
?>