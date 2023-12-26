<?php
include_once '../../function/helper.php';
include_once '../../function/koneksi.php';


$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$pass = htmlspecialchars(md5($_POST['password']));
$role = htmlspecialchars($_POST['id_role']);
$button = $_POST['button'];



if ($button == "Add") {
    mysqli_query($koneksi, "INSERT INTO user (nama, email, phone, id_role, password ) 
    VALUES('$nama','$email', '$phone', '$role', '$pass');
    ");
    header("location:" . BASE_URL . "index.php?page=my_profile&module=users&action=list&statusAdd=berhasil");
} elseif ($button == "Update") {
    $id_user = $_GET['id_user'];
    mysqli_query($koneksi, "UPDATE user SET nama='$nama', email='$email', phone='$phone', id_role='$role', password='$pass' WHERE id_user=$id_user");
    header("location:" . BASE_URL . "index.php?page=my_profile&module=users&action=list&statusUpdate=berhasil");
}
