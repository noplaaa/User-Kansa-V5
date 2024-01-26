<?php
    session_start();
    include '../../../config/database.php';
    include '../../../components/utilities/order.php';
?>

<html>

<head>
    <title>Index - Kansa</title>
    <!-- RESOURCE -->
    <?php include "../../../components/utilities/resources.html" ?>
</head>

<body class="bg-[BFD8AF] text-gray-800 font-sans antialiased leading-none">

    <!-- Containers -->
    <div class="container sm:p-5 lg:p-10 flex mx-auto space-x-3">

        <!-- Card Transaction -->
        <div class="card bg-[FAF8ED] w-full h-full text-gray-800 shadow-2xl">
            <div class="card-header">
                <h1 class="sm:text-2xl lg:text-4xl text-gray-800 pl-10 pt-7"><strong>Payment Details</strong></h1>
            </div>
            <div class="card-body">
                <form action="Proses_Transaksi.php" method="POST" class="grid grid-cols-2 gap-4">
                    <!-- Input 1 -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-gray-800 font-bold">Payment Nominal</span>
                        </label>
                        <input type="number" class="input input-bordered" name="nominal" id="nominal"
                            placeholder="example : 5000" onchange="hitungKembalian()" min="1" required >
                    </div>

                    <!-- Input 2 -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-gray-800 font-bold">Price :</span>
                        </label>
                        <input type="text" name="harga" value="Rp<?php echo number_format($pesan["Harga"]); ?>" min="0"
                            max="5" name="input3" class="input input-bordered" placeholder="Input 3" disabled>
                    </div>

                    <!-- Input 3 -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-gray-800 font-bold">Payment method</span>
                        </label>
                        <select name="metode_pembayaran" class="select select-bordered w-full mt-2">
                            <?php
                                        $query = mysqli_query($conn, "SELECT * FROM pembayaran");
                                        while ($metode = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $metode["metode"] . '">' . $metode["metode"] . '</option>';
                                        }
                                    ?>
                        </select>
                    </div>

                    <!-- Input 4 -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-gray-800 font-bold">Total Price</span>
                        </label>
                        <input type="number" id="totalBayarInput" class="input input-bordered" type="number" 
                            class="form-control totbayar" placeholder="Your total payment" readonly>
                    </div>

                    <!-- Input 5 -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-gray-800 font-bold">Quantity</span>
                        </label>
                        <input type="number" name="jumlah" class="input input-bordered w-full" min="0" max="5"
                            id="jumlahInput" placeholder="Input quantity" onchange="hitungTotalBayar()">
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="btn btn-success hover:text-white w-full mb-5">SUBMIT</button>
                        <a href="menu.php" class="btn btn-error w-full hover:text-white">CANCEL</a>
                    </div>

                </form>
            </div>
        </div>


        <!-- Card Details -->
        <div class="card bg-[99BC85] shadow-2xl w-fit text-gray-800 h-fit">
            <div class="card-header">
                <h1 class="sm:text-2xl lg:text-4xl text-gray-800 flex justify-center pt-7"><strong>Order
                        Details</strong></h1>
            </div>

            <div class="card-body w-max  h-fit">
                <form action="Proses_Transaksi.php" method="POST">
                    <h5 class="font-bold text-gray-800 mb-2">Purchase notes :</h5>
                    <table class="table mb-5">
                        <tr>
                            <td class="text-gray-800">Order number</td>
                            <td>:</td>
                            <td>---</td>
                        </tr>
                        <tr>
                            <td class="text-gray-800">Order date</td>
                            <td>:</td>
                            <td><?php date_default_timezone_set('Asia/Jakarta'); echo date('d M Y / H.i') ?>
                            </td>
                        </tr>
                    </table>
                    <!-- Rincian Pesanan -->
                    <div class="overflow-x-auto">
                        <h5 class="font-bold text-gray-800 mb-5">Your order(s) :</h5>
                        <table class="table">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th class="text-gray-800">Name</th>
                                    <th class="text-gray-800">Order</th>
                                    <th class="text-gray-800">Stock(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- row 1 -->
                                <tr>
                                    <td>
                                        <div class="flex items-center space-x-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle w-7 h-7">
                                                    <img src="IMG_Web/User.png" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold text-xs"><?php echo $Nama_Siswa?></div>
                                                <span class="badge badge-ghost badge-sm"><a
                                                        href="detail.php">#<?php echo $ID_Siswa ?></a></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-xs"><?php echo $Nama_Pesanan ?></td>
                                    <td class="text-xs"><?php echo $pesan["Stok"] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <?php include "../../../components/javascript/transaction.php"; ?>

</body>

</html>