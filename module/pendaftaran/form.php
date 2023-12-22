<?php
include_once './function/helper.php';
include_once './function/koneksi.php';
?>
<?php

$id_pasien = isset($_GET['id_pasien']) ? $_GET['id_pasien'] : false;

$nama = "";
$jk = "";
$alamat = "";
$ortu = "";
$button = "Add";

if ($id_pasien) {
    $queryPasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
    $row = mysqli_fetch_assoc($queryPasien);

    $nama = $row['nama'];
    $jk = $row['jk'];
    $alamat = $row['alamat'];
    $ortu = $row['nama_ortu'];
    $button = "Update";
}

?>

<form style="display: flex; justify-content:center" action="<?php echo BASE_URL . "module/pendaftaran/action.php?id_pasien=$id_pasien" ?>" method="POST">
    <div class="col-6 mt-4 ">
        <p class="mt-4 fs-5">Formulir Pendaftaran Pasien Baru</p>
        <div class="form-control">
            <div class=" mt-2">
                <label for="" class="form-lable">Nama Pasien <span style="color: red;">*</span></label>
                <input type="text" name="nama" placeholder="" class="form-control" value="<?php echo $nama; ?>" required>
            </div>
            <div class=" mt-2">
                <label for="jk" class="form-lable">Jk<span style="color: red;">*</span></label>
                <select name="jk" id="jk" class="form-control" required>
                    <option selected>--Pilih Jenis Kelamin--</option>
                    <option value="laki-laki" <?php if ($jk == "laki-laki") {
                                                    echo "selected";
                                                } ?>>Laki-laki</option>
                    <option value="perempuan" <?php if ($jk == "perempuan") {
                                                    echo "selected";
                                                } ?>>Perempuan</option>
                </select>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Alamat<span style="color: red;">*</span></label>
                <textarea name="alamat" id="" cols="10" rows="2" class="form-control" required><?php echo $alamat; ?></textarea>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Ayah<span style="color: red;">*</span></label>
                <input type="text" name="nama_ortu" id="" placeholder="" class="form-control" value="<?php echo $ortu; ?>" required>
            </div>
            <div class=" mt-2">
                <input type="submit" name="button" value="<?php echo $button; ?>" class="btn btn-primary">
            </div>

            <p style="margin-top: 20px;">Noted : <span style="color:red;">*</span>(Wajib diisi)</p>
        </div>
    </div>
</form>