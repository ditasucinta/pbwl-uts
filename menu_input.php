<h2>Tambah Menu</h2>

<form action="index.php?hal=menu_proses" method="post">
    <table>
        <tr>
            <td>MENU NAMA</td>
            <td><input type="text" name="nama_menu" required></td>
        </tr>
        <tr>
            <td>MENU HARGA</td>
            <td><input type="text" name="harga_menu" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=menu_tampil"><button>Kembali</button></a>