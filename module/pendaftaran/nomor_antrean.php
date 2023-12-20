<?php

include_once './function/helper.php';
include_once './function/koneksi.php';

$id_riwayatP = isset($_GET['id_riwayatP']) ? $_GET['id_riwayatP'] : false;
$tgl_berobat = isset($_GET['tgl_berobat']) ? $_GET['tgl_berobat'] : false;

?>

<h1>Nomor Antrean</h1>
<?php
$query = mysqli_query($koneksi, "SELECT  pasien.nama, nomor_antrean.id_riwayatP, riwayat_pasien.tgl_berobat, riwayat_pasien.id_pasien FROM nomor_antrean 
JOIN pasien ON nomor_antrean.id_pasien = pasien.id_pasien
JOIN riwayat_pasien ON nomor_antrean.id_riwayatP = riwayat_pasien.id_riwayatP

");

// echo date("Y-m-d");

$no = 1;

foreach ($query as $row) :

?>
    <?php if ($tgl_berobat == $row['tgl_berobat']) : ?>
        <table class="table">
            <tbody <?php if ($id_riwayatP != $row['id_riwayatP']) {
                        echo "hidden";
                    } ?>>
                <tr>
                    <th scope="row">Nama </td>
                    <th> : </td>
                    <td><?php echo $row['nama']; ?></td>
                </tr>
                <tr>
                    <th scope="row">tgl </td>
                    <th> : </td>
                    <td><?php echo $row['tgl_berobat']; ?></td>
                </tr>
                <tr>
                    <th scope="row">No. Urut </td>
                    <th> : </td>
                    <td><?php echo $no++; ?></td>
                </tr>

            </tbody>
        </table>

    <?php endif; ?>
<?php endforeach;
$no++; ?>