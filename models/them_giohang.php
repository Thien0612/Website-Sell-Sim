<?php
$conn = mysqli_connect('localhost', 'root', '', 'khachsan');	
session_start();
if (!isset($_SESSION['id_giohang'])) {

    $_SESSION['id_giohang'] = 87;
}
$id_cart = $_SESSION['id_giohang'];

if(isset($_GET['id_phong'])){
    $id_product = ($_GET['id_phong']);
    $soluong = ($_POST['sophong']);
    $ngaynhan = ($_POST['ngaynhan']);
    $ngaytra = ($_POST['ngaytra']);
    // Sử dụng prepared statement để tránh SQL injection
    $sql_check_product = "SELECT * FROM chitietgiohang WHERE id_giohang = ? AND id_phong = ?";
    $stmt_check_product = $conn->prepare($sql_check_product);
    $stmt_check_product->bind_param("ii", $id_cart, $id_product);
    $stmt_check_product->execute();
    $result = $stmt_check_product->get_result();

    if ($result) {
        if ($result->num_rows > 0) {
            // Sử dụng prepared statement để tránh SQL injection
            $sql_update_quantity = "UPDATE chitietgiohang SET soluong = soluong + ? WHERE id_giohang = ? AND id_phong = ?  ";
            $stmt_update_quantity = $conn->prepare($sql_update_quantity);
            $stmt_update_quantity->bind_param("iii", $soluong, $id_cart, $id_product);
            $stmt_update_quantity->execute();
        } else {
            // Sử dụng prepared statement để tránh SQL injection
            $sql_addtocart = "INSERT INTO chitietgiohang(id_giohang, id_phong, soluong) VALUES (?, ?, ?)";
            $stmt_addtocart = $conn->prepare($sql_addtocart);
            $stmt_addtocart->bind_param("iii", $id_cart, $id_product, $soluong);
            $stmt_addtocart->execute();
        }
    }
}
header('location: ../views/front/cart.tpl.php');

?>
