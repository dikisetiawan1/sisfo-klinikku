<?php
include_once '../../function/helper.php';
include_once '../../function/koneksi.php';


$nama = htmlspecialchars($_POST['nama']);
$jenis = htmlspecialchars($_POST['jenis_obat']);
$qty = htmlspecialchars($_POST['qty']);
$tgl_exp = htmlspecialchars($_POST['tgl_kadaluarsa']);
$harga = htmlspecialchars($_POST['harga']);
$button = $_POST['button'];



if ($button == "Add") {
    mysqli_query($koneksi, "INSERT INTO obat (nama, jenis_obat, qty, tgl_kadaluarsa, harga) 
    VALUES('$nama','$jenis', '$qty', '$tgl_exp', '$harga');
    ");
    header("location:" . BASE_URL . "index.php?page=my_profile&module=obat&action=list&statusAdd=berhasil");
} elseif ($button == "Update") {
    $id_obat = $_GET['id_obat'];
    mysqli_query($koneksi, "UPDATE obat SET nama='$nama', jenis_obat='$jenis', qty='$qty', tgl_kadaluarsa='$tgl_exp', harga='$harga' WHERE id_obat=$id_obat");
    header("location:" . BASE_URL . "index.php?page=my_profile&module=obat&action=list&statusUpdate=berhasil");
}
