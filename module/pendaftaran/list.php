<?php
include_once './function/helper.php';
include_once './function/koneksi.php';


$query = mysqli_query($koneksi, "SELECT * FROM pasien");
$queryRiwayat = mysqli_query($koneksi, "SELECT * FROM riwayat_pasien");
$rowRiwayat = mysqli_fetch_assoc($queryRiwayat);

if (mysqli_num_rows($query) == 0) {
    echo "Maaf, Data pasien masih kosong.";
} else {
    echo "
<table class=' table table-striped mt-4' >
    <thead>
        <tr style='background: white'>
            <th>No</th>
            <th>Nama</th>
            <th>Usia</th>
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
            <td>$row[usia]</td>
            <td>$row[alamat]</td>
            <td>$row[jk]</td>
            <td>$row[nama_ortu]</td>
            <td>
            <a href='" . BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=riwayat_pasien&id_pasien=$row[id_pasien]'>Riwayat Pasien</a> |
            <a href='" . BASE_URL . "index.php?page=edit_pasien'>Edit</a> |
            <a href='" . BASE_URL . "index.php?page=hapus_pasien'>Hapus</a>
            </td>
        </tr> ";
        $no++;
    }


    echo "</tbody>";

    echo "</table>";
}
