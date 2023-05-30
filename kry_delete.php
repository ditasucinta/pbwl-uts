<?php

require_once "app/Karyawan.php";

$id = $_GET['id'];

$kry = new Karyawan();
$rows = $kry->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=kry_tampil">Kembali</a>