<?php

require_once "app/Menu.php";
require_once "app/Karyawan.php";
require_once "app/Transaksi.php";

$kry = new Karyawan;
$dataKaryawan = $kry->tampil();

$mn = new Menu;
$dataMenu = $mn->tampil();

$tr = new Transaksi;
$dataTransaksi = $tr->edit($_GET['id']);
?>

<h2>Ubah Transaksi</h2>

<form action="index.php?hal=trk_proses" method="post">
    <table>
        <tr>
            <td>Kasir</td>
            <td>
                <select name="id_karyawan_transaksi" id="">
                    <option value="<?= $dataTransaksi['id_karyawan'] ?>"><?= $dataTransaksi['nama_karyawan'] ?></option>
                    <?php
                    foreach($dataKaryawan as $row) {
                    ?>
                    <option value="<?= $row['id_karyawan'] ?>"><?= $row['nama_karyawan'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Menu</td>
            <td>
                <select name="id_menu_transaksi" id="">
                    <option value="<?= $dataTransaksi['id_menu'] ?>"><?= $dataTransaksi['nama_menu'] ?></option>
                    <?php
                    foreach($dataMenu as $row) {
                    ?>
                    <option value="<?= $row['id_menu'] ?>"><?= $row['nama_menu'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Bayar</td>
            <td><input type="number" name="bayar_transaksi" value="<?= $dataTransaksi['bayar_transaksi'] ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=menu_tampil"><button>Kembali</button></a>