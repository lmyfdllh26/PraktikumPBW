<?php
$conn = mysqli_connect("localhost", "root", "", "portfolio_jay");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>