<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
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
            <ul class="logo-tt">
                <li class="logo-tt-1">
                    <img class="logo-shop" src="./assets/img/logo waiky shoes.png">
                </li>
                    
                <li class="ThanhToan">THANH TOÁN</li>
            </ul>
        </div>

        <div class="container-2">
            <div class="container-3">
                <h3 class="info-tt-1">THÔNG TIN GIAO HÀNG</h3>
                <p class="info-tt-2">Bạn đã có tài khoản? <a href="" class="info-tt-link"> Đăng nhập</a></p>
                <ul class="info-tt-3">
                    <li class="info-tt-3-1"><input class="info-tt-4" type="text" name="ten" placeholder="Họ và tên"></li>
                    <li class="info-tt-3-2"><input class="info-tt-4" type="text" name="ten" placeholder="Email"></li>
                    <li class="info-tt-3-3"><input class="info-tt-4" type="text" name="ten" placeholder="Số điện thoại"></li>
                    <li class="info-tt-3-4"><input class="info-tt-4" type="text" name="ten" placeholder="Địa chỉ"></li>
                </ul>
                <ul class="info-tt-5">
                    <li>
                        <select name="tinh" class="info-tt-6">
                            <option value="">Tỉnh / Thành</option>
                        </select>
                    </li>
                    <li>
                        <select name="tinh" class="info-tt-6 info-tt-7">
                            <option value="" >Quận / Huyện</option>
                        </select>
                    </li>
                    <li>
                        <select name="tinh" class="info-tt-6 info-tt-7">
                            <option value="" >Phường / Xã</option>
                        </select>
                    </li>
                </ul>
            </div>
                
            <div class="container-4">
                <div class="info-sp-1">
                    <img class="info-sp-2-1" src="./assets/img/Rectangle 18.png">
                    <ul class="info-sp-2-2">
                        <li class="info-sp-3">Giày Converse Chuck Taylor All Star Move</li>
                        <li class="info-sp-4">Đen / 39</li>
                    </ul>
                    <p class="info-sp-2-3">1,900,000đ</p>
                </div>

                <hr class="info-sp-5">

                <div class="info-sp-6">
                    <input class="info-sp-6-1" type="text" name="magiamgia" placeholder="Mã giảm giá">
                    <button type="button" class="info-sp-6-2">
                        Sử dụng
                    </button>
                </div>

                <div class="info-sp-7">
                    Mã giảm giá không áp dụng chung với các chương trình khuyến mãi bao gồm quà tặng, giảm giá.
                </div>

                <div class="info-sp-8">
                    <div class="circle"></div>
                    <div class="info-sp-9">Xem thêm mã giảm giá</div>
                </div>

                <hr class="info-sp-5">

                <div class="info-sp-10">
                    <div class="info-sp-11">
                        <p>Tạm tính</p>
                        <p class="info-sp-12">1,900,000đ</p>
                    </div>
                        
                    <div class="info-sp-11">
                        <p>Phí vận chuyển</p>
                        <p class="info-sp-13">40,000đ</p>
                    </div>
                </div>

                <hr class="info-sp-5">

                <div class="info-sp-11">
                    <p>Tổng cộng</p>
                    <p class="info-sp-14">1,940,000đ</p>
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
</body>
</html>