<?php

@include 'config.php';
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

        if (strpos($row['email'], 'admin')){

            //$_SESSION['admin_name'] = $row['name']; //dùng để chuyển thành tài khoản
            header('location:../homepage interface/admin_page.php');
        }
        elseif(!strpos($row['email'], 'admin')){

            //$_SESSION['user_name'] = $row['name'];
            header('location:../homepage interface/index_user.php');
        }
        // chuột phải giữa màn hình này là chạy rồi nên mình stop trucows

        // if ($row['fullname'] == 'Đặng Thị Thanh Ngân'){

        //     $_SESSION['admin_name'] = $row['name'];
        //     header('location:index_user.php');
        // }
        // elseif($row['user_type'] == 'user'){

        //     $_SESSION['user_name'] = $row['name'];
        //     header('location:index_user.php');
        // }
    }
    else{

    $error[] = 'Email hoặc mật khẩu không chính xác';
}
        
    
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
<div class="modal">
        <div class="modal-overlay"></div>
        <!-- cần bọc trong class modal-body -->
        <div class="modal-body">
        <div class="auth-form">
                    <div class="auth-form-container">
                        <div class="auth-form-header">
                            <h3 class="auth-form-heading">Đăng nhập</h3>
                            <!-- thêm 2 dòng -->
                            <p>Bạn chưa có tài khoản?</p>
                            <span class="auth-form-switch"><a href="register.php">Đăng ký<a></span>
                        </div>

                        <?php
                        
                        if (isset($error)){
                            foreach($error as $error){
                                echo $error;
                            }
                        }

                        ?>
                        <!-- -------------- -->
                        <form action="" method="POST">
                        <div class="auth-form-form">
                            <div class="auth-form-group">
                                <!-- thêm name, sửa text ->  email -->
                                <input type="email" class="auth-form-input" name="email" placeholder="Email">
                      
                            </div>
 
                            <div class="auth-form-group">
                                <!-- thêm name, sửa text -> password -->
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
                            <!-- thêm link về homepage -->
                            <button class="btn back"><a href="index_user.php">TRỞ LẠI</a></button>
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