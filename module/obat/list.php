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

$query = mysqli_query($koneksi, "SELECT * FROM obat");

echo " <p class='mt-4 fs-5'>Data Obat</p>
        <div class='btn-action  mt-4'>
            <a href='" . BASE_URL . "index.php? page=my_profile&module=obat&action=form'>Tambah Obat</a>
        </div>";

if (empty(mysqli_num_rows($query))) {
    echo "<div class='mt-4'><h4>Data obat masih kosong, silahkan tambah data obat.</h4></div>";
} else {

    echo "
    <table class='table table-striped mt-4'>
    <thead>
        <tr style='background: white'>
            <th>No</th>
            <th>Nama obat</th>
            <th>Jenis</th>
            <th>Qty</th>
            <th>Tgl exp</th>
            <th>Harga</th>
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
            <td>$row[jenis_obat]</td>
            <td>$row[qty]</td>
            <td>$row[tgl_kadaluarsa]</td>
            <td>" . Rupiah($row['harga']) . "</td>
            <td>
            <a href='" . BASE_URL . "index.php?page=my_profile&module=obat&action=form& id_obat=$row[id_obat]'>Edit</a> |
            <a href='" . BASE_URL . "index.php?page=my_profile&module=obat&action=delete& id_obat=$row[id_obat]'>Hapus</a></td>
            </tr>
            ";
        $no++;
    }
    echo "</tbody>
</table>";
}
