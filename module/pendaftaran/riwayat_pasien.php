<?php
include_once './function/helper.php';
include_once './function/koneksi.php';

$id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;
$id_riwayat = isset($_GET['id_riwayatP']) ? $_GET['id_riwayatP'] : false;


?>
<div class="tabs mt-4">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="background: #1e5474;">
            <?php
            $query = mysqli_query(
                $koneksi,
                "SELECT riwayat_pasien.status,riwayat_pasien.id_riwayatP,riwayat_pasien.id_pasien, riwayat_pasien.tgl_berobat, pasien.nama, pasien.usia
                  FROM riwayat_pasien 
                  JOIN pasien ON riwayat_pasien.id_pasien = pasien.id_pasien "
            );

            ?>
            <?php
            $status = "";
            foreach ($query as $row) : ?>
                <?php
                if ($id_riwayat == $row['id_riwayatP']) {
                    $status .= $row['status'];
                }
                ?>
                <?php if ($id_pasien == $row['id_pasien']) : ?>
                    <a <?php if ($id_riwayat == $row['id_riwayatP']) {
                            echo "class='nav-link active'";
                        } ?> href="<?php echo BASE_URL . "index.php?page=my_profile&module=pendaftaran&action=riwayat_pasien&id_pasien=$id_pasien&id_riwayatP=$row[id_riwayatP]" ?>"><?php echo $row['tgl_berobat']; ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </nav>

    <div class="content">
        <div class="row">

            <?php


            echo $status; ?>

        </div>
    </div>

</div>