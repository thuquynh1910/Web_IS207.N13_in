<?php

@include 'connect.php';
session_start();



if (isset($_POST['submit'])){
    //print_r($_POST);
    // $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    // $dateofbirth = mysqli_real_escape_string($conn, $_POST['dateofbirth']);
    // $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    // $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    //$phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    //$cpass = mysqli_real_escape_string($conn, $_POST['cpass']);


    //$cpass = md5($_POST['cpassword']);

    $select = "SELECT * FROM khachhang WHERE email = '$email' && matkhau = '$pass'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0){
       
        $row = mysqli_fetch_array($result);

        if ($row['loaitaikhoan'] == 'admin'){

            $_SESSION['admin_name'] = $row['hoten'];
            header('location:index_.php');
        }
        elseif($row['loaitaikhoan'] == 'user'){

            $_SESSION['user_name'] = $row['hoten'];
            header('location:index.php');
        }
      
    }
    else{

    echo '<script>alert("Email hoặc mật khẩu không chính xác, vui lòng nhập lại");</script>';
    
    
    // $error_l[] = 'Email hoặc mật khẩu không chính xác';
}
        
    
}
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
    <title>Đăng nhập</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo waiky shoes NỀN.png">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<div class="modal" >
        <div class="modal-overlay"></div>
        <div class="modal-body">
        <div class="auth-form">
                    <div class="auth-form-container">
                        <div class="auth-form-header">
                            <h3 class="auth-form-heading">Đăng nhập</h3>
                            <p>Bạn chưa có tài khoản?</p>
                            <span class="auth-form-switch"><a href="register.php">Đăng ký</a></span>
                        </div>

                        <?php
                        
                        if (isset($error_l)){
                            foreach($error_l as $error_l){
                                echo $error_l;
                            }
                        }

                        ?>
                        <!-- -------------- -->
                        <form action="" method="POST">
                        <div class="auth-form-form">
                            <div class="auth-form-group">
                                <input type="email" class="auth-form-input" name="email" placeholder="Email">
                      
                            </div>
 
                            <div class="auth-form-group">
                                <input type="password" class="auth-form-input" name="pass" placeholder="Mật khẩu">
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
                            <button class="btn back"><a href="index.php">TRỞ LẠI</a></button>
                            <button class="btn btn--primary" name="submit">ĐĂNG NHẬP</button>
                        </div>
                    </div>
                        </form>
                        <!-- ---------------------- -->
                        
 
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
                </div>  
        </div>
            
        </div>
</body>
</html>