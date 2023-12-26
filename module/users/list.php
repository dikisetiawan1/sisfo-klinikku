<?php

include_once "./function/helper.php";
include_once "./function/koneksi.php";

if (isset($_GET['statusAdd']) == "berhasil") {
    echo "<script>alert('Selamat, Data berhasil di simpan.')</script>";
} else if (isset($_GET['statusUpdate']) == "berhasil") {
    echo "<script>alert('Ok, Data berhasil di ubah.')</script>";
} else if (isset($_GET['statusDelete']) == "berhasil") {
    echo "<script>alert('Ok, Data berhasil di hapus.')</script>";
}

$query = mysqli_query($koneksi, "SELECT user.id_user,user.nama,user.email,user.phone,user.id_role, role.nama as role FROM user
JOIN role ON user.id_role = role.id_role");

echo " <p class='mt-4 fs-5'>Data Users</p>
        <div class='btn-action  mt-4'>
            <a href='" . BASE_URL . "index.php? page=my_profile&module=users&action=form'>Tambah User</a>
        </div>";

if (empty(mysqli_num_rows($query))) {
    echo "<div class='mt-4'><h4>Data user masih kosong, silahkan tambah data user.</h4></div>";
} else {

    echo "
    <table class='table table-striped mt-4'>
    <thead>
        <tr style='background: white'>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>";
    $no = 1;
    while ($row = mysqli_fetch_assoc($query)) {
        echo "
            <tr>
            <td>$no</td>
            <td>$row[nama]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
            <td>$row[role]</td>
            <td>
            <a href='" . BASE_URL . "index.php?page=my_profile&module=users&action=form& id_user=$row[id_user]'>Edit</a> |
            <a href='" . BASE_URL . "index.php?page=my_profile&module=users&action=delete& id_user=$row[id_user]'>Hapus</a></td>
            </tr>
            ";
        $no++;
    }
    echo "</tbody>
</table>";
}
