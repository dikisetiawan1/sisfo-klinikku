<?php
include_once './function/helper.php';
include_once './function/koneksi.php';
?>

<form style="display: flex; justify-content:center" action="<?php echo BASE_URL . "module/pendaftaran/action.php" ?>" method="POST">
    <div class="col-6 mt-4 ">
        <p class="mt-4 fs-5">Formulir Pendaftaran Pasien Baru</p>
        <div class="form-control">
            <div class=" mt-2">
                <label for="" class="form-lable">Nama Pasien <span style="color: red;">*</span></label>
                <input type="text" name="nama" id="" placeholder="" class="form-control" required>
            </div>
            <div class=" mt-2">
                <label for="jk" class="form-lable">Jk<span style="color: red;">*</span></label>
                <select name="jk" id="jk" class="form-control" required>
                    <option selected>--Pilih Jenis Kelamin--</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Alamat<span style="color: red;">*</span></label>
                <textarea name="alamat" id="" cols="10" rows="2" class="form-control" required></textarea>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Ayah<span style="color: red;">*</span></label>
                <input type="text" name="nama_ortu" id="" placeholder="" class="form-control" required>
            </div>
            <div class=" mt-2">
                <input type="submit" name="button" value="Add" class="btn btn-primary">
            </div>

            <p style="margin-top: 20px;">Noted : <span style="color:red;">*</span>(Wajib diisi)</p>
        </div>
    </div>


</form>