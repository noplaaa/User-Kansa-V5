<?php
    session_start();
    include '../../../config/database.php';
    include '../../../components/utilities/userInfo.php';
?>

<html>

<head>
    <title>History - Kansa</title>
    <!-- RESOURCE -->
    <?php include "../../../components/utilities/resources.html" ?>
</head>

<!-- NAVBAR -->
<?php 
    include "../../../components/navbar/navbar.php";
?>
<!-- CONTENT -->
<body class="bg-[BFD8AF]">
    <div class="container mx-auto sm:p-1 md:p-10 lg:p-20">
        <div class="card mt-20">
            <div class="card-header">
                <h1 class="text-gray-800 ml-10 sm:text-2xl md:text-3xl lg:text-4xl"><strong>Your previous order</strong></h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="sm:table-sm md:table-md lg:table-lg">
                                    <!-- row 1 -->
                                    <tr class="hover:bg-base-100">
                                        <th>#1</th>
                                        <td>Cy Ganderton</td>
                                        <td>Quality Control Specialist</td>
                                        <td><a class="btn btn-sm bg-success text-white w-full">Check</a></td>
                                    </tr>
                                    <!-- row 2 -->
                                    <tr class="hover">
                                        <th>#2</th>
                                        <td>Hart Hagerty</td>
                                        <td>Desktop Support Technician</td>
                                        <td><a class="btn btn-sm bg-success text-white w-full">Check</a></td>
                                    </tr>
                                    <!-- row 3 -->
                                    <tr class="hover">
                                        <th>#13</th>
                                        <td>Brice Swyre</td>
                                        <td>Tax Accountant</td>
                                        <td><a class="btn btn-sm bg-success text-white w-full">Check</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../../../components/footer/footer.php" ?>
</body>

</html>