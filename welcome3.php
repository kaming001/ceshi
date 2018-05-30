<?php
header('Content-type: text/html; charset=UTF8'); 
$servername = "qdm166654168.my3w.com";
$username = "qdm166654168";
$password = "a3216953";
$dbname = "qdm166654168_db";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset($conn,'utf8');
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT name, bumen FROM yonghu";
$result = $conn->query($sql);
 
echo "<table border='1'>
<tr>
<th>姓名</th>
<th>部门</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['bumen'] . "</td>";
    echo "</tr>";
}
echo "</table>";
 
mysqli_close($con);
$conn->close();
?>