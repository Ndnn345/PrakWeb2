<!DOCTYPE html>
<html lang="en">
<?php
include_once('include/meta.php');
require_once("dbkoneksi.php");
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once('include/header.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once('include/sidebar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <title>Rumah Sakit - Dasbor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card-header {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .card-body {
            font-size: 16px;
            color: #555;
        }

        .card-body i {
            margin-right: 10px;
        }

        .card-body p {
            margin: 10px 0;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dasbor Rumah Sakit</h1>

        <div class="card">
            <div class="card-header">Pasien</div>
            <div class="card-body">
                <p><i class="fas fa-user"></i> Total Pasien: 1000</p>
                <p><i class="fas fa-user-plus"></i> Pasien Baru Hari Ini: 50</p>
                <p><i class="fas fa-user-check"></i> Pasien Discharge Hari Ini: 20</p>
                <a href="./pasien/index.php" class="btn">Lihat Detail Pasien</a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">Dokter</div>
            <div class="card-body">
                <p><i class="fas fa-user-md"></i> Total Dokter: 50</p>
                <p><i class="fas fa-user-plus"></i> Dokter Baru Hari Ini: 3</p>
                <a href="./paramedik/index.php" class="btn">Lihat Detail Dokter</a>
            </div>
        </div>

    </div>
</div>
                    
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>