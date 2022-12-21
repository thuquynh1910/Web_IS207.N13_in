<?php

include "../home/connect.php";
session_start();


if (isset($_POST['confirm']) && $_POST["confirm"] == "Xác nhận"){
    $email = $_POST['email'];
    $pre_pass = $_POST['pre_pass'];
    $new_pass = $_POST['new_pass'];
    $cnew_pass = $_POST['cnew_pass'];

    // $tbl_pass = mysqli_query($conn, "select matkhau from khachhang where email='$email'");
    
    // if ($pre_pass == $tbl_pass){
    //     if ($new_pass == $cnew_pass){
    //         $str = "update khachhang set matkhau = '$new_pass' where email = '$email'";
            
    //         if ($conn->query($str) == true){
    //             echo '<script>alert("Thay đổi mật khẩu thành công");</script>';
    //         }
    //         else{
    //             echo '<script>alert("Thay đổi mật khẩu không thành công");</script>';
    //         }
            
    //     }
    //     else if ($new_pass != $cnew_pass){
    //         echo '<script>alert("Xác nhận mật khẩu không chính xác");</script>';
    //     }
    // }
    // else{
    //     echo '<script>alert("Mật khẩu hiện tại không chính xác, vui lòng nhập lại");</script>';
    // }

    

    // original
    $str = "update khachhang set matkhau = '$new_pass' where email = '$email'";

    if ($conn->query($str) == true){
        echo '<script>alert("Thay đổi mật khẩu thành công");</script>';
    }
    else{
        echo '<script>alert("Thay đổi mật khẩu không thành công");</script>';
    }

    // $sql = "select * from khachhang where email = '$email' and matkhau = '$pre_pass'";
    // $row = mysqli_query($conn, $sql);
    // $count = mysqli_num_rows($row);

    // if ($count > 0){
    //     // if ($new_pass == $cnew_pass){
    //         $sql_update = mysqli_query($conn, "update khachhang set matkhau = '$new_pass' where email = '$email' and matkhau = '$pre_pass'");
    //         // echo '<p style="color:red;">Thay đổi mật khẩu thành công</p>';
    //         echo '<script>alert("Thay đổi mật khẩu thành công");</script>';
    //     // }
    //     // else{
    //     //     // echo '<p style="color:red;">Xác nhận mật khẩu không chính xác</p>';
    //     //     echo '<script>alert("Xác nhận mật khẩu không chính xác");</script>';
    //     // }
    // }
    // else{
    //     // echo '<p style="color:red;">Email hoặc mật khẩu không chính xác, vui lòng nhập lại</p>';
    //     echo '<script>alert("Email hoặc mật khẩu không chính xác, vui lòng nhập lại");</script>';
    // }
}

?>

