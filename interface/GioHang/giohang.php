<?php
session_start();
include "../home/connect.php";

if (isset($_SESSION['giohang'])){
    
    if (isset($_POST['deletecart']) && ($_POST['deletecart']) == 'Xóa giỏ hàng'){
        
            unset ($_SESSION['giohang']);
        
    }
}

?>

<!DOCTYPE html>
<html lang="vie">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.2.0-web/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Shalimar&display=swap" rel="stylesheet">
    <title>Walky Store - Giỏ hàng</title>
</head>

<!--header-->
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
                                        <img src="./assets/img/Biti's/4Bitis Hunter X Cut-Out.jpg" alt="" class="notify-img">
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
                                        <img src="./assets/img/Nike/7Nike Blazer -1.jpg" alt="" class="notify-img">
                                        <div class="notify-info">
                                            <span class="notify-name">Nike - Nike Blazer Mid ’77 Vintage</span>
                                            <span class="notify-descriotion">Mang phong cách của những năm 70. Phần trên bằng da sắc nét đến khó tin của nó được bẻ thành một cách đẹp mắt</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="notify-item">
                                    <a class="notify-link" href="">
                                        <img src="./assets/img/MWC/5MWC 5387 -1.jpg" alt="" class="notify-img">
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

                <ul class="namepage">
                    <li>
                        <h2>| GIỎ HÀNG</h2>
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
    <!--phần code giỏ hàng-->
        <div id="giohang">
            <div id="logo-lh">
                <a href="" class="lg-lh-icon">
                    <i class="fa-solid fa-phone"></i>
                </a>
                <br><br><br>
                <a href="" class="lg-lh-icon">
                    <i class="fa-brands fa-facebook-messenger"></i>
                </a>
            </div>

            <div class="danhsachdh">

            

                <div class="tieude">
                    <div>
                        <input type="checkbox" placeholder="Sản phẩm">
                        <label>Sản phẩm (3)</label>
                    </div>
                    <h3>&nbsp</h3>
                    <h3>Kích cỡ</h3>
                    <h3>Đơn giá</h3>
                    <h3>Số lượng</h3>
                    <h3>Thành tiền</h3>
                    <h3></h3>
                </div>
                <br><br><br>
                
                <?php
                $count_cart = 0;
                $count_amount = 0;
            if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)){
                
                echo '<form method="get">';
                    //thêm từ session
                    foreach ($_SESSION['giohang'] as $item){

                        $tt = $item[3] * $item[6];
                    
                        echo '<div class="thongtin-sp">
                                    <div class="sanpham">
                                        <input type="checkbox">
                                        <img class="anhsp" src="./assets/img/Converse/'.$item[2].'" alt="'.$item[1].'">
                                        <p class="tensp">'.$item[1].'</p>
                                    </div>
                                    <p class="kichco">'.$item[5].'</p>
                                    <p class="dongia">'.$item[3].'</p>
                                    <input class="soluong" type="text" placeholder="1" value="'.$item[6].'" readonly>
                                    <p class="thanhtien">'.$tt.'</p>
                                    <p><a href="xoatungsp.php?magiohang='.$item[0].'">Xóa</a></p>
                                </div>
                                <hr>';
                        $count_cart+=$item[6];
                        $count_amount+=$tt;
                    }
                echo '</form>';
                
            }
            //Button Xóa giỏ hàng
            echo '<form action="" method="POST">';
            if (isset($_SESSION['giohang'])){
                
                echo '<input type="submit" value="Xóa giỏ hàng" name="deletecart"></input>';
                $delete_cart = "delete from giohang";
                mysqli_query($conn, $delete_cart);

                
            }
            //Button tiếp tục mua hàng
            echo '<button><a href="../home/index.php">Tiếp tục mua hàng</a></button>';
            echo '</form>';



            ?>
            
                <div class="note-dh">
                    <h3 class="demuc">Ghi chú đơn hàng</h3>
                    <p style="width: 860px; height: 250px;">
                    
                    </p>
                </div>

                <div class="output-dh">
                    <h3 class="demuc">Xuất hóa đơn cho đơn hàng</h3>
                    <p style="width: 860px; height: 250px;">
                    
                    </p>
                </div>
            </div>     
            
            <div class="text-right">
                <div class="thongtin-dh">
                    <h2 style="margin-top: 5px;text-align: left; font-weight: bold;">THÔNG TIN ĐƠN HÀNG</h2>
                    <hr>
                    <table class="hoadon">
                        <tr>
                            <th>Tổng sản phẩm: </th>
                            <td><?=$count_cart?></td>
                        </tr>
                        <tr>
                            <th>Tổng tiền: </th>
                            <td class="span-red"><?=$count_amount?> đ</td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td style="color: gray">Đã bao gồm VAT</td>
                        </tr>
                    </table>
                    <hr>
                    <p>Phí vận chuyển được tính ở trang thanh toán.</p>
                    <p>Bạn có thể nhập mã giảm giá ở trang thanh toán.</p>
                    <br><br>
                    <center>
                        <a href="../ThanhToan/thanhtoan.php"><button id="btn-thanhtoan">Thanh toán</button></a>
                    </center>
                </div>
                <br><br>
                <div class="banggiamgia">
                    <div class="magiamgia">
                        <img src="./assets/img/Logo.png" alt="logo-shop">
                        <ul>
                            <li>Giảm 45.000đ</li>
                            <li>Đơn hàng từ 300.000đ</li>
                            <li>Mã <span class="span-red">WALKY2022</span></li>
                            <li>HSD: 30/12/2022</li>
                        </ul>
                    </div>
          
                    <div class="magiamgia">
                        <img src="./assets/img/Logo.png" alt="logo-shop">
                        <ul>
                            <li>Giảm 150.000đ</li>
                            <li>Đơn hàng từ 300.000đ</li>
                            <li>Mã <span class="span-red">WALKY2033</span></li>
                            <li>HSD: 30/12/2022</li>
                        </ul>
                    </div>
                    <div class="text-giamgia-1">
                        <p>Coupon không dùng chung với chương trình khuyến mãi, quà tặng.</p>
                    </div>
                    <br><br>
                    <div class="text-giamgia-2">
                        <p>Để nhận tư vấn hoặc hỗ trợ khi phát sinh khó khăn trong lúc mua hàng. hãy liên hệ Walky Store thông qua: </p>
                        <ul>
                            <li>Gọi 09xxxxxxxx (cho Việt Nam)</li>
                            <li>Email tới địa chỉ walkystore_tuvan@gmail.com.vn (cho Việt Nam & quốc tế)</li>
                        </ul>
                        <br><br>
                        <p>For further support, please contact us via: </p>
                        <ul>
                            <li>Mobile phone: 09xxxxxxxx (for Vietnam only)</li>
                            <li>Email walkystore_tuvan@gmail.com.vn (for Vietnam & worldwide order)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        


        <div id="quangcao">
            <div id="hinhanh-qc">
                <a href="">
                    <img class="anh-sp" src="./assets/img/Nike/7Nike Blazer -1.jpg" alt="anh1">
                    <p class="ten-sp">Giày Blazer Mid '77 Vintage</p>
                    <br>
                    <p class="gia-sp">2.929.000đ</p>
                </a>
            </div>
            <div id="hinhanh-qc">
                <a href="">
                    <img class="anh-sp" src="./assets/img/MWC/2MWX 5345 -1.jpg" alt="anh2">
                    <p class="ten-sp">Giày MWC NATT - 5345</p>
                    <br>
                    <p class="gia-sp">295.000đ</p>
                </a>
            </div>
            <div id="hinhanh-qc">
                <a href="">
                    <img class="anh-sp" src="./assets/img/Biti's/9Bitis Hunter X Liteplex -1.jpg" alt="anh3">
                    <p class="ten-sp">Giày Hunter X Liteplex</p>
                    <br>
                    <p class="gia-sp">1.000.000đ</p>
                </a>
            </div>
            <div id="hinhanh-qc">
                <a href="">
                    <img class="anh-sp" src="./assets/img/Converse/7Converse Chuck Gradient -2.jpg" alt="anh4">
                    <p class="ten-sp">Giày Chuck Taylor All Star Gradient Colorblocked</p>
                    <br>
                    <p class="gia-sp">1.600.000đ</p>
                </a>
            </div>
            <div id="hinhanh-qc">
                <a href="">
                    <img class="anh-sp" src="./assets/img/Adidas/2Adidas Puremotion SE -2.jpg" alt="anh5">
                    <p class="ten-sp">Giày Puremotion SE</p>
                    <br>
                    <p class="gia-sp">1.000.000đ</p>
                </a>
            </div>
        </div>
    
    <!--footer-->   
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