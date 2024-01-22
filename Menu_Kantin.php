<?php
session_start();
?>

<html>

<head>
    <title>Menu | Kansa</title>
    <!-- RESOURCE -->
    <?php include "Components/utilities/resources.html" ?>
    <?php include "Components/style/hover.html"?>
</head>


<!-- NAVBAR -->
<?php include "Components/navbar/navbar.php"; ?>

<body>
    <!-- CONTENT -->
    <div class="container  mx-auto px-10 mt-24 mb-10">
        <div class="mb-6 flex items-center justify-between">
            <h1 class="text-4xl font-bold ml-5 text-warning">All Foods</h1>
            <div class="relative flex items-center">
                <button class="mr-5">
                    <!-- Filter Icon -->
                    <?php include "Components/icon/filter.svg"; ?>
                </button>
                <div class="flex items-center relative">
                    <input type="text" id="searchInput" placeholder="Search here" class="input input-bordered pl-14"
                        autocomplete="off" required>
                    <!-- Search Icon -->
                    <?php include "Components/icon/search.svg"; ?>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            <p class="not-found hidden">Sorry, we don't have any of that :(</p>
            <!-- CALLING DATA -->
            <?php
                include 'database.php';
                $data = 'SELECT * FROM kh';
                $tampil = mysqli_query($conn ,$data);
            ?>
            <!-- FETCHING DATA -->
            <?php foreach ($tampil as $hasil) : ?>
            <!-- CARD -->
            <div class="card bg-gray-200 shadow-xl max-w-xs w-full hover:pointer transform transition-transform duration-300 hover:scale-110"
                onclick="goToTransaction(<?php echo $hasil['ID_Makanan']; ?>)">
                <figure><img src="Components/IMG_Web/Ayam Geprek.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title text-black">
                        <?php echo $hasil["Nama_Makanan"];?>
                    </h2>
                    <p class="text-black text-sm"><?php echo $hasil["prod_desc"];?></p>
                    <!-- Tombol -->
                    <div class="card-actions justify-between mt-4">
                        <div class="mt-3">
                            <div class="badge badge-warning">
                                <strong>Rp<?php echo number_format($hasil["Harga"]);?></strong>
                            </div>
                            <?php 
                                if ($hasil['category_id'] == 1)  {
                                    echo '<div class="badge badge-primary">Foods</div>';
                                } else {
                                    echo '<div class="badge badge-secondary">Drinks</div>';
                                }    
                            ?>
                        </div>
                        <span class="icon mt-3" onclick="handleFavoriteIconClick(event)">
                            <label class="swap swap-flip text-9xl">
                                <input type="checkbox" />
                                
                                <div class="swap-on">
                                    <!-- not Added -->
                                    <?php include "Components/icon/notAdded.svg"; ?>
                                </div>
                                <!-- When clicked -->
                                <div class="swap-off">
                                <?php include "Components/icon/added.svg"; ?>
                                </div>
                            </label>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include "Components/footer/footer.html"?>

    <!-- SCRIPT -->
    <?php include "Components/javascript/searchFood.php"; ?>

</body>

</html>