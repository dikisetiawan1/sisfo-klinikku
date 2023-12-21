<?php

include_once "./function/helper.php";
include_once "./function/koneksi.php";

?>
<table class="table table-striped mt-4">
    <thead>
        <tr style="background: white">
            <th>No</th>
            <th>Nama obat</th>
            <th>Jenis</th>
            <th>Tgl exp</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM obat");
        while ($row = mysqli_fetch_assoc($query)) {
            echo "
            <tr>
            <td>$no</td>
            <td>$row[nama]</td>
            <td>$row[jenis_obat]</td>
            <td>$row[tgl_kadaluarsa]</td>
            <td>$row[harga]</td>
            <td>
            <a href='" . BASE_URL . "index.php?page=edit_obat'>Edit</a> |
            <a href='" . BASE_URL . "index.php?page=hapus_obat'>Hapus</a></td>
            </tr>
            ";
            $no++;
        }


        ?>
    </tbody>
</table>