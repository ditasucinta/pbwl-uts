<?php

require_once "app/Transaksi.php";

$pbl = new Transaksi();
$rows = $pbl->tampil();

?>

<h2>TRANSAKSI</h2>

<a href="index.php?hal=trk_input">TAMBAH MENU</a>
<table border="1">
    <tr>
        <td>NO</td>
        <td>Kasir</td>
        <td>Nama Menu</td>
        <td>Harga Menu</td>
        <td>Bayar</td>
        <td>Kembalian</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['nama_karyawan']; ?></td>
        <td><?php echo $row['nama_menu']; ?></td>
        <td><?php echo $row['harga_menu']; ?></td>
        <td><?php echo $row['bayar_transaksi']; ?></td>
        <td><?php echo $row['kembalian_transaksi']; ?></td>
        <td><a href="index.php?hal=trk_edit&id=<?php echo $row['id_transaksi']; ?>">Edit</a></td>
        <td><a href="index.php?hal=trk_delete&id=<?php echo $row['id_transaksi']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>