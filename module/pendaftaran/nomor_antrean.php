<?php

include_once './function/helper.php';
include_once './function/koneksi.php';

$id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;
?>

<h1>Nomor Antrean</h1>
<?php
$query = mysqli_query($koneksi, "SELECT pasien.nama, nomor_antrean.id_pasien FROM nomor_antrean JOIN pasien ON nomor_antrean.id_pasien = pasien.id_pasien ");

// echo date("Y-m-d");

$no = 1;

foreach ($query as $row) :
?>
    <table class="table">
        <tbody <?php if ($id_pasien != $row['id_pasien']) {
                    echo "hidden";
                } ?>>
            <tr>
                <th scope="row">Nama </td>
                <th> : </td>
                <td><?php echo $row['nama']; ?></td>
            </tr>
            <tr>
                <th scope="row">No. Urut </td>
                <th> : </td>
                <td><?php echo $no++; ?></td>
            </tr>

        </tbody>
    </table>
<?php endforeach;
$no++; ?>