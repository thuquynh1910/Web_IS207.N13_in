<?php
include "connect.php";

session_start();
$err = [];

if(isset($_POST['email'])) {

    $tendangnhap = $_POST['tendangnhap'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rpassword = $_POST['rpassword'];

    echo $email;

    if (empty($email)) {
        $err['email'] = 'Email is required'; 
    }
    if(empty($password)) {
        echo "Password is required"; 
    }
    if ($password != $rpassword) {
        echo "Two password do not match"; 
    }

    $sql = "INSERT INTO dangky(tendangnhap, email, password) VALUES ('$tendangnhap', '$email','$password')";
    $query = mysqli_query($conn, $sql);

    
    $_SESSION["taikhoan"] = $tendangnhap;
        
    header("Location: index.php");
    

    // var_dump($err);
    // die();

    

    // echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";


}

?>