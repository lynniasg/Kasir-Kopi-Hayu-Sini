<?php
include "connect.php";
$no = (isset($_POST['No'])) ? htmlentities($_POST['No']) : "";
$pelanggan = (isset($_POST['Pelanggan'])) ? htmlentities($_POST['Pelanggan']) : "";
$pesanan = (isset($_POST['Pesanan'])) ? htmlentities($_POST['Pesanan']) : "";
$total = (isset($_POST['Total'])) ? htmlentities($_POST['Total']) : "";

if (!empty($_POST['submit_order_validate'])) {
    $query = mysqli_query ($conn, "INSERT INTO tb_pesanan (No, Pelanggan, Pesanan, Total) values ('$pelanggan', '$pesanan','$total','$no')");
    if (!$query) {
        $message = '<script>alert("Order gagal dimasukkan")</script>';
    } else {
        $message = '<script>alert("Order berhasil dimasukkan"); window.location="../index.php?x=order"</script>';
    }
}
?>