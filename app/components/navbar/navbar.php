<body>
    <!-- Navbar -->
    <div
        class="navbar bg-base-200 fixed top-7 z-10 rounded-full left-5 right-5 max-w-screen-lg mx-auto shadow-2xl lg:flex hidden">
        <!-- Navbar Menu -->
        <div class="navbar-start ml-14 lg:flex hidden">
            <img class="" src="../../../components/IMG_Web/LOGO - Negative.png" width="65px" height="65px">
        </div>
        <!-- Desktop Logo -->

        <div class="navbar-center">
            <ul class="menu menu-horizontal">
                <li>
                    <a href="dashboard.php"
                        class="flex items-center space-x-2 transition duration-100 ease-in-out transform hover:scale-110 hover:bg-[99BC85]">
                        <!-- Ikon Home -->
                        <?php include "icons/home.svg"; ?>
                        <span class="font-bold px-2">Home</span>
                    </a>
                </li>
                <!-- Tambahkan kelas hidden pada li berikut untuk menyembunyikannya di layar kecil -->
                <li>
                    <a href="menu.php"
                        class="flex items-center space-x-2 transition duration-100 ease-in-out transform hover:scale-110 hover:bg-[99BC85]">
                        <!-- Ikon Menu -->
                        <?php include "icons/menu.svg"; ?>
                        <span class="font-bold px-2">Menu</span>
                    </a>
                </li>
                <li>
                    <a href="history.php"
                        class="flex items-center space-x-2 transition duration-100 ease-in-out transform hover:scale-110 hover:bg-[99BC85]">
                        <!-- Ikon History -->
                        <?php include "icons/history.svg"; ?>
                        <span class="font-bold px-2">History</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Desktop Avatar -->
        <div class="navbar-end mr-16">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-outline btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg">
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-4 z-1 p-4 shadow menu menu-sm dropdown-content bg-gray-200 rounded-box w-52 shadow-xl">
                    <li>
                        <a
                            class="flex justify-between items-center transition duration-100 ease-in-out transform hover:scale-105 hover:bg-[99BC85]">
                            <span class="font-bold">Profile</span>
                            <!-- Ikon User -->
                            <span class="badge badge-warning"> <?php echo $_SESSION['Rolenya']; ?></span>
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="flex justify-between items-center transition duration-100 ease-in-out transform hover:scale-105 hover:bg-[99BC85]">
                            <span class="font-bold">Settings</span>
                            <!-- Ikon Settings -->
                            <?php include "icons/setting.svg" ?>
                        </a>
                    </li>
                    <li>
                        <a href="../../../config/controllers/logout/Logout.php"
                            class="flex justify-between items-center transition duration-100 ease-in-out transform hover:scale-105 hover:bg-[99BC85]">
                            <span class="font-bold">Logout</span>
                            <!-- Ikon Logout -->
                            <?php include "icons/logout.svg" ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Navbar Menu -->
    </div>
    <!-- Navbar -->

    <!-- Bottom Bar Menu -->
    <div
        class="fixed bottom-0 left-0 right-0 z-10  flex item-center justify-center mx-auto bg-base-100 border-t border-gray-300 lg:hidden">
        <ul class="menu menu-horizontal flex items mx-auto py-2 gap-5">
            <li>
                <a href="dashboard.php" class="flex items-center space-x-2 transition duration-100 ease-in-out transform hover:scale-110 hover:bg-[99BC85]">
                    <!-- Ikon Home -->
                    <?php include "icons/home.svg" ?>
                </a>
            </li>
            <li>
                <a href="menu.php" class="flex items-center space-x-2 transition duration-100 ease-in-out transform hover:scale-110 hover:bg-[99BC85]">
                    <!-- Ikon Menu -->
                    <?php include "icons/menu.svg" ?>
                </a>
            </li>
            <li>
                <a href="history.php" class="flex items-center space-x-2 transition duration-100 ease-in-out transform hover:scale-110 hover:bg-[99BC85]">
                    <!-- Ikon History -->
                    <?php include "icons/history.svg" ?>
                </a>
            </li>
            <li>
                <!-- Ikon History -->
                <div class="dropdown dropdown-top">
                    <label tabindex="0">
                    <?php include "icons/setting.svg" ?>
                    </label>
                    <ul tabindex="0"
                        class="mb-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-gray-200 rounded-box w-52 ">
                        <li>
                            <a class="flex justify-between items-center transition duration-100 ease-in-out transform hover:scale-110">
                                <span class="font-bold">Profile</span>
                                <!-- Ikon User -->
                                <span class="badge badge-warning"> <?php echo $_SESSION['Rolenya']; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="flex justify-between items-center transition duration-100 ease-in-out transform hover:scale-110">
                                <span class="font-bold">Settings</span>
                                <!-- Ikon Settings -->
                                <?php include "icons/setting.svg" ?>
                            </a>
                        </li>
                        <li>
                            <a href="../../../config/controllers/logout/Logout.php"
                                class="flex justify-between items-center transition duration-100 ease-in-out transform hover:scale-110">
                                <span class="font-bold">Logout</span>
                                <!-- Ikon Logout -->
                                <?php include "icons/logout.svg" ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <!-- Bottom Bar Menu -->
</body>