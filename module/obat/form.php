<?php
include_once './function/helper.php';
include_once './function/koneksi.php';
?>
<?php

$id_obat = isset($_GET['id_obat']) ? $_GET['id_obat'] : false;

$nama = "";
$jenis = "";
$qty = "";
$tgl_exp = "";
$harga = "";
$button = "Add";

if ($id_obat) {
    $queryObat = mysqli_query($koneksi, "SELECT * FROM obat WHERE id_obat='$id_obat'");
    $row = mysqli_fetch_assoc($queryObat);

    $nama = $row['nama'];
    $jenis = $row['jenis_obat'];
    $qty = $row['qty'];
    $tgl_exp = $row['tgl_kadaluarsa'];
    $harga = $row['harga'];
    $button = "Update";
}

?>

<form style="display: flex; justify-content:center" action="<?php echo BASE_URL . "module/obat/action.php?id_obat=$id_obat" ?>" method="POST">
    <div class="col-6 mt-4 ">
        <p class="mt-4 fs-5">Formulir Tambah Data Obat</p>
        <div class="form-control">
            <div class=" mt-2">
                <label for="" class="form-lable">Nama Obat <span style="color: red;">*</span></label>
                <input type="text" name="nama" placeholder="" class="form-control" value="<?php echo $nama; ?>" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Jenis Obat <span style="color: red;">*</span></label>
                <select name="jenis_obat" id="" type="text" class="form-control" required>
                    <option selected>-- Pilih Jenis Obat --</option>
                    <option value="tablet" <?php if ($jenis == "tablet") {
                                                echo "selected";
                                            } ?>>Tablet</option>
                    <option value="sirup" <?php if ($jenis == "sirup") {
                                                echo "selected";
                                            } ?>>Sirup</option>
                    <option value="kapsul" <?php if ($jenis == "kapsul") {
                                                echo "selected";
                                            } ?>>Kapsul</option>
                </select>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Qty<span style="color: red;">*</span></label>
                <input type="text" name="qty" placeholder="" class="form-control" value="<?php echo $qty; ?>" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Tgl Exp <span style="color: red;">*</span></label>
                <input type="date" name="tgl_kadaluarsa" placeholder="" class="form-control" value="<?php echo $tgl_exp; ?>" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Harga <span style="color: red;">*</span></label>
                <input type="text" name="harga" placeholder="" class="form-control" value="<?php echo $harga; ?>" required>
            </div>

            <div class=" mt-2">
                <input type="submit" name="button" value="<?php echo $button; ?>" class="btn btn-primary">
            </div>

            <p style="margin-top: 20px;">Noted : <span style="color:red;">*</span>(Wajib diisi)</p>
        </div>
    </div>
</form>