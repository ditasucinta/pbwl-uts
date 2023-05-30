<?php

require_once "app/Transaksi.php";

$id = $_GET['id'];

$Transaksi = new Transaksi();
$rows = $Transaksi->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=trk_tampil">Kembali</a>