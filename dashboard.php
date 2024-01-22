<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Kansa</title>
    <!-- RESOURCE -->
    <?php include "Components/utilities/resources.html" ?>
</head>

<body>
    <!-- NAVBAR -->
    <?php 
    include "Components/navbar/navbar.php";
    ?>

    <!-- CONTENT -->
    <!-- put your content here -->

    <!-- FOOTER -->
    <?php include "Components/footer/footer.html"?>

    <!-- SCRIPTs -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>

</html>