<?php

require_once "app/Menu.php";
require_once "app/Karyawan.php";

$kry = new Karyawan;
$dataKaryawan = $kry->tampil();

$mn = new Menu;
$dataMenu = $mn->tampil();
?>

<h2>Tambah Transaksi</h2>

<form action="index.php?hal=trk_proses" method="post">
    <table>
        <tr>
            <td>Kasir</td>
            <td>
                <select name="id_karyawan_transaksi" id="">
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
            <td><input type="number" name="bayar_transaksi" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=menu_tampil"><button>Kembali</button></a>