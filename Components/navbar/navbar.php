<body>
    <!-- NAVBAR -->
    <div class="navbar bg-base-100 fixed top-0 left-0 right-0 z-10">
        <!-- Logo - Displayed on larger screens -->
        <div class="navbar-start ml-14 hidden lg:flex">
            <img class="" src="Components/IMG_Web/LOGO.png" width="65px" height="65px"></img>
        </div>
        <!-- Mobile Menu Button - Displayed on smaller screens -->
        <div class="lg:hidden flex items-center justify-between px-4">
            <img class="" src="Components/IMG_Web/LOGO.png" width="40px" height="40px"></img>
            <button class="navbar-toggler">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- Menu - Displayed on larger screens -->
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal">
                <li>
                    <a href="dashboard.php" class="flex items-center space-x-2">
                            <!-- Ikon Home -->
                            <?php include "Components/icon/home.svg"; ?>
                        <span class="px-2">Home</span>
                    </a>
                </li>
                <li>
                    <a href="Menu_Kantin.php" class="flex items-center space-x-2">
                        <!-- Ikon Menu -->
                        <?php include "Components/icon/menu.svg"; ?>
                        <span class="px-2">Menu</span>
                    </a>
                </li>
                <li>
                    <a href="history.php" class="flex items-center space-x-2">
                        <!-- Ikon History -->
                        <?php include "Components/icon/history.svg"; ?>
                        <span class="px-2">History</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Avatar - Displayed on larger screens -->
        <div class="navbar-end mr-16 hidden lg:flex">
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="Components/IMG_Web/User.png" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-gray-800 rounded-box w-52">
                    <li>
                        <a class="flex justify-between items-center">
                            <span>Profile</span>
                            <span class="badge badge-warning"> <?php echo $_SESSION['Rolenya']; ?></span>
                            <!-- Ikon User -->
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex justify-between items-center">
                            <span>Settings</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <!-- Ikon Settings -->
                        </a>
                    </li>
                    <li>
                        <a href="Logout.php" class="flex justify-between items-center">
                            <span>Logout</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>
                            <!-- Ikon Logout -->
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Mobile Bottom Navigation - Displayed on smaller screens -->
    <div class="lg:hidden fixed bottom-0 left-0 right-0 bg-base-100 border-t border-gray-300">
        <ul class="menu menu-horizontal items-center justify-around py-2">
            <li>
                <a href="dashboard.php" class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <!-- Ikon Home -->
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <!-- Ikon Home -->
                </a>
            </li>
            <li>
                <a href="Menu_Kantin.php" class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <!-- Ikon Menu -->
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                    </svg>
                    <!-- Ikon Menu -->
                </a>
            </li>
            <li>
                <a href="history.php" class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <!-- Ikon History -->
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <!-- Ikon History -->
                </a>
            </li>
        </ul>
    </div>

</body>