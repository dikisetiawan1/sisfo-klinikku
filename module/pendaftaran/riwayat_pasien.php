<?php
include_once './function/helper.php';
include_once './function/koneksi.php';

$id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;
$id_riwayat = isset($_GET['id_riwayatP']) ? $_GET['id_riwayatP'] : false;


?>
<div class="tabs mt-4">
    <nav>
        <div class=" nav nav-tabs" id="nav-tab" role="tablist" style="background: #1e5474;">
            <?php
            $query = mysqli_query(
                $koneksi,
                "SELECT riwayat_pasien.status,riwayat_pasien.id_riwayatP,riwayat_pasien.id_pasien, riwayat_pasien.tgl_berobat,riwayat_pasien.usia,riwayat_pasien.tensi_darah,riwayat_pasien.berat_badan, pasien.nama,  pasien.jk, pasien.nama_ortu
                  FROM riwayat_pasien 
                  JOIN pasien ON riwayat_pasien.id_pasien = pasien.id_pasien "
            );

            ?>
            <?php
            $nama = "";
            $usia = "";
            $jk = "";
            $ortu = "";
            $tensi_darah = "";
            $berat_badan = "";
            foreach ($query as $row) : ?>
                <?php
                if ($id_riwayat == $row['id_riwayatP']) {
                    $nama .= $row['nama'];
                    $usia .= $row['usia'];
                    $ortu .= $row['nama_ortu'];
                    $tensi_darah .= $row['tensi_darah'];
                    $berat_badan .= $row['berat_badan'];
                    $jk .= $row['jk'];
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
        <div class="container">
            <div class="row">
                <div class="card" style="border-radius: 5px;">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-title m-5">
                                <p><span>Data pasien</span></p>
                            </div>
                            <div class="card-body mt-2" style="margin-left:-5px">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nama </td>
                                            <th> : </td>
                                            <td><?php echo $nama; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Usia </td>
                                            <th> : </td>
                                            <td><?php echo $usia; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jk </td>
                                            <th> : </td>
                                            <td><?php echo $jk; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nama ortu </td>
                                            <th> : </td>
                                            <td><?php echo $ortu; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tensi Darah </td>
                                            <th> : </td>
                                            <td><?php echo $tensi_darah; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Berat Badan </td>
                                            <th> : </td>
                                            <td><?php echo $berat_badan; ?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-title m-5">
                                <p><span>Riwayat</span></p>
                            </div>
                            <div class="card-body mt-5" style="margin-left:-5px; text-align:justify;">
                                <ul>
                                    <li>
                                        Sakit Magh
                                    </li>
                                    <li>
                                        Meriang
                                    </li>
                                    <li>
                                        Sakit kepala
                                    </li>
                                </ul>
                                <p>Catatan:</p>
                                <p>Sakit maag dapat disebabkan oleh penyakit pada organ di saluran pencernaan, seperti tukak lambung, infeksi bakteri H. pylori, peradangan di lambung (gastritis), dan penyakit refluks asam lambung (GERD).

                                    Selain penyakit, penggunaan obat-obatan, seperti obat antiinflamasi nonsteroid (OAINS), seperti aspirin atau ibuprofen, antibiotik seperti ciprofloxacin atau azithromycin, serta obat kortikosteroid juga dapat menyebabkan sakit maag..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>