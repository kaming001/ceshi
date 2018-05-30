<?php
header("Content-type: text/html;charset=utf-8");
$con = mysql_connect("qdm166654168.my3w.com","qdm166654168","a3216953");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("qdm166654168_db", $con);
mysql_query("set names utf8");
 
$sql="INSERT INTO yonghu (name, bumen)
VALUES
('$_POST[name]','$_POST[bumen]')";
 
if (!mysql_query($sql,$con))
  {

  // die('Error: ' . mysql_error());
  	die('Error: ' . "不能为空");
  }
echo "恭喜你!报名成功!";
 
mysql_close($con)
?>