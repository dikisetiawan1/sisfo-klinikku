<?php
include_once './function/helper.php';
include_once './function/koneksi.php';

$id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;

?>
<div class="tabs mt-4">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="background: #1e5474;">
            <?php
            $query = mysqli_query(
                $koneksi,
                "SELECT riwayat_pasien.id_riwayatP,riwayat_pasien.tab_nama, riwayat_pasien.id_pasien, riwayat_pasien.tgl_berobat, pasien.nama, pasien.usia
                  FROM riwayat_pasien 
                  JOIN pasien ON riwayat_pasien.id_pasien = pasien.id_pasien "
            );
            $tab_nama_atas = "";
            while ($row = mysqli_fetch_assoc($query)) {
                if ($id_pasien == $row['id_pasien']) {
                    if ($row['tgl_berobat'] == '2023-12-15' && $row['tab_nama'] == 'satu') {
                        $tab_nama_atas .= $row['tab_nama'];
                    }

                    echo "
                        <button class='nav-link' id='nav-home-tab' data-bs-toggle='tab' data-bs-target='#" . $tab_nama_atas . "' type='button' role='tab' aria-controls='nav-home' aria-selected='true'>$row[tgl_berobat]</button>
                    ";
                }
            }
            ?>
        </div>
    </nav>
    <?php

    $tab_nama_bawah = "";
    while ($row = mysqli_fetch_assoc($query)) {
        if ($tab_nama_atas && $row['tab_nama'] == 'satu') {
            $tab_nama_bawah .= $row['tab_nama'];
        }


        echo "
        <div class='tab-content' id='nav-tabContent'>
        <div class='tab-pane fade show' id='$tab_nama_bawah' role='tabpanel' aria-labelledby='nav-home-tab '>";

        echo $tab_nama_bawah;
    }

    ?>
</div>