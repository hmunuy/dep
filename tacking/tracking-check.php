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
//$datework = '01/ม.ค./2564';
$staus = 'กำลังจัดทำ';


$sql = "SELECT sizepaper, typepaper, surfacepaper ,status ,phone ,tracking FROM customer WHERE phone='$phone' AND tracking='$tracking'";
$result = $conn->query($sql);

if( $result->num_rows > 0){
    echo json_encode(array('check' => '1','message'=> "$tracking, <a href='../index.html'> สถานะ : $staus</a>
    <div class='container mt-3'>
    <button type='button' class='btn btn-primary' data-toggle='collapse' data-target='#demo'>เรียกดูใบสั่งซื้อ</button>
    <div id='demo' class='collapse'>
      <table class='table table-hover'>
    <thead>
      <tr>
        <th>ขนาด</th>
        <th>กระดาษ</th>
        <th>ผิวกระดาษ</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      
    </tbody>
  </table>
    </div>
  </div>
                            
                        "));
}


else {
    echo json_encode(array('check' => '0','message'=> "$tracking"));
}
$conn->close();
?>