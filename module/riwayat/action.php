<?php
include_once '../../function/helper.php';
include_once '../../function/koneksi.php';


$id_pasien = htmlspecialchars($_POST['id_pasien']);
$usia = htmlspecialchars($_POST['usia']);
$tensi_darah = htmlspecialchars($_POST['tensi_darah']);
$bb = htmlspecialchars($_POST['berat_badan']);
$tgl_daftar = htmlspecialchars($_POST['tgl_berobat']);
$jenis_sakit = htmlspecialchars($_POST['jenis_sakit']);
$catatan = htmlspecialchars($_POST['catatan']);
$button = $_POST['button'];
if ($button == "Add") {
    $queryInput = mysqli_query($koneksi, "INSERT INTO riwayat_pasien (id_pasien, tgl_berobat, berat_badan, tensi_darah, usia, jenis_sakit, catatan)
                                                       VALUES ('$id_pasien','$tgl_daftar','$bb','$tensi_darah','$usia','$jenis_sakit','$catatan')");

    if ($queryInput) {
        $last_id_riwayat = mysqli_insert_id($koneksi);
        $queryAntrean = mysqli_query($koneksi, "INSERT INTO nomor_antrean (id_riwayatP, id_pasien)
                                        VALUES ('$last_id_riwayat','$id_pasien')");
    }
    header("location:" . BASE_URL . "index.php?page=my_profile&module=pendaftaran");
}
