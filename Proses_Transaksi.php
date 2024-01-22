<?php
error_reporting(0);
session_start();
include 'database.php';
if(isset($_POST['button'])){

    $ID_User = $_SESSION['ID_User'];
    $Nama_User = $_SESSION['Nama_User'];
    $ID_Makanan = $_POST['ID_Makanan'];
    $Nama_Makanan = $_POST['Nama_Makanan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $Stat =  $_POST['metode_pembayaran'];
    $total_harga = $harga * $jumlah;

    if(mysqli_query($conn, "INSERT INTO pesan (ID_User, Nama_Pemesan, Nama_Pesanan, Harga_Pesanan, Jumlah, Stat, Keterangan, 
    Total_Harga) VALUES ('$ID_User', '$Nama_User','$Nama_Makanan','$harga','$jumlah',
    '$Stat','','$total_harga')")) {

        $query = mysqli_query($conn, "SELECT * FROM kh WHERE ID_Makanan = $ID_Makanan");
        $GET = mysqli_fetch_array($query);
        $Stok = $GET['Stok'];
        $stokBaru  = $Stok - $jumlah;
        
        if ($Stok = 0) {
            ?>
            <script language="JavaScript">
                alert('Oops! jumlah pesananmu melebihi batas stok yang tersedia.');
                document.location='Transaksi.php';
            </script>
            <?php
        }
  
        else{
            $insert =mysqli_query($conn, "UPDATE pesan SET Keterangan='Pending' WHERE Keterangan=''");
                if($insert){
                    //update stok
                    $UpdateStok= mysqli_query($conn, "UPDATE kh SET Stok='$stokBaru' WHERE ID_Makanan='$ID_Makanan'");
                    echo "<h1> Pesanan Berhasil Dibuat! </h1>";
                    echo "<meta http-equiv=refresh content=1,5;URL='Menu_Kantin.php'>";
              
                }
                else {
                    echo "<b>Oops!</b> 404 Error Server";
                }
        }
    }
}

?>