<?php
$servername = "qdm166654168.my3w.com";
$username = "qdm166654168";
$password = "a3216953";
$dbname = "qdm166654168_db";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT name, bumen FROM yonghu";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
   echo '
<!DOCTYPE html>
<html>
    <head>
       <title> 1111</title>
   </head>
   <body>
       <span>名字. $row["name"].</span>
   </body>
</html>
';



    //while($row = $result->fetch_assoc()) {
    	//header('Content-type:text/json');
    	//$arr = array('姓名' => $row["name"], '部门' => $row["bumen"]);
    	//echo urldecode ( json_encode ( $arr ) );  
        //echo "name: " . $row["name"]. " - bumen: " . $row["bumen"]. " " . $row["bumen"]. "<br>";
    //}
} else {
    echo "0 结果";
}
$conn->close();
?>