<?php

require_once "app/Menu.php";

$id = $_GET['id'];

$menu = new Menu();
$rows = $menu->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=menu_tampil">Kembali</a>