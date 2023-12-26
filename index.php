<!doctype html>
<html lang="en">
<?php
include_once './function/helper.php';
include_once './function/koneksi.php';

$page = isset($_GET['page']) ? $_GET['page'] : false;
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css?v9" type="text/css">
    <title>Klinikku</title>

</head>

<body>
    <div class="container">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL . "index.php" ?>">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dokter
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Data Dokter</a></li>
                                <li><a class="dropdown-item" href="#">Jadwal Prakter Dokter</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pasien
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=form" ?>">Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=list" ?>">Data pasien</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Obat
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo BASE_URL . "index.php?page=my_profile&module=obat&action=list" ?>">Data obat</a></li>
                                <li><a class="dropdown-item" href="<?php echo BASE_URL . "index.php?page=my_profile&module=stok_obat&action=list" ?>">Stok obat</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=users&action=list" ?>">User</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="<?php echo BASE_URL . "index.php?page=notif" ?>">
                        <img style="color: #1e5474; margin-right:20px" src="./assets/img/notif.svg" alt="notif">
                    </a>
                    <a href="<?php echo BASE_URL . "index.php?page=logout" ?>">
                        <img style="color: #1e5474; margin-right:20px" src="./assets/img/logout.svg" alt="logout">
                    </a>
                </div>
            </div>
        </nav>
        <!-- main content -->
        <div class="content">
            <?php
            $filename = "$page.php";
            if (file_exists($filename)) {
                include_once($filename);
            } else {
                include_once("dashboard.php");
            }
            ?>
        </div>
        <!-- footer -->
        <div class="footer">
            <p><span>Copyright @dikset101 <?php echo date("Y"); ?></span></p>
        </div>
    </div>























    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->

</body>

</html>