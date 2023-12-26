<?php
include_once './function/helper.php';
include_once './function/koneksi.php';
?>
<?php

$id_user = isset($_GET['id_user']) ? $_GET['id_user'] : false;

$nama = "";
$email = "";
$phone = "";
$pass = "";
$role = "";
$button = "Add";

if ($id_user) {
    $queryUser = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
    $row = mysqli_fetch_assoc($queryUser);

    $nama = $row['nama'];
    $email = $row['email'];
    $phone = $row['phone'];
    $pass = $row['password'];
    $role = $row['id_role'];
    $button = "Update";
}

?>

<form style="display: flex; justify-content:center" action="<?php echo BASE_URL . "module/users/action.php?id_user=$id_user" ?>" method="POST">
    <div class="col-6 mt-4 ">
        <p class="mt-4 fs-5">Formulir Tambah Data User</p>
        <div class="form-control">
            <div class=" mt-2">
                <label for="" class="form-lable">Nama <span style="color: red;">*</span></label>
                <input type="text" name="nama" placeholder="" class="form-control" value="<?php echo $nama; ?>" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Email <span style="color: red;">*</span></label>
                <input type="text" name="email" placeholder="" class="form-control" value="<?php echo $email; ?>" required>

            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Phone<span style="color: red;">*</span></label>
                <input type="text" name="phone" placeholder="" class="form-control" value="<?php echo $phone; ?>" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Password<span style="color: red;">*</span></label>
                <input type="text" name="password" placeholder="" class="form-control" value="<?php echo $pass; ?>" required>
            </div>
            <div class=" mt-2">
                <label for="" class="form-lable">Role <span style="color: red;">*</span></label>
                <select name="id_role" id="" type="text" class="form-control" required>
                    <option selected>-- Pilih Role --</option>
                    <option value="1" <?php if ($role == "1") {
                                            echo "selected";
                                        } ?>>Admin</option>
                    <option value="2" <?php if ($role == "2") {
                                            echo "selected";
                                        } ?>>Dokter</option>
                    <option value="3" <?php if ($role == "3") {
                                            echo "selected";
                                        } ?>>Apoteker</option>
                </select>
            </div>

            <div class=" mt-2">
                <input type="submit" name="button" value="<?php echo $button; ?>" class="btn btn-primary">
            </div>

            <p style="margin-top: 20px;">Noted : <span style="color:red;">*</span>(Wajib diisi)</p>
        </div>
    </div>
</form>