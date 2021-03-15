<?php

$check = false;

$sizePhoto = $_REQUEST['sizePhoto'];
$typePaper = $_REQUEST['typePaper'];
$surFacePaper = $_REQUEST['surFacePaper'];
$typeProduct = $_REQUEST['typeProduct'];
$amountProduct = $_REQUEST['amountProduct'];
$nameCustomer = $_REQUEST['nameCustomer'];
$telCustomer = $_REQUEST['telCustomer'];
$tracking = $_REQUEST['tracking'];
$emailCustomer = $_REQUEST['emailCustomer'];
$addressCustomer = $_REQUEST['addressCustomer'];
$subArea = $_REQUEST['subArea']; //แขวง&ตำบล
$area = $_REQUEST['area']; //เขต&อำเภอ
$province = $_REQUEST['province']; //จังหวัด
$zip = $_REQUEST['zipcode'];
$alert = $_REQUEST['alert']; //หมายเหตุ
$price = 0;
$ext = substr(strrchr($_FILES['file']['name'], "."), 1); //get extension of uploading imagge
$new_name = md5(rand() * time()) . ".$ext"; //rename the image

$filename = $new_name;

$target_dir = "../uploads/";
$target_file = $target_dir . $filename;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
if($sizePhoto == "4x6"){
    if($amountProduct >= 1 && $amountProduct <= 10){
        $price = 10*$amountProduct;
    }else if($amountProduct >= 11 && $amountProduct <= 20){
        $price = 6*$amountProduct;
    }else if($amountProduct >= 21 && $amountProduct <= 40){
        $price = 5*$amountProduct;
    }else if($amountProduct >= 41 && $amountProduct < 150){
        $price = 4*$amountProduct;
    }else if($amountProduct >= 150){
        $price = 3*$amountProduct;
    }
}else if($sizePhoto == "5x7"){
    $price = 20*$amountProduct;
}else if($sizePhoto == "6x8"){
    $price = 30*$amountProduct;
}else if($sizePhoto == "8x10"){
    $price = 50*$amountProduct;
}else if($sizePhoto == "8x12"){
    $price = 60*$amountProduct;
}else if($sizePhoto == "10x12"){
    $price = 70*$amountProduct;
}else if($sizePhoto == "10x15"){
    $price = 120*$amountProduct;
}else if($sizePhoto == "12x15"){
    $price = 250*$amountProduct;
}else if($sizePhoto == "12x18"){
    $price = 250*$amountProduct;
}else if($sizePhoto == "16x20"){
    $price = 350*$amountProduct;
}else if($sizePhoto == "20x24"){
    $price = 450*$amountProduct;
}else if($sizePhoto == "20x30"){
    $price = 550*$amountProduct;
}else if($sizePhoto == "24x30"){
    $price = 650*$amountProduct;
}else if($sizePhoto == "24x36"){
    $price = 900*$amountProduct;
}else if($sizePhoto == "30x40"){
    $price = 1200*$amountProduct;
}
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
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Terms Conditions - Aria - Business HTML Landing Page Template</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../swiper.css" rel="stylesheet">
    <link href="../css/magnific-popup.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/sweetalert2.min.css">





    <!-- Favicon  -->
    <link rel="icon" href="../images/favicon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="../images/logo.png" alt="alternative"></a>
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
                    <a class="nav-link page-scroll" href="#header">หน้าเเรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="product/photo-print.html">อัดรูป</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="product/card.html">การ์ดเเต่งงาน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="product/stiker.html">กรอบลอย</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link page-scroll" href="#">นามบัตร</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#">อินสตาบ๊อกซ์</a>
            </li> -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="product/print-dijital.html">นามบัตร</a>
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
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>สรุปรายการสั่งซื้อ</h1>
                    <a class="btn-solid-lg page-scroll" href="#con-order">รายละเอียดการสั่งซื้อ</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->



    <!-- ฟอร์มสั่งซื้อ -->
    <div class></div>
    <div id="con-order" class="ex-basic-2">
        <div class="container">

            <div class="card">
                <!-- Card -->
                <div class="card-body">
                    <div class="row">
                        <!-- ส่วนของที่อยู่ของลูกค้า รับค่ามาจากหน้าสั่งซื้อ ค่าตัวอย่างอยู่ที่ value="" -->

                        <div class="container content py-5 px-md-5">
                            <h2>สรุปรายการสั่งซื้อ</h2>
                            <p class="text-center">กรุณากรอกรายละเอียดให้ครบถ้วน เมื่อทางร้านได้รับข้อมูลแล้ว<br>จะสรุปค่าใช้จ่าย ช่องทางการชำระค่าบริการให้ทางอีเมลล์นะคะ<br>
                                <small>(ลูกค้าที่ไม่สะดวกกรอกแบบฟอร์ม สามารถส่งรายละเอียดทั้งหมดให้เราได้ทางอีเมลล์<br>order@snowwhite.co.th เช่นกันค่ะ)</small>
                            </p>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">ชื่อลูกค้า</label>
                                            <input type="text" class="form-control name" value="<?php echo $nameCustomer; ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control phone" value="<?php echo $telCustomer; ?>" id="" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">รหัสติดตาม</label>
                                            <input type="text" class="form-control tracking" value="<?php echo $tracking; ?>" id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="">E-mail</label>
                                            <input type="text" class="form-control email" value="<?php echo $emailCustomer; ?>" id="" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="">ที่อยู่รับสินค้า</label>
                                            <textarea class="form-control address" id="" rows="3" disabled><?php echo $addressCustomer; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">ตำบล/แขวง</label>
                                            <input type="text" class="form-control subArea" id="" value="<?php echo $subArea; ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-4 offset-md-1">
                                            <label for="">อำเภอ/เขต</label>
                                            <input type="text" class="form-control area" id="" value="<?php echo $area; ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">จังหวัด</label>
                                            <input type="text" class="form-control province" id="" value="<?php echo $province; ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-4 offset-md-1">
                                            <label for="">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control zip" id="" value="<?php echo $zip; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="">หมายเหตุ(ถ้ามี)</label>
                                            <textarea class="form-control alert" id="" rows="3" disabled><?php echo $alert; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- ส่วนของรายละเอียดงานรับค่ามาจากหน้าสั่งซื้อ -->
                                <h2>รายละเอียดงาน</h2>
                                <div class="col-lg-12">
                                    <div class="text-container" style="overflow-x:auto;">
                                        <table class="table" id="resultBuying" class="table">
                                            <thead class="table-dark">
                                                <th>#</th>
                                                <td>ไฟล์ </td>
                                                <th>ขนาด</th>
                                                <th>กระดาษ</th>
                                                <th>ผิวกระดาษ</th>
                                                <th>อัดแบบ</th>
                                                <th>ไฟล์ละ(จำนวนใบ)</th>
                                                <th>จำนวนเงินที่ต้องชำระ</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>

                                                    <td><span class="file"> <?php echo "$filename" ?></span> </td>
                                                    <td><span class="size"> <?php echo "$sizePhoto" ?></span> </td>
                                                    <td><span class="typePaper"><?php echo $typePaper ?></span> </td>
                                                    <td><span class="surFacePaper"><?php echo $surFacePaper ?></span></td>
                                                    <td><span class="typeProduct"><?php echo $typeProduct ?></span></td>
                                                    <td><span class="amountProduct"><?php echo $amountProduct ?></span></td>
                                                    <td><span class="price"><?php echo number_format($price,2) ?></span></td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end of text-container -->
                                    <div class="text-center">
                                        <button onclick="swalFunction()" class="btn btn-lg first btn-primary" id="form-submit">สั่งเลย</button>
                                        <button onclick="swalFunction()" class="btn btn-lg first btn-warning" id="form-submit">แก้ไข</button>
                                    </div>

                                    <template id="my-template">
                                        <swal-title>
                                            กรุณาตรวจสอบการสั่งซื้อให้เรียบร้อยก่อนทำการสั่งซื้อค่ะ !
                                            <?php
                                            $check = true;
                                            ?>
                                        </swal-title>
                                        <swal-icon type="warning" color="red"></swal-icon>
                                        <swal-button type="confirm">
                                            ยืนยันการสั่งซื้อ
                                            <?php
                                            //echo "testetset";

                                            if ($check) {
                                                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
                                            } else {
                                                $check = false;
                                                echo "Sorry, there was an error uploading your file.";
                                            }
                                            ?>
                                        </swal-button>
                                        <swal-button type="cancel">
                                            ออก
                                        </swal-button>
                                        <swal-button type="deny">
                                            ยกเลิกการสั่งซื้อ
                                        </swal-button>
                                        <swal-param name="allowEscapeKey" value="false" />
                                        <swal-param name="customClass" value='{ "popup": "my-popup" }' />
                                    </template>

                                </div>
                            </div> <!-- end of row -->
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end of container -->
    </div> <!-- end of ex-basic -->

    <!-- end of terms content -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Terms & Conditions</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">


                <div class="col-md-4">
                    <div class="text-container">
                        <h4>สินค้าเเละบริการ</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="#">อัดรูป</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">การ์ดเเต่งงาน</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">สติ๊กเกอร์ ฉลากสินค้า</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">นามบัตร</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">อินสตาบ๊อกซ์</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">งานพิมพ์ดิจิตอลฯ</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">ปฎิทินภาพถ่าย</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">ถ่ายรูปติดบัตร</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">รีทัชรูป</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">ซ่อมเเซมเเก้ไขภาพเก่า</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">สแกนภาพ ล้างเเละสเเกนฟิลม์</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">อัลบั้มเเละกรอบรูป</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="text-container">
                        <h4>การชำระเงิน</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="testpage2.html">การชำระเงิน</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">อัตราค่าจัเส่ง</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <h4>ความรู้</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="testpage2.html">วิธีการเตรียมไฟล์</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">วิธีการเตรียมไฟล์พิมพ์ดิจิตอลฯ</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">ระบบจัดการสี</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">คำถามที่พบบ่อย (FAQ)</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <h4>วิธีการใช้บริการ</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="testpage2.html">วิธีการอัดรูปหน้าเว็บไซต์</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">วิธีการสั่งงงานทาง Dropbox ฯลฯ</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">วิธีสั่งงานทาง E-mail</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">วิธีสั่งงานทาง DVD/CD</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="text-container">
                        <h4>ดาวน์โหลด</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="testpage2.html">โปรไฟล์สี</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <h4>โซเชียลเน็ตเวิร์ค</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="testpage2.html">Facebook</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">Instagram</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <h4>เกี่ยวกับเรา</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="testpage2.html">ที่ตั้งสาขา</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">สมัครงาน</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                    <div class="text-container">
                        <h4>อื่น ๆ</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="testpage2.html">แบบสอบถาม</a>
                            </li>
                            <li>
                                <a class="white" href="testpage2.html">ทดสอบ</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->


            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">© ดีพร้อมดิจิตอลเเล็บตรัง </p>
                    <p>เนื้อหาและภาพประกอบทั้งหมดได้รับความคุ้มครองทางลิขสิทธิ์ ห้ามนำไปใช้โดยไม่ได้รับอนุญาต</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->



    <script src="../js/app.js"></script>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</body>

</html>