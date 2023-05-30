<?php

require_once "app/Karyawan.php";

$id = $_GET['id'];
$kry = new Karyawan();

$row = $kry->edit($id);
?>


<form action="index.php?hal=kry_proses" method="post">
    <input type="hidden" name="id_karyawan" value="<?php echo $row['id_karyawan']; ?>">
    <table>
        <tr>
            <td>NAMA KARYAWAN</td>
            <td><input type="text" name="nama_karyawan" value="<?php echo $row['nama_karyawan']; ?>" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="email" value="<?php echo $row['email']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HANDPHONE</td>
            <td><input type="text" name="no_hp" value="<?php echo $row['no_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=alb_tampil"><button>Kembali</button></a>