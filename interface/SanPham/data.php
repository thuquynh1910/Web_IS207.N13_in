<?php
require("../home/connect.php");
$key = $_POST['id'];
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
?>
