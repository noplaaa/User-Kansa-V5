<?php
    session_start();
    include 'database.php';
    include 'Components/utilities/userInfo.php';
?>

<html>

<head>
    <title>History - Kansa</title>
    <!-- RESOURCE -->
    <?php include "Components/utilities/resources.html" ?>
</head>

<!-- NAVBAR -->
<?php 
    include "Components/navbar/navbar.php";
?>
<!-- CONTENT -->
<body bgcolor="#1D232A">
    <div class="container p-20 mt-10">
        <div class="card">
            <div class="card-header">
                <h1 class="text-4xl text-warning ml-5"><strong>Your previous order</strong></h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <!-- head -->
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- row 1 -->
                                    <tr class="hover">
                                        <th>1</th>
                                        <td>Cy Ganderton</td>
                                        <td>Quality Control Specialist</td>
                                        <td><a class="btn btn-sm bg-success text-white">Check</a></td>
                                    </tr>
                                    <!-- row 2 -->
                                    <tr class="hover">
                                        <th>2</th>
                                        <td>Hart Hagerty</td>
                                        <td>Desktop Support Technician</td>
                                        <td><a class="btn btn-sm bg-success text-white">Check</a></td>
                                    </tr>
                                    <!-- row 3 -->
                                    <tr class="hover">
                                        <th>3</th>
                                        <td>Brice Swyre</td>
                                        <td>Tax Accountant</td>
                                        <td><a class="btn btn-sm bg-success text-white">Check</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>