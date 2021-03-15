<?php 

//header('Content-Type: application/json');
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


$sql = "SELECT sizepaper, typepaper, surfacepaper ,statusOrder ,phone ,tracking FROM customer WHERE phone='$phone' AND tracking='$tracking'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>ดีพร้อมดิจิตอลเเล็บตรัง</title>
    
    <!-- Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.18.2/dist/themes/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <!-- <link href="../swiper.css" rel="stylesheet"> -->
	<link href="../css/magnific-popup.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/sweetalert2.min.css">
	
	<!-- Favicon  -->
    <link rel="icon" href="../images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    
    

   <!-- Navbar -->
   <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="../index.html"><img src="../images/logo.png" alt="alternative"></a> 
    <!-- <img src="images/logo.png" alt="alternative"> -->
    
    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.html">หน้าเเรก <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../product/photo-print.html">อัดรูป</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../product/wadding-card.html">การ์ดเเต่งงาน</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../product/frame.html">กรอบลอย</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#">นามบัตร</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#">อินสตาบ๊อกซ์</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../product/card.html">นามบัตร</a>
            </li>

           <!-- Dropdown Menu -->
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="#projects" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">บริการ</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><span class="item-text">ล้างเเละสเเกนฟิลม์</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#"><span class="item-text">ถ่ายรูปติดบัตร</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#"><span class="item-text">ถ่ายรูปหมู่โรงเรียน</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#l"><span class="item-text">ถ่ายรูปสตูดิโอ</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#"><span class="item-text">รูปหน้างาน(ศพ)</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#"><span class="item-text">ซ่อมแซมแก้ไขภาพเก่า</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="#"><span class="item-text">อัลบั้ม และกรอบรูป</span></a>

                </div>
            </li>
            <!-- end of dropdown menu -->
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">ติดต่อเรา</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="../tacking/tacking.php">ติดตามสินค้า</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            
            <span class="fa-stack">
                <a href="#your-link">
                    <span class="hexagon"></span>
                    <i class="fab fa-facebook-messenger fa-stack-1x"></i>
                </a>
            </span>
            
        </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navbar -->

    <!-- Header -->
    <header id="header" class="header header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>Tracking</h1><br>
                            <!-- <span id="js-rotating">ออกเเบบ, ปริ้น, อัดกรอบ, ล้างรูป</span> -->
<?php
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
      
//     echo  " Name: " . $row["sizepaper"]. " " . $row["typepaper"].  " " . $row["surfacepaper"].  " กำลังพิจารณา " . $row["phone"]."<br>";
      
//   }
// } else {
//   echo "0 results";
// }

if ($result->num_rows > 0) { $n = 1 ; ?>

    <table  class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
  
      <tbody>
      <?php 
    
    while($row = $result->fetch_assoc()) {
        if($row['statusOrder']==0){ 
?>
              <tr>
                <td> <?php  echo $n ; ?> </td>
                <td><?php echo " " . $row["sizepaper"]. "";?></td>
                <td><?php echo " " . $row["typepaper"]. "";?> </td>
                <td><?php echo " " . $row["surfacepaper"]. "";?></td> 
                <td class="table-info" style="color:#000;"> กำลังพิจารณา </td>  
              </tr>
              
             

        <?php
         $n++ ;
        }
        
    }
    
} else {
    echo "0 results";
}

$conn->close();

?>
</tbody>
              </table>

                            

                        </div>
                        
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


     <!-- Breadcrumbs -->
     
    <div id="intro">
    </div>
   



       


    
    
    	
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.2/dist/themes/bootstrap-table/bootstrap-table.min.js"></script>

     <!-- Page level plugins -->
     <script src="..admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="..admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../dist/sweetalert2.min.js"></script>
    <script src="../js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="../js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="../js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="../js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="../js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="../js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="../js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="../js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="../js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="../js/scripts.js"></script> <!-- Custom scripts -->

    <script>


    // $(document).ready(function(e) {
    //     $("#saveBtn").click(function(){
    //         $.ajax({
    //             type:'POST' ,
    //             url:'ListOrder.php' ,
    //             data:{
    //                 phone:$("#phone").val(),
    //                 tracking:$("#tracking").val(),
    //             },
    //             success: function(result) {
    //                 if(result.check == 1){
    //                     Swal.fire(
                        
    //                     'พบหมายเลขงานของคุณเเล้ว !',
    //                     'เลขออเดอร์ที่ : '+ result.message,
    //                     'success'
    //                     ).then((result) => {
    //                         window.location.reload();

    //                     });
    //                 }
    //                 else{
    //                     Swal.fire(
    //                     'ไม่พบหมายเลขติดตามงาน !',
    //                     'เลขออเดอร์ที่ :'+ result.message+' <br>กรุณาตรวจสอบหมายเลขติดตามงาน เเละกรอกใหม่อีกครั้ง',
    //                     'error'
    //                     );
    //                 }}
    //         }).done(function(result){
    //             console.log("success");
    //         });
           
    //     });
        
    // });
</script>
    
    

    
</body>
</html>