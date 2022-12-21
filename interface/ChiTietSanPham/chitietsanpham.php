<?php
session_start();
include "../home/connect.php";
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
if (isset($_POST['addtocart']) && ($_POST['addtocart']) == 'Thêm giỏ hàng'){
    

    $masanpham = $_POST['masanpham'];
    $tensanpham = $_POST['tensanpham'];
    $anhsanpham = $_POST['anhsanpham'];
    $giasanpham = $_POST['giasanpham'];
    $mausac = $_POST['mausac'];
    $kichthuoc = $_POST['kichthuoc'];
    $soluong = 1;
    $flag = 0;

    //$makhachhang = $_SESSION['makhachhang'];
    $makhachhang = 1;
    $insert_cart = "insert into giohang (masanpham, makhachhang, soluong) values ('$masanpham', '$makhachhang', '$soluong')";
    mysqli_query($conn, $insert_cart);
    //kiem tra sp da co trong giohang hay chua
    //neu co thi update so luong
    $i=0;
    foreach ($_SESSION['giohang'] as $items) {
        if ($items[1]===$tensanpham && $items[4]===$mausac && $items[5]===$kichthuoc){
            $_SESSION['giohang'][$i][6]+=$soluong;
            $flag=1;
            break;
        }
        $i++;
    }

    //neu chua thi them moi sp vao giohang
    if ($flag==0){
    $items = array($masanpham, $tensanpham, $anhsanpham, $giasanpham, $mausac, $kichthuoc, $soluong);
    $_SESSION['giohang'][]=$items;
    }
    header('location: ../GioHang/giohang.php');  
}

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
</head>
<body>
    <div class="app">
        <div class="huy">
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
                            <a class="text-1" href="http://127.0.0.1:5501/introduction%20interface/">GIỚI THIỆU</a>
                        </li>
                        <li class="list_menu">
                            <a class="text-1" href="http://127.0.0.1:5501/contact%20interface/index.html">LIÊN HỆ</a>
                        </li>
                    </ul>  
                </div>
            </div>
        <form method="GET">
            <?php
            $masanpham = $_GET['masanpham'];
            include "../home/connect.php";
            $sql = "select * from sanpham where masanpham = '$masanpham'";
            if ($conn->query($sql) == true){
                $rows = $conn->query($sql);
                $row = $rows->fetch_row();
                $ma_th = $row[4];
                $sql_th = "select * from thuonghieu where mathuonghieu = '$row[3]'";
                $rows_th = $conn->query($sql_th);
                $row_th = $rows_th->fetch_row();
            ?>
            <div class="container-3">
                <div class="product-info-img">
                    <img src="./assets/img/Adidas/<?php echo $row[8];?>" alt="<?php echo $row[8];?>" width="650">
                </div>
                <div class="product-info">
                    <ul>
                        <li class="product-info-name" name="tensanpham"><?php echo $row[1];?></li>

                        <li class="product-info-view">
                            <div class="product-info-view-1">10 Đánh giá</div>
                            <div class="product-info-view-2">32 Lượt mua</div>
                        </li>
                

                        <li class="product-info-gia" name="giasanpham"><?php echo $row[4];?></li>

                        <li class="product-info-color">
                            <input class="product-info-color-1" name="mausac" type="radio" value="" /><?php echo $row[5];?>
                            <input class="product-info-color-2" name="mausac" type="radio" value="" />Core Black 
                            <input class="product-info-color-3" name="mausac" type="radio" value="" />Cloud White
                        </li>

                        <li class="product-info-size">
                            <div class="square-db"><?php echo $row[7];?></div>
                            <div class="square">38</div>
                            <div class="square">39</div>
                            <div class="square">40</div>
                            <div class="square">41</div>
                            <div class="square">42</div>
                            <div class="square">43</div>
                        </li>

                        <li class="product-info-SL">
                            <p class="product-info-SL-1">Tồn kho</p>
                            <div class="buttons_added">
                                <input aria-label="quantity" class="input-qty" max="<?php echo $row[6];?>" min="1" name="" type="text" value="<?php echo $row[6];?>" readonly>
                            </div>
                        </li>

                        <li class="product-info-SL">
                            <p class="product-info-SL-1">Số lượng</p>
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-" name="">
                                <input aria-label="quantity" class="input-qty" max="<?php echo $row[6];?>" min="1" name="soluong" value="1">
                                <input class="plus is-form" type="button" value="+" name="">
                            </div>
                        </li>

                        <li class="product-info-add-1">MUA NGAY</li>

                        <!-- <input type="submit" value="Thêm giỏ hàng" class="product-info-add-2" name="addtocart"></input> -->
                    </ul>
                </div>

            </div>

            <div class="container-4">
                <h3 class="MT-1">MÔ TẢ</h3>
                <h4 class="MT-2">
                    <?php 
                    echo $row_th[1];
                    echo ' - ';
                    echo $row[1];?>
                </h4>
                <p class="MT-3"><?php echo $row[9];?></p>
                <h4 class="MT-2">Chi tiết sản phẩm</h4>
                <ul class="MT-5">
                    <li>Dáng regular fit</li>
                    <li>Có dây giày</li>
                    <li>Thân giày bằng vải lưới kỹ thuật</li>
                    <li>Cổ giày lót đệm Geofit</li>
                    <li>Phần quarter và kẹp ổn định gót bằng TPU</li>
                    <li>Đế giữa Bounce</li>
                    <li>Đế ngoài bằng cao su</li>
                    <li>Thân giày có chứa tối thiểu 50% thành phần tái chế</li>
                    <li>Màu sản phẩm: Flash Orange / Core Black / Cloud White</li>
                    <li>Mã sản phẩm: GZ6869</li>
                </ul>
            </div>
        <?php
        include "../home/connect.php";
        }
        else{
            echo 'Error: '.$conn->error;
        }
        ?>
        </form>

       
        <?php

        echo '<form action="" method="POST">
                    <input type="hidden" value="'.$row[0].'" name="masanpham">
                    <input type="hidden" value="'.$row[8].'" name="anhsanpham">
                    <input type="hidden" value="'.$row[1].'" name="tensanpham">
                    <input type="hidden" value="'.$row[4].'" name="giasanpham">
                    <input type="hidden" value="'.$row[7].'" name="kichthuoc">
                    <input type="submit" value="Thêm giỏ hàng" class="product-info-add-2" name="addtocart"></input>
            </form>';

        ?>
        

            <div class="container-5">
                <h3 class="MT-1">CÁC SẢN PHẨM TƯƠNG TỰ</h3>
                <ul class="MT-6">
                <?php
                $sql_sp = "select * from sanpham where mathuonghieu = '$row[3]'";
                $sql_th = "select * from thuonghieu where mathuonghieu = '$row[3]'";
                $query_sp = $conn->query($sql_sp);
                $query_th = $conn->query($sql_th);
                $row_th = $query_th->fetch_row();
                //if (mysqli_num_rows($conn, $row_pro) > 0){
                    while ($row_similar_pro = $query_sp->fetch_row()){
                        echo '<li>
                                    <a class="SP-link" href="../ChiTietSanPham/chitietsanpham.php?masanpham='.$row_similar_pro['0'].'">
                                        <img class="SP-img" src="./assets/img/Adidas/'.$row_similar_pro['8'].'">
                                        <div class="SP-mota">
                                            <p class="SP-mota-1">'.$row_th[1].'</p>
                                            <p class="SP-mota-2">'.$row_similar_pro[1].'</p>
                                            <p class="SP-mota-3">'.$row_similar_pro[4].'</p>
                                        </div>
                                    </a>
                                </li>';
                    }
                //}
                ?>
                
                </ul>
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
        <!-- </div> 
    </div> -->
</body>
</html>