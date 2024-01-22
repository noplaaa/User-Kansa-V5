<?php
$ID_Makanan = $_GET["kode"];
$ID_Siswa = $_SESSION["ID_User"];
$Nama_Siswa = $_SESSION["Nama_User"];
$sql = mysqli_query($conn, "SELECT * FROM kh,user WHERE ID_Makanan = $ID_Makanan");
$pesan = mysqli_fetch_array($sql);
$Nama_Pesanan = $pesan["Nama_Makanan"];
$Harga = $pesan["Harga"];
?>