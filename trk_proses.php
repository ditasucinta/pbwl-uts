<?php

require_once "app/Transaksi.php";

$trk = new Transaksi();

if (isset($_POST['btn_simpan'])) {
    $trk->simpan();
    header("location:index.php?hal=trk_tampil");
}

if (isset($_POST['btn_update'])) {
    $trk->update();
    header("location:index.php?hal=trk_tampil");
}