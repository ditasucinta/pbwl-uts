<?php

require_once "app/Karyawan.php";

$kry = new Karyawan();
$rows = $kry->tampil();

?>

<h2>DATA KARYAWAN</h2>

<a href="index.php?hal=kry_input">TAMBAH DATA KARYAWAN</a>
<table border="1">
    <tr>
        <td>NO</td>
        <td>NAMA KARYAWAN</td>
        <td>EMAIL</td>
        <td>NO HANDPHONE</td>
        <td>ALAMAT</td>
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
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['no_hp']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><a href="index.php?hal=kry_edit&id=<?php echo $row['id_karyawan']; ?>">Edit</a></td>
        <td><a href="index.php?hal=kry_delete&id=<?php echo $row['id_karyawan']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>