<?php

require_once "app/Menu.php";

$id = $_GET['id'];
$menu = new Menu();

$row = $menu->edit($id);
?>

<h2>EDIT MENU</h2>


<form action="index.php?hal=menu_proses" method="post">
    <input type="hidden" name="id_menu" value="<?php echo $row['id_menu']; ?>">
    <table>
        <tr>
            <td>MENU NAMA</td>
            <td><input type="text" name="nama_menu" value="<?php echo $row['nama_menu']; ?>" required></td>
        </tr>
        <tr>
            <td>MENU HARGA</td>
            <td><input type="text" name="harga_menu" value="<?php echo $row['harga_menu']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=menu_tampil"><button>Kembali</button></a>