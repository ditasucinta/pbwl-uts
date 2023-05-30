<h2>Tambah Karyawan</h2>

<form action="index.php?hal=kry_proses" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama_karyawan" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td>NO HANDPHONE</td>
            <td><input type="text" name="no_hp" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kry_tampil"><button>Kembali</button></a>