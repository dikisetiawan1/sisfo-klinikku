<?php
include_once './function/helper.php';
include_once './function/koneksi.php';


if (isset($_GET['statusAdd']) == "berhasil") {
    echo "<script>alert('Selamat, Data berhasil di simpan.')</script>";
} else if (isset($_GET['statusUpdate']) == "berhasil") {
    echo "<script>alert('Ok, Data berhasil di ubah.')</script>";
}
$query = mysqli_query($koneksi, "SELECT * FROM pasien ORDER BY id_pasien DESC LIMIT 10");
if (mysqli_num_rows($query) == 0) {
    echo "Data pasien masih kosong, silahkan tambah data pasien.";
} else {
    echo "
    <table class=' table table-striped' >
    <p class='mt-4 fs-5'>Data Pasien</p>
    <thead>
        <tr style='background: white'>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Nama ayah</th>
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
            <td>$row[alamat]</td>
            <td>$row[jk]</td>
            <td>$row[nama_ortu]</td>
            <td>
            <a href='" . BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=riwayat_pasien&id_pasien=$row[id_pasien]'>Riwayat Pasien</a> |
            <a href='" . BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=form&id_pasien=$row[id_pasien]'>Edit</a> |
            <a href='" . BASE_URL . "index.php?page=hapus_pasien'>Hapus</a>
            </td>
        </tr> ";
        $no++;
    }
    echo "</tbody>";

    echo "</table>";
}
