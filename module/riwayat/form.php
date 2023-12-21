<?php
include_once './function/helper.php';
include_once './function/koneksi.php';
?>
<form style="display: flex; justify-content:center" action="<?php echo BASE_URL . "module/riwayat/action.php" ?>" method="POST">
    <div class="col-6 mt-4 ">
        <p class="mt-4 fs-5">Formulir Riwayat Pasien </p>
        <div class="form-control">
            <div class=" mt-2">
                <label for="" class="form-lable">Nama Pasien <span style="color: red;">*</span></label>
                <select name="id_pasien" id="" class="form-control">
                    <option selected>-- Pilih nama pasien --</option>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT nama, id_pasien FROM pasien");
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "
                            <option value='$row[id_pasien]'>$row[nama]</option>
                    ";
                    }
                    ?>
                </select>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Usia<span style="color: red;">*</span></label>
                <input type="text" name="usia" id="" placeholder="" class="form-control" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Tensi Darah<span style="color: red;">*</span></label>
                <input type="text" name="tensi_darah" id="" placeholder="" class="form-control" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">BB<span style="color: red;">*</span></label>
                <input type="text" name="berat_badan" id="" placeholder="" class="form-control" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Tgl Daftar<span style="color: red;">*</span></label>
                <input type="date" name="tgl_berobat" id="" placeholder="" class="form-control" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Jenis Sakit<span style="color: red;">*</span></label>
                <input type="text" name="jenis_sakit" id="" placeholder="" class="form-control" required>
            </div>
            <div class="mt-2">
                <label for="" class="form-lable">Catatan Dokter<span style="color: red;">*</span></label>
                <textarea name="catatan" id="" class="form-control"></textarea>

            </div>

            <div class=" mt-2">
                <input type="submit" name="button" value="Add" class="btn btn-primary">
            </div>

            <p style="margin-top: 20px;">Noted : <span style="color:red;">*</span>(Wajib diisi)</p>
        </div>
    </div>


</form>