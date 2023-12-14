<?php
include_once './function/helper.php';
include_once './function/koneksi.php';


$page = isset($_GET['page']) ? $_GET['page'] : false;
$module = isset($_GET['module']) ? $_GET['module'] : false;
$action = isset($_GET['action']) ? $_GET['action'] : false;
?>



<div class="container">
    <div class="section-content">

        <?php

        $file = "module/$module/$action.php";
        if (file_exists($file)) {

            include_once($file);
        } else {
            echo "mohon maaf, halaman tidak ada.";
        }




        ?>

    </div>

</div>