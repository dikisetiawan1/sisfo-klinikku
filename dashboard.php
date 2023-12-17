<?php

include_once './function/helper.php';
include_once './function/koneksi.php';

$queryPasien = mysqli_query($koneksi, "SELECT * from pasien");
$countPasien = mysqli_num_rows($queryPasien);
$queryObat = mysqli_query($koneksi, "SELECT * from obat");
$countObat = mysqli_num_rows($queryObat);
$queryDokter = mysqli_query($koneksi, "SELECT * from dokter");
$countDokter = mysqli_num_rows($queryDokter);

?>

<div class="container">
    <div class="row">
        <div class="col-4">
            <a href="<?php echo BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=list"; ?>">
                <div class="card dashboard shadow mt-5">
                    <div class="card-title m-5">
                        <p><span>Data Pasien</span></p>
                    </div>
                    <div class="card-body">
                        <p><span><?php echo $countPasien; ?></span></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="<?php echo BASE_URL . "index.php?page=data_obat"; ?>">
                <div class="card dashboard  shadow mt-5">
                    <div class="card-title m-5">
                        <p><span>Data Obat</span></p>
                    </div>
                    <div class="card-body">
                        <p><span><?php echo $countObat; ?></span></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a href="<?php echo BASE_URL . "index.php?page=data_dokter"; ?>">
                <div class="card dashboard shadow mt-5">
                    <div class="card-title m-5">
                        <p><span>Data Dokter</span></p>
                    </div>
                    <div class="card-body">
                        <p><span><?php echo $countDokter; ?></span></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>