<?php
session_start();
?>

<html>

<head>
    <title>Menu | Kansa</title>
    <!-- RESOURCE -->
    <?php include "../../../components/utilities/resources.html" ?>
    <?php include "../../../components/style/hover.html"?>
</head>


<!-- NAVBAR -->
<?php include "../../../components/navbar/navbar.php"; ?>

<body class="bg-[BFD8AF]">
    <!-- CONTENT -->
    <div class="container mx-auto p-10 mb-10">
        <div class="mb-6 flex items-center justify-between sm:mt-5 lg:mt-24">
            <h1 class="font-bold ml-5 text-gray-800 sm:text-3xl md:text-3xl lg:text-4xl">All Foods</h1>
            <div class="relative flex items-center">
                <button class="mr-5 transform transition-transform duration-300 hover:scale-110">
                    <?php include "../../../components/icons/filter.svg"; ?> <!-- Filter Icon -->
                </button>
                <div class="flex items-center relative">
                    <input type="text" id="searchInput" placeholder="Search here" class="input input-bordered rounded-xl pl-14 sm:input-sm md:input-sm lg:input-md"
                        autocomplete="off" required>
                    <!-- Search Icon -->
                    <?php include "../../../components/icons/search.svg"; ?>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
            <p class="not-found hidden sm:text-xs md:text-sm lg:text-md">Sorry, we don't have any of that :(</p>
            <!-- CALLING DATA -->
            <?php
                include '../../../config/database.php';
                $data = 'SELECT * FROM kh';
                $tampil = mysqli_query($conn ,$data);
            ?>
            <!-- FETCHING DATA -->
            <?php foreach ($tampil as $hasil) : ?>
            <!-- CARD -->
            <div class="card bg-gray-200 shadow-2xl max-w-xs w-full hover:pointer transform transition-transform duration-300 hover:scale-110"
                onclick="goToTransaction(<?php echo $hasil['ID_Makanan']; ?>)">
                <figure><img src="../../../components/IMG_Web/Ayam Geprek.jpg" class="sm:hidden lg:flex"></figure>
                <div class="card-body sm:w-full sm:h-fit">
                    <h2 class="card-title text-black xs:text-xs sm:text-sm md:text-md lg:text-lg xl:text-xl">
                        <?php echo $hasil["Nama_Makanan"];?>
                    </h2>
                    <p class="text-black sm:text-xs md:text-sm lg:text-sm sm:hidden lg:flex"><?php echo $hasil["prod_desc"];?></p>
                    <!-- Tombol -->
                    <div class="card-actions justify-between">
                        <div class="mt-3">
                            <div class="badge badge-warning sm:badge-sm lg:badge-md">
                                <strong>Rp<?php echo number_format($hasil["Harga"]);?></strong>
                            </div>
                            <?php 
                                if ($hasil['category_id'] == 1)  {
                                    echo '<div class="badge badge-primary sm:badge-sm lg:badge-md">Foods</div>';
                                } else {
                                    echo '<div class="badge badge-secondary sm:badge-sm lg:badge-md">Drinks</div>';
                                }    
                            ?>
                        </div>
                        <span class="icon mt-3 lg:flex hidden" onclick="handleFavoriteIconClick(event)">
                            <label class="swap swap-flip text-9xl">
                                <input type="checkbox" />
                                
                                <div class="swap-on">
                                    <!-- not Added -->
                                    <?php include "../../../components/icons/notAdded.svg"; ?>
                                </div>
                                <!-- When clicked -->
                                <div class="swap-off">
                                <?php include "../../../components/icons/added.svg"; ?>
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
    <?php include "../../../components/footer/footer.php"?>

    <!-- SCRIPT -->
    <?php include "../../../components/javascript/searchFood.php"; ?>

</body>

</html>