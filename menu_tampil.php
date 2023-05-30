<?php

require_once "app/Menu.php";

$menu = new Menu();
$rows = $menu->tampil();

?>

<h2>DAFTAR MENU</h2>

<a href="index.php?hal=menu_input">TAMBAH MENU</a>
<table border="1">
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>HARGA</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['nama_menu']; ?></td>
        <td><?php echo $row['harga_menu']; ?></td>
        <td><a href="index.php?hal=menu_edit&id=<?php echo $row['id_menu']; ?>">Edit</a></td>
        <td><a href="index.php?hal=menu_delete&id=<?php echo $row['id_menu']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>