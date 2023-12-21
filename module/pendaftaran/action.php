<?php
include_once '../../function/helper.php';
include_once '../../function/koneksi.php';


$nama = htmlspecialchars($_POST['nama']);
$jk = htmlspecialchars($_POST['jk']);
$alamat = htmlspecialchars($_POST['alamat']);
$ortu = htmlspecialchars($_POST['nama_ortu']);
$button = $_POST['button'];


if ($button == "Add") {
    $query = mysqli_query($koneksi, "INSERT INTO pasien (nama, jk, alamat, nama_ortu) 
    VALUES('$nama','$jk', '$alamat', '$ortu');
    ");
    header("location:" . BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=list");
}
