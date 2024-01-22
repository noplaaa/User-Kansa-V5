<?php
    session_start();
    include 'database.php';
    include 'Components/utilities/order.php';
?>

<html>

<head>
    <title>Index - Kansa</title>
    <!-- RESOURCE -->
    <?php include "Components/utilities/resources.html" ?>
</head>

<body class="bg-gray text-white font-sans antialiased leading-none">

    <div class="container mx-auto mt-10 p-4 sm:p-10">
        <div class="card bg-gray-800 text-white">
            <div class="card-header">
                <h1 class="text-4xl text-warning ml-5"><strong>Checkout</strong></h1>
            </div>
            <div class="card-body">
                <!-- DETAIL -->
                <div class="sm:flex sm:space-x-4">
                    <div class="sm:w-2/3 mb-4 sm:mb-0">
                        <form action="Proses_Transaksi.php" method="POST">
                            <table class="table mb-20">
                                <tr>
                                    <td class="text-white">Order number</td>
                                    <td>:</td>
                                    <td>---</td>
                                </tr>
                                <tr>
                                    <td class="text-white">Order date</td>
                                    <td>:</td>
                                    <td><?php date_default_timezone_set('Asia/Jakarta'); echo date('d M Y / H.i') ?>
                                    </td>
                                </tr>
                            </table>
                            <!-- Rincian Pesanan -->
                            <div class="overflow-x-auto">
                                <center>
                                    <h5 class="font-bold text-white">Order Details</h5>
                                </center>
                                <table class="table mt-5">
                                    <!-- head -->
                                    <thead>
                                        <tr>
                                            <th class="text-white">Name</th>
                                            <th class="text-white">Order</th>
                                            <th class="text-white">Stock(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- row 1 -->
                                        <tr>
                                            <td>
                                                <div class="flex items-center space-x-3">
                                                    <div class="avatar">
                                                        <div class="mask mask-squircle w-12 h-12">
                                                            <img src="IMG_Web/User.png" />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="font-bold"><?php echo $Nama_Siswa?></div>
                                                        <span class="badge badge-ghost badge-sm mt-2"><a
                                                                href="detail.php">#<?php echo $ID_Siswa ?></a></span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $Nama_Pesanan ?></td>
                                            <td><?php echo $pesan["Stok"] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>

                    <!-- TRANSACTION FORM -->
                    <div class="sm:w-1/3">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="form-group">
                                <label for="" class="font-bold text-white">Price</label> <br>
                                <input class="input input-bordered w-full max-w-xs mt-2" type="text" name="harga"
                                    readonly required class="form-control hartot" placeholder="Total Harga"
                                    value="Rp<?php echo number_format($pesan["Harga"]); ?>">
                            </div>

                            <div class="form-group">
                                <label for="" class="font-bold text-white">Amount</label> <br>
                                <input class="input input-bordered w-full max-w-xs mt-2" type="number" name="jumlah"
                                    class="form-control diskon" min="0" max="5" id="jumlahInput"
                                    placeholder="Input quantity" onchange="hitungTotalBayar()">
                            </div>

                            <div class="form-group">
                                <label for="" class="font-bold text-white">Payment total</label> <br>
                                <input class="input input-bordered input-info w-full max-w-xs mt-2" type="number"
                                    readonly class="form-control totbayar" required id="totalBayarInput"
                                    placeholder="Your total payment">
                            </div>

                            <div class="form-group">
                                <label for="pembayaran" class="font-bold text-white">Payment nominal</label> <br>
                                <input class="input input-bordered w-full max-w-xs mt-2" type="number" min="1"
                                    class="form-control nominal" required name="nominal" id="nominal"
                                    placeholder="example : 5000" onchange="hitungKembalian()">
                            </div>

                            <div class="form-group">
                                <label for="Metode" class="font-bold text-white">Payment method</label> <br>
                                <select name="metode_pembayaran" class="select select-bordered w-full max-w-xs mt-2">
                                    <?php
                                        $query = mysqli_query($conn, "SELECT * FROM pembayaran");
                                        while ($metode = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $metode["metode"] . '">' . $metode["metode"] . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="kembalian" class="font-bold text-white">Change</label> <br>
                                <input class="input input-bordered input-warning w-full max-w-xs mt-2" type="number"
                                    readonly class="form-control kembalian" required name="kembalian" id="kembalian"
                                    placeholder="Your change">
                            </div>

                            <div class="form-group col-span-2 mt-5">
                                <button class="btn btn-accent btn-block" name="button">Order now</button> <br> <br>
                                <a href="Menu_Kantin.php" class="btn btn-neutral btn-outline"
                                    style="width:100%;">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <?php include "Components/javascript/transaction.php"; ?>

</body>

</html>