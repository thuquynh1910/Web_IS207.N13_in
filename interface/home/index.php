<?php 
    // include "register.php";
    // include "login.php";
    include "connect.php";

    session_start();
    // if (!isset($_SESSION['user_name'])){
    //     $_SESSION['user_name'] = '#';
    // }
    // $fullname = $_SESSION['user_name'];

    
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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script> -->
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
                                    echo '  <li class="header_navbar-item header_navbar-item--strong header_navbar-item--separate"><a href="register.php">Đăng ký</a></li>
                                                <li class="header_navbar-item header_navbar-item--strong"><a href="login.php">Đăng nhập</a></li>';
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
                                    <a href="logout.php">Đăng xuất</a>;                           
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
                        <img class="logo" src="./assets/img/logo waiky shoes.png" />
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
                        <a class="text-1" href="http://127.0.0.1:5500/homepage%20interface/index.html">TRANG CHỦ</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="../SanPham/sanpham.php">SẢN PHẨM</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="">KHUYẾN MÃI</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="http://127.0.0.1:5500/introduction%20interface/">GIỚI THIỆU</a>
                    </li>
                    <li class="list_menu">
                        <a class="text-1" href="http://127.0.0.1:5500/contact%20interface/index.html">LIÊN HỆ</a>
                    </li>
                </ul>  
            </div>
        </div>

        <div class="container-3">
            <nav class="store-1">
                <p class="text-2">Chào mừng bạn đến với Walky Store!</p>
            </nav>
        </div>

        <div class="container-4">
            <div class="store-2" style="background-image: url('./assets/img/Ảnh.png');">
                <div class="store-2-info">
                    <p class="text-3">MỪNG KHAI TRƯƠNG</p>
                    <P class="text-4">WALKY STORE</P>
                    <P class="text-5">SALE <span class="sale">30%</span></P>
                    <P class="text-6">*Chương trình diễn ra từ ngày 20/10/2022 đến hết ngày 20/11/2022</P>
                </div>

                <div class="store-2-list">
                    <ul class="store-2-list-item-icon-1">
                        <img src="./assets/img/Left.png">
                    </ul>
                    
                    <!-- load sản phẩm mới -->
                    <?php
                        $sql1 = "select * from sanpham order by masanpham desc limit 5";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($row_sp1 = mysqli_fetch_array($result1)){
                            echo '<ul class="store-3-list-item">
                                        <li>
                                            <img class="store-3-list-item-img" src="./assets/img/MWC/'.$row_sp1['anh'].'" alt="'.$row_sp1['tensanpham'].'">
                                        </li>
                                        <li class="store-2-list-item-name">'.$row_sp1['tensanpham'].'</li>
                                        <li class="store-2-list-item-gia">'.$row_sp1['gia'].'đ</li>
                                    </ul>';
                        }
                    ?>

                    <ul class="store-2-list-item-icon-2">
                        <img src="./assets/img/Right.png">
                    </ul>
                </div>
            </div>
        </div>

        <center style="font-size: 80px; margin-top:50px; font-weight:bold;">BEST SELLER</center>

        <div class="container-5">
            <!-- load sản phẩm bán chạy nhất -->
            <div class="store-3">
            <?php
            $sql2 = "select * from sanpham order by masanpham asc limit 3";
            $result2 = mysqli_query($conn, $sql2);
            while ($row_sp2 = mysqli_fetch_array($result2)){
                echo '<ul class="store-3-list-item">
                            <li>
                                <img class="store-3-list-item-img" src="./assets/img/MWC/'.$row_sp2['anh'].'" alt="'.$row_sp2['tensanpham'].'">
                            </li>
                            <li class="store-2-list-item-name">'.$row_sp2['tensanpham'].'</li>
                            <li class="store-2-list-item-gia">'.$row_sp2['gia'].'đ</li>
                        </ul>';
            }
        ?>
            </div>

            <div class="store-4">
            <?php
            $sql2 = "select * from sanpham order by masanpham asc limit 3";
            $result2 = mysqli_query($conn, $sql2);
            while ($row_sp2 = mysqli_fetch_array($result2)){
                echo '<ul class="store-3-list-item">
                            <li>
                                <img class="store-3-list-item-img" src="./assets/img/MWC/'.$row_sp2['anh'].'" alt="'.$row_sp2['tensanpham'].'">
                            </li>
                            <li class="store-2-list-item-name">'.$row_sp2['tensanpham'].'</li>
                            <li class="store-2-list-item-gia">'.$row_sp2['gia'].'đ</li>
                        </ul>';
            }
        ?>
            </div>
        </div>

        <div class="container-6">
            <div class="store-5">
                <h3 class="define">DEFINE YOURSELF</h3>
                <img class="define-img" src="./assets/img/Rectangle 7.png">
            </div>
        </div>

        <div class="container-7">
            <div class="store-6">
            <!-- load sản phẩm -->
            <?php
            $sql2 = "select * from sanpham order by masanpham desc limit 6";
            $result2 = mysqli_query($conn, $sql2);
            while ($row_sp2 = mysqli_fetch_array($result2)){
                echo '<ul class="store-3-list-item">
                            <li>
                                <img class="store-3-list-item-img" src="./assets/img/MWC/'.$row_sp2['anh'].'" alt="'.$row_sp2['tensanpham'].'">
                            </li>
                            <li class="store-2-list-item-name">'.$row_sp2['tensanpham'].'</li>
                            <li class="store-2-list-item-gia">'.$row_sp2['gia'].'đ</li>
                            <!-- <li class="store-6-list-item-mt">Mô tả sản phẩm:</li> -->
                            <!-- <li class="store-6-list-item-mt">Giày được thiết kế kiểu dáng buộc dây sneaker cực ngầu, phong cách hiện đại, màu sắc khỏe khoắn.Với chất da PU cao cấp phối lưới chuyên dụng tạo cảm giác thoải mái cho bạn trong suốt quá trình vận động, mang lại một phong cách thật thời thượng mỗi khi xuống phố. Sản phẩm có thiết kế tinh tế cùng đường may tỉ mỉ, chắc chắn, thích hợp trong các hoạt động thể thao, dạo chơi, picnic,.</li> -->
                        </ul>';
            }
        ?>
            </div>

            <div class="store-7">
                <img src="./assets/img/Rectangle 3.png">
                <img src="./assets/img/Rectangle 4.png">
                <img src="./assets/img/Rectangle 5.png">
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

    <!-- register -->
    <!-- id="register" -->


    <!-- login -->
    
    <!-- <script src="./style.js"></script> -->
</body>
</html>