<!DOCTYPE html>
<html lang="vie">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../home/assets/css/base.css">
    <link rel="stylesheet" href="../home/assets/css/reset.css">
    <link rel="stylesheet" href="../home/assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Shalimar&display=swap" rel="stylesheet">
    <title>Walky Store - Đổi mật khẩu</title>
    
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
                                    echo $_SESSION['user_name'];
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
                                    <a href="../home/logout.php">Đăng xuất</a>;                           
                                </li>
                            </ul>               
                        </div>
                    </li> 
                </ul>
            </nav>
        </header>

        <div class="container-1">
            <nav class="center_navbar">
                <ul>
                    <li>
                        <img class="logo" src="./assets/img/Logo.png" />
                    </li>
                </ul>

                <ul class="search">
                    <ul>
                        <li class="search-item item-1"><i class="fa-solid fa-magnifying-glass"></i></li>
                        <li class="search-item item-2">Tìm kiếm sản phẩm</li>
                        <li class="search-item item-3">Tìm kiếm</li>
                    </ul>
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
                        <a class="text-1" href="">GIỚI THIỆU</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="">LIÊN HỆ</a>
                    </li>
                </ul>  
            </div>
        </div>

        <!-- 
            code đổi mật khẩu
            
        -->
        <div id="doimatkhau-form">
            <div id="logo-lh">
                <a href="" class="lg-lh-icon">
                    <i class="fa-solid fa-phone"></i>
                </a>
                <br><br><br>
                <a href="" class="lg-lh-icon">
                    <i class="fa-brands fa-facebook-messenger"></i>
                </a>
            </div>
            
            <div class="infor-tk">
                <div class="taikhoan-kh">
                    <img class="img-infor" src="./assets/img/logo-infor.png" alt="anhdaidien"></td>
                    <div>
                        <p class="name-tk">Thanhngan_Dang</p>
                        <br>
                        <a style="text-decoration: none; color:black; font-size: 15px" href="">
                            Sửa hồ sơ
                        </a>
                    </div>
                    <hr>
                </div>
                <hr>
                <div>
                    <a href="../HoSoTaiKhoan/taikhoan.php"><h3>Tài khoản của tôi</h3></a>
                    <ul class="hoso">
                        <li><a href="../HoSoTaiKhoan/taikhoan.php">Hồ sơ</a></li>
                        <li><a href="../DoiMatKhau/changepass.php" style="color: #499BA4; font-weight: bold;">Đổi mật khẩu</a></li>
                    </ul>
                </div>
                <hr>
                <a href=""><h3>Đơn hàng đã đặt</h3></a>
                <hr>
                <a href=""><h3>Đăng xuất</h3></a>
            </div>

            <div class="doimatkhau">
                <h2>Đổi mật khẩu</h2>
                <br>
                <P>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác.</P>
                
                <form action="changepass.php" method="post">
                <table class="box-mk">
                    <tr>
                        <th class="tieude">Email </th>
                        <td class="box-dien"><input type="email" name="email"
                        value="<?php echo (!empty($_POST['email']))?$_POST['email']:false; ?>"></td>
                    </tr>
                    <tr>
                        <th class="tieude">Mật khẩu hiện tại </th>
                        <td class="box-dien"><input type="password" name="pre_pass"
                        value="<?php echo (!empty($_POST['pre_pass']))?$_POST['pre_pass']:false; ?>"></td>
                    </tr>
                    <tr>
                        <th class="tieude">Mật khẩu mới </th>
                        <td class="box-dien"><input type="password" name="new_pass"
                        value="<?php echo (!empty($_POST['new_pass']))?$_POST['new_pass']:false; ?>"></td>
                    </tr>
                    <tr>
                        <th class="tieude">Xác nhận mật khẩu </th>
                        <td class="box-dien"><input type="password" name="cnew_pass"
                        value="<?php echo (!empty($_POST['cnew_pass']))?$_POST['cnew_pass']:false; ?>"></td>
                    </tr>
                </table>
                
                
                <br>
                <a href="" style="margin-left: 520px; font-style: italic;">Quên mật khẩu?</a>
                <br><br>
                <!-- <button class="btn-tt" name="confirm">Xác nhận</button> -->
                <input class="btn-tt" type="submit" name="confirm" value="Xác nhận">
                </form>
            </div>
        </div>
        <center>
            <img class="logo-ft" src="./assets/img/Nike.png" alt="nike">
            <img class="logo-ft" src="./assets/img/MWC.png" alt="mwc">
            <img class="logo-ft" src="./assets/img/Biti's.png" alt="bitis">
            <img class="logo-ft" src="./assets/img/Converse.png" alt="converse">
            <img class="logo-ft" src="./assets/img/Adidas.png" alt="adidas">
        </center>
        <form class="footer" style="background-color: #B4E1E6;">
            <center>
                <img id="logo-shop" src="./assets/img/Logo.png"> 
            </center>
            <hr id="hr1">
            <hr id="hr2">
            <div id="Context-footer">
                <div id="footer-1">
                    <h4>HOTLINE LIÊN HỆ</h4>
                    <p>Mua hàng: 0332197131</p>
                    <p>Giờ mở cửa: 8h - 22h</p>
                </div>
        
                <div id="footer-2">
                    <h4 style="text-align:center">CHÍNH SÁCH CỬA HÀNG</h4>
                    <div id="footer-2-1">
                        <a href="">Hướng dẫn mua hàng</a><br><br>
                        <a href="">Chính sách thanh toán</a><br>
                        <a href="">Chính sách giao hàng</a><br><br>
                        <a href="">Chính sách đổi trả</a>
                    </div>
                </div>
        
                <div id="footer-3">
                    <h4>VỀ WALKY STORE</h4>
                    <a href="">Giới thiệu</a><br><br>
                    <a href="">Điều kiện sử dụng</a><br><br>
                    <a href="">Chính sách bảo mật</a>
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
            </div>           
            <div id="context-2">
                <div>
                    <h4>LIÊN HỆ VỚI CHÚNG TÔI</h4>
                    <a href="" ><img class="logo-f" src="./assets/img/logo-fb.png" ></a>
                    <a href="" ><img class="logo-f" src="./assets/img/logo-mail.png" ></a>
                </div>
                <img src="assets/img/Hình 7.png" >
            </div>
        </form> 
    </div>

    <!-- <div class="modal">
        <div class="modal-overlay"></div>

        <div class="modal-body"> -->
            <!-- <div class="auth-form">
                   <div class="auth-form-container">
                        <div class="auth-form-header">
                            <h3 class="auth-form-heading">Đăng ký</h3>
                            <span class="auth-form-switch">Đăng nhập</span>
                        </div>

                        <div class="auth-form-form">
                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập email">
                            </div>

                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập mật khẩu">
                            </div>

                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>

                        <div class="auth-form-aside">
                            <p class="auth-form-policy-text">
                                Bằng việc đăng kí, chào mừng bạn đã đến với
                                <a href="" class="auth-form-text-link">Walky Store</a>
                            </p>
                        </div>

                        <div class="auth-form-controls">
                            <button class="btn back">TRỞ LẠI</button>
                            <button class="btn btn--primary">ĐĂNG KÝ</button>
                        </div>
                   </div>

                    <div class="auth-form-socials">
                        <a href="" class="facebook btn size-s btn--with-icon">
                            <i class="socials-icon fab fa-facebook-square"></i>
                            <span class="facegoo">
                                Kết nối với Facebook
                            </span>
                        </a>
                        <a href="" class="google btn size-s btn--with-icon">
                            <i class="socials-icon fab fa-google"></i>
                            <span class="facegoo">
                                Kết nối với Google
                            </span>
                        </a>
                    </div>
                </div> -->

            <!-- <div class="auth-form">
                    <div class="auth-form-container">
                        <div class="auth-form-header">
                            <h3 class="auth-form-heading">Đăng nhập</h3>
                            <span class="auth-form-switch">Đăng ký</span>
                        </div>
 
                        <div class="auth-form-form">
                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Email">
                            </div>
 
                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Mật khẩu">
                            </div>
                        </div>
 
                        <div class="auth-form-aside">
                            <div class="auth-form-help">
                                <a href="" class="auth-form-help-link forgot">Quên mật khẩu</a>
                                <span class="auth-form-help-separate"></span>
                                <a href="" class="auth-form-help-link help">Cần trợ giúp?</a>
                            </div>
                        </div>
 
                        <div class="auth-form-controls">
                            <button class="btn back">TRỞ LẠI</button>
                            <button class="btn btn--primary">ĐĂNG KÝ</button>
                        </div>
                    </div>
 
                    <div class="auth-form-socials">
                        <a href="" class="facebook btn size-s btn--with-icon">
                            <i class="socials-icon fab fa-facebook-square"></i>
                            <span class="facegoo">
                                Kết nối với Facebook
                            </span>
                        </a>
                        <a href="" class="google btn size-s btn--with-icon">
                            <i class="socials-icon fab fa-google"></i>
                            <span class="facegoo">
                                Kết nối với Google
                            </span>
                        </a>
                    </div>
                </div> -->
        </div>
    </div>
</body>
</html>