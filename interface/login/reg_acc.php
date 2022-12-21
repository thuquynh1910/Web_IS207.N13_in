<?php
$error = [];
$success=1;
@include 'config.php';
if (isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpass']);

    $select = "select * from taikhoan_kh where tendangnhap = '$username'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0){

        $error[] = 'Tài khoản đã tồn tại';

    } else {
        $count_err = 0;
        //Validate fullname
if (empty(trim($username))){
    $errors['username']['required'] = 'Tên đăng nhập không được để trống';
    $count_err++;
}else{
    if (strlen(trim($username)) < 5){
        $errors['username']['min'] = 'Tên đăng nhập phải lớn hơn 5 ký tự';
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

if($count_err > 0){
    $error[] = 'Đăng ký lỗi, vui lòng kiểm tra lại thông tin đã nhập';
}
        elseif ($pass != $cpass){
            $error[] = 'Mật khẩu không chính xác';
        }
        else{
            $error = '';
            $insert = "insert into taikhoan_kh (tendangnhap, matkhau) values ('$username', '$pass')";
        mysqli_query($conn, $insert);
        header('location:login.php');
        }
    }
}

if ($error == ''){
    $success = 1;
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
<div class="modal">
        <div class="modal-overlay"></div>

        <div class="modal-body">
            <div class="auth-form">
                   <div class="auth-form-container">
                        <div class="auth-form-header">
                            <h3 class="auth-form-heading">Đăng ký</h3>
                            <!-- thêm 2 dòng -->
                            <p>Bạn đã có tài khoản?</p>
                            <span class="auth-form-switch"><a href="login.php">Đăng nhập<a></span>
                        </div>

                        <?php
                        
                        if (isset($error)){
                            foreach($error as $error){
                                echo $error;
                            }
                        }

                        ?>

                        <form class="auth-form-form" method="post">

                        <div class="auth-form-group">Tên đăng nhập
                                <input type="text" class="auth-form-input" placeholder="Nhập tên đăng nhập" name="username"
                                value="<?php echo (!empty($_POST['username']))?$_POST['username']:false; ?>"><br>
        <?php
        echo (!empty($errors['username']['required']))?
        '<span style="color:red;">'.$errors['username']['required'].'</span>':false;

        
        echo (!empty($errors['username']['min']))?
        '<span style="color:red;">'.$errors['username']['min'].'</span>':false;
        ?>
                            </div>

                            <div class="auth-form-group">Mật khẩu
                                <input type="text" class="auth-form-input" placeholder="Nhập mật khẩu" name="pass"
                                value="<?php echo (!empty($_POST['pass']))?$_POST['pass']:false; ?>"><br>
        <?php
        echo (!empty($errors['pass']['required']))?
        '<span style="color:red;">'.$errors['pass']['required'].'</span>':false;
        ?>
                            </div>

                            <div class="auth-form-group">Nhập lại mật khẩu
                                <input type="text" class="auth-form-input" placeholder="Nhập lại mật khẩu" name="cpass"
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
                            <!-- thêm link về homepage -->
                            <button class="btn back"><a href="index_user.php">TRỞ LẠI</a></button>
                            <button class="btn btn--primary" name="submit" id="submited">ĐĂNG KÝ</button>
                            <!-- xuất hiện giao diện đã đăng nhập  -->
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>

        var success = <?php echo json_encode($success); ?>;
         alert (success);
        // $("#submited").click(function(){

        //      if (success == 1){
        //         Swal.fire(
        //         "Chúc mừng!",
        //         "Bạn đã đăng ký tài khoản thành công",
        //         "success",
        //     );
        //      }
        // })

//         Swal.fire(
//   'Good job!',
//   'You clicked the button!',
//   'success'
// )

    </script>
</body>


</html>