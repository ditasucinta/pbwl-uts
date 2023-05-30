<?php

require_once "app/Karyawan.php";

$kry = new Karyawan();

if (isset($_POST['btn_simpan'])) {
    $kry->simpan();
    header("location:index.php?hal=kry_tampil");
}

if (isset($_POST['btn_update'])) {
    $kry->update();
    header("location:index.php?hal=kry_tampil");
}