<?php

include "../home/connect.php";

session_start();

$fullnameErr = $emailErr = $genderErr = $phoneErr = $dateErr = $addressErr = "";
$fullname = $email = $gender = $phone = $date = $address = "";

// function test_input($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

if (isset($_POST['Submit']) && $_POST['Submit'] == "Lưu"){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['dateofbirth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    
    

    $str = "update khachhang set hoten='$fullname', ngaysinh='$date', gioitinh='$gender', diachi='$address', sodienthoai='$phone' where email='$email'";

    if ($conn->query($str) == true){
        echo '<script>alert("Thay đổi hồ sơ thành công");</script>';
    }
    else{
        echo '<script>alert("Thay đổi không không thành công");</script>';
    }

}

// if ($_SERVER["REQUEST_METHOD"] == "POST"){
//     if (empty($_POST['fullname'])){
//         $fullnameErr = "Họ và tên không được để trống";
//     }
//     else{
//         $fullname = test_input($_POST['fullname']);
//         // check if fullname only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z-' ]*$/", $fullname)){
//             $fullnameErr = "Họ và tên không bao gồm ký tự đặc biệt";
//         }
//     }

//     if (empty($_POST['email'])){
//         $emailErr = "Email không được để trống";
//     }
//     else{
//         $email = test_input($_POST['email']);
//         //check if email address is well-formed
//         if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//             $emailErr = "Email không hợp lệ";
//         }
//     }

//     if (empty($_POST['phone'])){
//         $phoneErr = "Số điện thoại không được để trống";
//     }
//     else{
//         $phone = test_input($_POST['phone']);
//         //check if length of phone number is 10
//         if (strlen($phone) != 10){
//             $phoneErr = "Số điện thoại phải bao gồm 10 chữ số";
//         }
//     }

//     if (empty($_POST['gender'])){
//         $genderErr = "Giới tính không được để trống";
//     }
//     else{
//         $gender = test_input($_POST['gender']);
//     }

//     if (empty($_POST['dateofbirth'])){
//         $dateErr = "Ngày sinh không được để trống";
//     }
//     else{
//         $date = test_input($_POST['dateofbirth']);
//     }

//     if (empty($_POST['address'])){
//         $addressErr = "Địa chỉ không được để trống";
//     }
//     else{
//         $address = test_input($_POST['address']);
//     }
// }



?>


<!DOCTYPE html>
<html lang="vie">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Shalimar&display=swap" rel="stylesheet">
    <title>Walky Store</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo waiky shoes NỀN.png">
    <style>
        .error{color: red;}
    </style>
</head>
<body>
    <div class="app">
        <header class="header">
            <nav class="header_navbar">
                <ul class="header_navbar-list-icon">
                    <li class="header_navbar-item">
                        <a href="" class="header_navbar-icon">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="" class="header_navbar-icon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="" class="header_navbar-icon">
                            <i class="fa-brands fa-shopify"></i>
                        </a>
                    </li>
                </ul>

                <ul class="header_navbar-list-main">
                    <li class="header_navbar-item">Nhịp nhàng trên từng bước chân</li>  
                </ul>

                <ul class="header_navbar-list">
                    <li class="header_navbar-item">
                        <a href="" class="header_navbar-item-link">
                            <i class="fa-solid fa-circle-question"></i>
                            Trợ giúp
                        </a>
                    </li>
                    <li class="header_navbar-item header_navbar-item-notify">
                        <a href="" class="header_navbar-item-link">
                            <i class="fa-solid fa-bell"></i>
                            Thông báo
                        </a>

                        <div class="notify">
                            <header class="notify-header">
                                <h3>Thông báo mới nhận</h3>
                            </header>
                            <ul class="notify-list">
                                <li class="notify-item">
                                    <a class="notify-link" href="">
                                        <img src="./assets/img/Adidas/1Adidas EQ21 -1.jpg" alt="" class="notify-img">
                                        <div class="notify-info">
                                            <span class="notify-name">Adidas - Giày chạy bộ EQ21</span>
                                            <span class="notify-descriotion">Chất vải lưới thoáng khí, thân giày có chứa tối thiểu 50% thành phần tái chế.  </span>
                                        </div>
                                    </a>
                                </li>

                                <li class="notify-item">
                                    <a class="notify-link" href="">
                                        <img src="./assets/img/Biti_s/notify-2.jpg" alt="" class="notify-img">
                                        <div class="notify-info">
                                            <span class="notify-name">Biti’s - Giày nam Biti’s Hunter X Cut-Out</span>
                                            <span class="notify-descriotion">Thiết kế đế mới cao hơn, êm hơn, đế LiteFlex 2.0 chắc chắn. Hứa hẹn một đôi giày cực kỳ “hot” vào năm 2022 này.</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="notify-item">
                                    <a class="notify-link" href="">
                                        <img src="./assets/img/Converse/6Converse Run Star Hike Platform -2.jpg" alt="" class="notify-img">
                                        <div class="notify-info">
                                            <span class="notify-name">Converse - Giày Nữ Converse Run Star Hike Platform Seasonal Colour</span>
                                            <span class="notify-descriotion">Bộ sưu tập Run Star Hike với upper được làm từ 100% polyester tái chế</span>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="notify-item">
                                    <a class="notify-link" href="">
                                        <img src="./assets/img/Nike/Nike Blazer Mid ’77 Vintage.jpg" alt="" class="notify-img">
                                        <div class="notify-info">
                                            <span class="notify-name">Nike - Nike Blazer Mid ’77 Vintage</span>
                                            <span class="notify-descriotion">Mang phong cách của những năm 70. Phần trên bằng da sắc nét đến khó tin của nó được bẻ thành một cách đẹp mắt</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="notify-item">
                                    <a class="notify-link" href="">
                                        <img src="./assets/img/MWC/Giày thể thao Nam MWC – 5387.jpg" alt="" class="notify-img">
                                        <div class="notify-info">
                                            <span class="notify-name">MWC - Giày thể thao Nam MWC – 5387</span>
                                            <span class="notify-descriotion">Giày được thiết kế kiểu dáng buộc dây sneaker cực ngầu. Với chất da PU cao cấp phối lưới chuyên dụng tạo cảm giác thoải mái</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <footer class="notify-footer">
                                <a href="" class="notify-footer-btn">Xem tất cả</a>
                            </footer>
                        </div>
                    </li>
                    <li class="header_navbar-item header_navbar-user">
                        <div id="main-menu">
                            <?php
                                if (!isset($_SESSION['user_name'])) {
                                    echo '  <li class="header_navbar-item header_navbar-item--strong header_navbar-item--separate"><a href="../home/register.php">Đăng ký</a></li>
                                                <li class="header_navbar-item header_navbar-item--strong"><a href="../home/login.php">Đăng nhập</a></li>';
                                } else{
                                    //echo '<p>';
                                    echo $_SESSION['user_name'];
                                    //echo '</p>';
                                }  
                            ?> 
                            <ul class="header_navbar-user-menu" id="cotaikhoan">
                                <li class="header_navbar-user-item">
                                    <a href="../HoSoTaiKhoan/taikhoan.php">Tài khoản của tôi</a>
                                </li>

                                <li class="header_navbar-user-item">
                                    <a href="">Đơn hàng đã đặt</a>
                                </li>

                                <li class="header_navbar-user-item">
                                    <?php
                                        include "../home/logout.php";
                                        echo '<a href="">Đăng xuất</a>';
                                    ?>
                                </li>
                            </ul>               
                        </div>
                    </li>   
                    <!-- <li class="header_navbar-item header_navbar-user">
                        <img src="./assets/img/Ellipse 13.png" class="header_navbar-user-img">
                        <span class="header_navbar-user-name">Thanh ngân</span>
                        
                        <ul class="header_navbar-user-menu">
                            <li class="header_navbar-user-item">
                                <a href="">Tài khoản của tôi</a>
                            </li>

                            <li class="header_navbar-user-item">
                                <a href="">Đơn hàng đã đặt</a>
                            </li>

                            <li class="header_navbar-user-item">
                                <a href="">Đăng xuất</a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
        </header>

        <div class="container-1">
            <nav class="center_navbar">
                <ul>
                    <li>
                        <img class="logo" src="./assets/img/logo waiky shoes.png" />
                    </li>
                </ul>

                <ul class="search">
                    <ul>
                        <li class="search-item item-1"><i class="fa-solid fa-magnifying-glass"></i></li>
                        <input type="text" class="search-item item-2" placeholder="Tìm kiếm sản phẩm">
                        <li class="search-item item-3">Tìm kiếm</li>
                    </ul>
                </ul>

                <ul class="cart">
                    <li class="cart-1">
                        <div class="circle">1</div>
                    </li>
                    <li class="cart-2">
                        <a>
                            <img src="./assets/img/Logo Cart.png"/>
                        </a>
                    </li>
                    <li class="cart-3">GIỎ HÀNG CỦA BẠN</li>
                </ul>
            </nav>
        </div>

        <div class="container-2">
            <div id="menu">
                <ul>
                    <li class="list_menu">
                        <a class="text-1" href="http://127.0.0.1:5501/homepage%20interface/index.html">TRANG CHỦ</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="http://127.0.0.1:5501/product%20interface/index.html">SẢN PHẨM</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="">KHUYẾN MÃI</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="http://127.0.0.1:5501/introduction%20interface/">GIỚI THIỆU</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="http://127.0.0.1:5501/contact%20interface/index.html">LIÊN HỆ</a>
                    </li>
                </ul>  
            </div>
        </div>

        <div class="container-3">
            <div class="info">
                <ul class="info-nov">
                    <li class="tk-1">
                        <img class="info-anh" src="./assets/img/Ellipse 13.png">
                        <div class="info-tt">
                            <span class="name-tk-1">Thanhngan_Dang</span>
                            <span class="name-tk-2">Sửa hồ sơ</span>
                        </div>
                    </li>

                    <hr class="dk-chung">

                    <li class="tk-2">
                        <p class="tk-tt-1"><a href="../HoSoTaiKhoan/taikhoan.php">Tài khoản của tôi</a></p>
                        <p class="tk-tt-2">Hồ sơ</p>
                        <p class="tk-tt-2"><a href="../DoiMatKhau/changepass.php">Đổi mật khẩu</a></p>
                    </li>

                    <hr class="dk-chung">

                    <li class="tk-3">Đơn hàng đã đặt</li>

                    <hr class="dk-chung">

                    <li class="tk-3">Đăng xuất</li>
                </ul>
            </div>

            <div class="info-add">
                <h3 class="info-add-1">HỒ SƠ</h3>

                <p class="info-add-2">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>

                <hr class="dk-chung-1">

                <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
                <div class="container-4">
                    <div class="info-add-3">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="info-ct-1">
                                <div class="info-ct-2">Họ và tên</div>
                                <div><input type="text" name="fullname" value="<?php echo $fullname;?>"></div>
                                <span class="error">* <?php echo $fullnameErr;?></span>
                            </div>
        
                            <div class="info-ct-1">
                                <div class="info-ct-4">Email</div>
                                <div><input type="text" name="email" value="<?php echo $email;?>"></div>
                                <span class="error">* <?php echo $emailErr;?></span>
                            </div>
        
                            <div class="info-ct-1">
                                <div class="info-ct-5">Số điện thoại</div>
                                <div><input type="text" name="phone"  value="<?php echo $phone;?>"></div>
                                <span class="error">* <?php echo $phoneErr;?></span>
                            </div>
        
                            <div class="info-ct-1">
                                <div class="info-ct-6">Giới tính</div>
                                <div class="info-ct-9">
                                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Nữ">Nữ
                                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Nam">Nam
                                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="Khác">Khác
                                </div>
                                <span class="error">* <?php echo $genderErr;?></span>
                            </div>
        
                            <div class="info-ct-1">
                                <div class="info-ct-7">Ngày sinh</div>
                                <div><input type="date" name="dateofbirth"  value="<?php echo $dateofbirth;?>"></div>
                                <span class="error">* <?php echo $dateErr;?></span>
                            </div>
        
                            <div class="info-ct-1">
                                <div class="info-ct-8">Địa chỉ</div>
                                <div><input type="text" name="address" value="<?php echo $address;?>"></div>
                                <span class="error">* <?php echo $addressErr;?></span>
                            </div>
                       
                            <input class="info-add-5" type="submit" value="Lưu" name="Submit">
                        </form>
                        
                    </div>

                    <div class="info-add-4">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <ul>
                            <?php
                            if (isset($_POST['Submit-img']) && $_POST['Submit-img'] == "Lưu ảnh"){

                                $imagepath = basename($_FILES['avatarImage']['fullname']);
                                //upload file
                                $target_dir = "./assets/img/uploads/";
                                // $target_file = $target_dir.$imagepath;
                                $target_file = "./assets/img/Ellipse 13.png";
                                //check image
                                //
                                if (move_uploaded_file($_FILES['avatarImage']['fullname'], $target_file)){
                                    $target_file = $target_dir.$imagepath;
                                }
                                else{
                                    $target_file = "./assets/img/Ellipse 13.png";
                                }
                                
                            }
                            
                                echo '<img class="info-add-4-img" src="'.$target_file.'" alt="avatar">';
                            
                            
                            ?>
                            
                            
                            <input class="info-add-4-btn" type="file" accept=".jpeg, .png" name="avatarImage">
                            <li class="info-add-4-vb">Dung lượng ảnh không quá 1MB</li>
                            <li class="info-add-4-vb">Định dạng: .JPEG, .PNG</li>
                            <li><input type="submit" name="Submit-img" value="Lưu ảnh"></li>
                        </ul>   
                        </form>
                        
                    </div>
                </div>

                <!-- <input class="info-add-5" type="submit" value="Lưu" name="Submit">
                </form> -->
            </div>
        </div>

        <div class="container-8">
            <div class="store-8">
                <img src="./assets/img/Nike.png">
                <img src="./assets/img/MWC.png">
                <img src="./assets/img/Biti's.png">
                <img src="./assets/img/Converse.png">
                <img src="./assets/img/Addidas.png">
            </div>
        </div>

        <footer class="footer">
            <center>
                <img id="logo-shop" src="./assets/img/logo waiky shoes.png"> 
            </center>

            <div class="hrall">
                <hr id="hr1">
                <hr id="hr2">
            </div>
            
            <div id="Context-footer">
                <ul>
                    <li class="font-1">HOTLINE LIÊN HỆ</li>
                    <li class="font-2">Mua hàng: 0123456789</li>
                    <li class="font-2">Giờ mở cửa: 8h - 22h</li>
                    <li class="font-2">Email: Nhom7@gmail.com</li>
                </ul>

                <ul>
                    <li class="font-1">CHÍNH SÁCH MUA HÀNG</li>
                    <li class="font-2">Hướng dẫn mua hàng</li>
                    <li class="font-2">Chính sách thanh toán</li>
                    <li class="font-2">Chính sách giao hàng</li>
                    <li class="font-2">Chính sách trả hàng</li>
                </ul>

                <ul>
                    <li class="font-1">VỀ WALKY STORE</li>
                    <li class="font-2">Giới thiệu</li>
                    <li class="font-2">Điều kiện sử dụng</li>
                    <li class="font-2">Chính sách bảo mật</li>
                </ul>

                <ul>
                    <li class="font-1">LIÊN HỆ CHÚNG TÔI</li>
                    <li class="font-4">
                        <i class="fa-brands fa-facebook font-3"></i>
                        <i class="fa-solid fa-envelope"></i>
                    </li>
                </ul>
            </div>

            <div class="bct">
                <img src="./assets/img/Hình 7.png">
            </div>

            <div class="map">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.2312403776427!2d106.80086541488589!3d10.870008892258063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAtIMSQSFFHIFRQLkhDTQ!5e0!3m2!1svi!2s!4v1667485075915!5m2!1svi!2s" 
                width="300" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </footer>
    </div>

</body>
</html>