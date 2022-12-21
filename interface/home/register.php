<?php
include "connect.php";

//session_start();


if (isset($_POST['submit'])){

    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $dateofbirth = mysqli_real_escape_string($conn, $_POST['dateofbirth']);
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

    $select = "select * from khachhang where email = '$email' && sodienthoai = '$phone'";

    $result = mysqli_query($conn, $select);

    // ----------------
    $row = "select * from khachhang";
    $result1 = mysqli_query($conn, $row);
    $count_row = mysqli_num_rows($result1);
    $count_row1 = $count_row;
    // ----------------

    if (mysqli_num_rows($result) > 0){

        $error[] = 'Tài khoản này đã tồn tại';

    } else {


    $errors = [];
    $count_err = 0;

    //Validate fullname
    if (empty(trim($fullname))){
        $errors['fullname']['required'] = 'Họ tên không được để trống';
        $count_err++;
    }else{
        if (strlen(trim($fullname)) < 5){
            $errors['fullname']['min'] = 'Họ tên phải lớn hơn 5 ký tự';
            $count_err++;
        }
    }

    //Validate date of birth
    if (empty(trim($dateofbirth))){
        $errors['dateofbirth']['required'] = 'Ngày sinh không được để trống';
        $count_err++;
    }

    //Validate sex
    if (empty(trim($sex))){
        $errors['sex']['required'] = 'Giới tính không được để trống';
        $count_err++;
    }

    //Validate address
    if (empty(trim($address))){
        $errors['address']['required'] = 'Địa chỉ không được để trống';
        $count_err++;
    }

    //Validate email
    if(empty(trim($email))){
        $errors['email']['required'] = 'Email không được để trống';
        $count_err++;
    }else{
        if (!filter_var(trim($email), FILTER_VALIDATE_EMAIL)){
            $errors['email']['invalid'] = 'Email không hợp lệ';
            $count_err++;
        }
    }

    //Validate phone
    if (empty(trim($phone))){
        $errors['phone']['required'] = 'Số điện thoại không được để trống';
        $count_err++;
    }else{
        if (strlen(trim($phone)) != 10){
            $errors['phone']['invalid'] = 'Số điện thoại phải bao gồm 10 chữ số';
            $count_err++;
        }
    }

    //Validate password
    if (empty(trim($pass))){
        $errors['pass']['required'] = 'Mật khẩu không được để trống';
        $count_err++;
    }

    if (empty(trim($cpass))){
        $errors['cpass']['required'] = 'Cần nhập lại mật khẩu';
        $count_err++;
    }
        if ($count_err > 0){
            $error[] = 'Đăng ký lỗi, vui lòng kiểm tra lại thông tin đã nhập';
        }
        elseif ($pass != $cpass){
            $error[] = 'Mật khẩu không chính xác';
        }
        
        else{
            $insert = "insert into khachhang (hoten, ngaysinh, gioitinh, diachi, email, sodienthoai, matkhau) values ('$fullname', '$dateofbirth', '$sex', '$address', '$email', '$phone', '$pass')";
        mysqli_query($conn, $insert);
        $count_row1++;

        // $_SESSION["taikhoan"] = $fullname;

        header('location:login.php');
        }
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
    <title>Đăng ký</title>
    <link rel="icon" type="image/x-icon" href="./assets/img/logo waiky shoes NỀN.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<div class="modal" id="login">
        <div class="modal-overlay" id="login-close"></div>

        <div class="modal-body">
            <div class="auth-form">
                   <div class="auth-form-container">
                        <div class="auth-form-header">
                            <h3 class="auth-form-heading">Đăng ký</h3>
                            <!-- thêm 2 dòng -->
                            <p>Bạn đã có tài khoản?</p>
                            <span class="auth-form-switch"><a href="login.php">Đăng nhập</a></span>
                        </div>

                        <?php
                        
                        if (isset($error)){
                            foreach($error as $error){
                                echo $error;
                            }
                        }

                        ?>

                        <form class="auth-form-form" method="post">

                        <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập họ và tên" name="fullname"
                                value="<?php echo (!empty($_POST['fullname']))?$_POST['fullname']:false; ?>"><br>
        <?php
        echo (!empty($errors['fullname']['required']))?
        '<span style="color:red;">'.$errors['fullname']['required'].'</span>':false;
        
        echo (!empty($errors['fullname']['min']))?
        '<span style="color:red;">'.$errors['fullname']['min'].'</span>':false;
        ?>
                            </div>

                            <div class="auth-form-group">
                                <input type="date" class="auth-form-input" placeholder="Nhập ngày sinh" name="dateofbirth"
                                value="<?php echo (!empty($_POST['dateofbirth']))?$_POST['dateofbirth']:false; ?>"><br>
        <?php
        echo (!empty($error['dateofbirth']['required']))?
        '<span style="color:red;">'.$errors['dateofbirth']['required'].'</span>':false;
        ?>
                            </div>

                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập giới tính" name="sex"
                                value="<?php echo (!empty($_POST['sex']))?$_POST['sex']:false; ?>"><br>
        <?php
        echo (!empty($errors['sex']['required']))?
        '<span style="color:red;">'.$errors['sex']['required'].'</span>':false;
        ?>
                            </div>

                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập địa chỉ" name="address"
                                value="<?php echo (!empty($_POST['address']))?$_POST['address']:false; ?>"><br>
        <?php
        echo (!empty($errors['address']['required']))?
        '<span style="color:red;">'.$errors['address']['required'].'</span>':false;
        ?>
                            </div>

                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập email" name="email"
                                value="<?php echo (!empty($_POST['email']))?$_POST['email']:false; ?>"><br>
        <?php
        echo (!empty($errors['email']['required']))?
        '<span style="color:red;">'.$errors['email']['required'].'</span>':false;

        echo (!empty($errors['email']['invalid']))?
        '<span style="color:red;">'.$errors['email']['invalid'].'</span>':false;
        ?>
                               
                            </div>

                            <div class="auth-form-group">
                                <input type="text" class="auth-form-input" placeholder="Nhập số điện thoại" name="phone"
                                value="<?php echo (!empty($_POST['phone']))?$_POST['phone']:false; ?>"><br>
        <?php
        echo (!empty($errors['phone']['required']))?
        '<span style="color:red;">'.$errors['phone']['required'].'</span>':false;

        echo (!empty($errors['phone']['invalid']))?
        '<span style="color:red;">'.$errors['phone']['invalid'].'</span>':false;
        ?>
                            </div>

                            <div class="auth-form-group">
                                <input type="password" class="auth-form-input" placeholder="Nhập mật khẩu" name="pass"
                                value="<?php echo (!empty($_POST['pass']))?$_POST['pass']:false; ?>"><br>
        <?php
        echo (!empty($errors['pass']['required']))?
        '<span style="color:red;">'.$errors['pass']['required'].'</span>':false;
        ?>
                            </div>

                            <div class="auth-form-group">
                                <input type="password" class="auth-form-input" placeholder="Nhập lại mật khẩu" name="cpass"
                                value="<?php echo (!empty($_POST['cpass']))?$_POST['cpass']:false; ?>"><br>
        <?php
        echo (!empty($errors['cpass']['required']))?
        '<span style="color:red;">'.$errors['cpass']['required'].'</span>':false;
        ?>
                            </div>

                        <div class="auth-form-aside">
                            <p class="auth-form-policy-text">
                                Bằng việc đăng kí, bạn có thể mua sắm thỏa thích tại
                                <a href="" class="auth-form-text-link">Walky Store</a>.
                            </p>
                        </div>

                        <div class="auth-form-controls">
                            <button class="btn back"><a href="index.php">TRỞ LẠI</a></button>
                            <button class="btn btn--primary" name="submit">ĐĂNG KÝ</button>
                        </div>
</form>
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
                </div>
        </div> 
    </div>
    
</body>
</html>