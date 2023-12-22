<?php

include_once './function/helper.php';
include_once './function/koneksi.php';

$id_riwayatP = isset($_GET['id_riwayatP']) ? $_GET['id_riwayatP'] : false;
$tgl_berobat = isset($_GET['tgl_berobat']) ? $_GET['tgl_berobat'] : false;

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css?v8" type="text/css">
    <title>Klinikku</title>

</head>
<div class="container">

    <div class="row">
        <div class="col-2  mt-4">
            KlinikQu

        </div>
        <div class="col-6">
            <div class="card-title mt-2 text-center">
                <p>Nomor antrean pasien</p>
            </div>
        </div>
    </div>
    <?php
    $query = mysqli_query($koneksi, "SELECT  pasien.nama, nomor_antrean.id_riwayatP, riwayat_pasien.tgl_berobat, riwayat_pasien.id_pasien FROM nomor_antrean 
        JOIN pasien ON nomor_antrean.id_pasien = pasien.id_pasien
        JOIN riwayat_pasien ON nomor_antrean.id_riwayatP = riwayat_pasien.id_riwayatP");
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

<script type="text/javascript">
    window.print();
</script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->