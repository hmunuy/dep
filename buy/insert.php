<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

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


//$name = isset($_POST['name']) ? $_POST['name'] : "No Data";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email= $_POST['email'];
 $address = $_POST['address'];
 $area= $_POST['area'];
 $subArea = $_POST['subArea'];
 $zip= $_POST['zip'];
 $alert= $_POST['alert'];
 $amount= $_POST['amount'];
 $typeProduct = $_POST['typeProduct'];
 $surFacePaper= $_POST['surFacePaper'];
 $typePaper= $_POST['typePaper'];
 $size= $_POST['size'];
 $province = $_POST['province'];
 $tracking = $_POST['tracking'];
 $file = $_POST['file'];
 $price = $_POST['price'];
 $order = 0;
 //$target_dir = "../uploads/" . $file ;
  // if (empty($name)) {
  //   echo "Name is empty";
  // }
}
// }else if($_SERVER["REQUEST_METHOD"] == "GET"){
//   echo "I susss";
// }
// $phone = "0s0s0s";
// $email = 'sssda@hotmail.com';
//  $sql = "INSERT INTO customer (name, phone) VALUES ('$name','$phone')" ;
// echo $tracking ;
$sql = "INSERT INTO customer (name, phone, email, address, zip, subArea, area, province, sizepaper, typepaper, amount, typeproduct, surfacepaper, alert, tracking, photo, price, statusOrder)
VALUES ('$name', '$phone', '$email', '$address', '$zip', '$subArea', '$area', '$province', '$size', '$typePaper', '$amount', '$typeProduct', '$surFacePaper', '$alert', '$tracking', '$file', '$price', '$order')";

$mail = new PHPMailer();
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;


$gmail_username = "pipat0909737525@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "pipat30042542"; // รหัสผ่าน gmail

$sender = "pipat";
$email_sender = "noreply@dephormphoto.com";
$email_receiver = "6006021611216@fitm.kmutnb.ac.th";
$subject = "รูปภาพ";


$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;

$stripped = str_replace(' ', '', $file);

$mail->AddEmbeddedImage("../uploads/$stripped", "my-attach", $stripped);
//1ebd1d006c5da4a2faf938288b0add65.jpg
$mail->Body = 'รูปภาพมาส่งแล้ว!!' . $stripped;
if ($email_receiver) {
  //$mail->send();
  if (!$mail->Send()) {
    echo 'Email Failed To Send.';
  } else {
    echo 'Email Was Successfully Sent.';
  }
}
//echo $file;
if ($conn->query($sql) === TRUE) {
  echo " New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
