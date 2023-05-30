<?php

require_once "app/Menu.php";

$menu = new Menu();

if (isset($_POST['btn_simpan'])) {
    $menu->simpan();
    header("location:index.php?hal=menu_tampil");
}

if (isset($_POST['btn_update'])) {
    $menu->update();
    header("location:index.php?hal=menu_tampil");
}