<?php

include_once './function/helper.php';
include_once './function/koneksi.php';

$id_riwayatP = isset($_GET['id_riwayatP']) ? $_GET['id_riwayatP'] : false;
$tgl_berobat = isset($_GET['tgl_berobat']) ? $_GET['tgl_berobat'] : false;

?>



<div class="row mt-4">
    <div class="col-6 card ">
        <div class="row">
            <div class="col-2 m-2 mt-2">
                KlinikQu
                <!-- <img src="" alt="Lo    go"> -->
            </div>
            <div class="col-8">
                <div class="card-title mt-2 text-center">
                    <p>Nomor antrean pasien</p>
                </div>
            </div>
        </div>
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
                <table class="table table-striped">
                    <tbody <?php if ($id_riwayatP != $row['id_riwayatP']) {
                                echo "hidden";
                            } ?>>
                        <tr>
                            <th>Nama </td>
                            <th> : </td>
                            <td><?php echo $row['nama']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">tgl </td>
                            <th> : </td>
                            <td><?php echo $row['tgl_berobat']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">No. Antrean </td>
                            <th> : </td>
                            <td><?php echo $no++; ?></td>
                        </tr>

                    </tbody>
                </table>

            <?php endif; ?>
        <?php endforeach;
        $no++; ?>
    </div>
</div>