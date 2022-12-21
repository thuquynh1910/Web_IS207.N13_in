<?php
session_start();
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
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="ajax.js" type="text/javascript"></script>
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

                <ul class="cart">
                    <li class="cart-1">
                        <div class="circle">1</div>
                    </li>
                    <li class="cart-2">
                        <a href="../GioHang/giohang.php">
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
                        <a class="text-1" href="../home/index.php">TRANG CHỦ</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="../SanPham/sanpham.php">SẢN PHẨM</a>
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

        <div id="sanpham">
            <div id="logo-lh">
                <a href="" class="lg-lh-icon">
                    <i class="fa-solid fa-phone"></i>
                </a>
                <br><br><br>
                <a href="" class="lg-lh-icon">
                    <i class="fa-brands fa-facebook-messenger"></i>
                </a>
            </div>
            
            <div id="danhmuc">
                <h2>DANH MỤC </h2><br><br>
                <h3>THƯƠNG HIỆU</h3><br>
                <select id="thuonghieu" class="thuonghieu">
                    <?php
                        $index = 0;
                        include "../home/connect.php";
                        $sql = "select * from thuonghieu";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)){
                            echo '<option class="list-sp" value="'.$row['mathuonghieu'].'">'.$row['tenthuonghieu'].'</option>';
                            $index = 5;
                        }
                    ?>
                </select>
                
                <div class="ds-loc">
                    <h3>LỌC THEO SIZE</h3><br>
                    <select class="loc">
                        <option></option>
                        <option>30-34 Nữ</option>
                        <option>35-40 Nữ</option>
                        <option>30-34 Nam</option>
                        <option>35-40 Nam</option>
                    </select>
                </div>
                <div class="ds-loc">
                    <h3>LỌC THEO GIÁ</h3><br>
                    <select class="loc">
                        <option></option>
                        <option>250000-500000đ</option>
                        <option>500001-100000đ</option>
                        <option>1000001-2000000đ</option>
                        <option>>2000000đ</option>
                    </select>
                </div>
                <div class="ds-loc">
                    <h3>LỌC MÀU SẮC</h3><br>
                    <select class="loc">
                        <option></option>
                        <option>White</option>
                        <option>Black</option>
                        <option>Cream</option>
                        <option>Khác</option>
                    </select>
                </div>
            </div>
            <div id="danhsachsp">
                <img class="anhqc" style="margin-left:20px" src="./assets/img/anhqc1.png" alt="anh1">
                <img class="anhqc" src="./assets/img/anhqc2.png" alt="anh2">
                <div id="ds-sp" class="sanpham">
                    <?php
                    if ($index == 5){
                        require("../home/connect.php");
                        $key = 1;
                        $sql = "select * from sanpham where mathuonghieu = '$key'";
                        $sql1 = "select * from thuonghieu where mathuonghieu = '$key'";
                        $query = mysqli_query($conn, $sql);
                        $query1 = mysqli_query($conn, $sql1);
                        $row_th = mysqli_fetch_array($query1);
                        $num = mysqli_num_rows($query);
                        if ($num > 0){
                            while ($row_sp = mysqli_fetch_array($query)){
                                echo '<div class="product">
                                            <a href="../ChiTietSanPham/chitietsanpham.php?masanpham='.$row_sp['masanpham'].'">    
                                                <img src="'.$row_sp['anh'].'" alt="'.$row_sp['tensanpham'].'">
                                                <h5 class="th-sp">'.$row_th['tenthuonghieu'].'</h5>
                                                <h4 class="name-sp">'.$row_sp['tensanpham'].'</h4>
                                                <p class="price">'.$row_sp['gia'].'</p>
                                                <p class="price-1">1.100.000đ</p>
                                            </a>
                                        </div>';
                            }
                        }
                    }
                    ?>
                </div>
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