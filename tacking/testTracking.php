<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<?php
header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dephormphoto";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$phone = $_POST['phone'];
$tracking = $_POST['tracking'];
$datework = '01/ม.ค./2564';
$status = 'กำลังจัดทำ';

$sql = "SELECT sizepaper, typepaper, surfacepaper ,status ,phone ,tracking FROM customer WHERE phone='$phone' AND tracking='$tracking'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>"; 
            echo "<tr>"; 
                echo "<th>ขนาด</th>"; 
                echo "<th>กระดาษ</th>"; 
                echo "<th>ผิวกระดาษ</th>";
                echo "<th>สถานะ</th>"; 
            echo "</tr>";
  while($row = $result->fetch_assoc()) {
    //echo "<tr><td>".$row["sizepaper"]."</td><td>".$row["typepaper"]."</td> <td>".$row["surfacepaper"]."</td> <td>".$row["status"]."</td></tr>";
     echo "<tr>"; 
                echo "<td>" . $row['sizepaper'] . "</td>"; 
                echo "<td>" . $row['typepaper'] . "</td>"; 
                echo "<td>" . $row['surfacepaper'] . "</td>";
                echo "<td>" . $row['status'] . "</td>"; 
            echo "</tr>"; 
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>

</body>
</html>

    