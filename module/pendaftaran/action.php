<?php
include_once '../../function/helper.php';
include_once '../../function/koneksi.php';


$nama = htmlspecialchars($_POST['nama']);
$usia = htmlspecialchars($_POST['usia']);
$jk = htmlspecialchars($_POST['jk']);
$alamat = htmlspecialchars($_POST['alamat']);
$ortu = htmlspecialchars($_POST['nama_ortu']);
$tensi_darah = htmlspecialchars($_POST['tensi_darah']);
$bb = htmlspecialchars($_POST['berat_badan']);
$tgl_daftar = htmlspecialchars($_POST['tgl_daftar']);
$button = $_POST['button'];


if ($button == "Add") {
    $query = mysqli_query($koneksi, "INSERT INTO pasien (nama, usia, jk, alamat, nama_ortu, tensi_darah, berat_badan, tgl_daftar) 
    VALUES('$nama','$usia', '$jk', '$alamat', '$ortu', '$tensi_darah', '$bb', '$tgl_daftar');
    ");

    header("location:" . BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=nomor_antrean");
}
