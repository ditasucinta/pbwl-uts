CREATE TABLE tb_menu (
    id_menu INT(11) NOT NULL AUTO_INCREMENT,
    nama_menu VARCHAR (100) NOT NULL,
    harga_menu INT(100) NOT NULL,
    PRIMARY KEY (id_menu),
    UNIQUE KEY (nama_menu)
);

CREATE TABLE tb_karyawan (
    id_karyawan INT (11) NOT NULL AUTO_INCREMENT,
    nama_karyawan VARCHAR (100) NOT NULL,
    email VARCHAR (20) NOT NULL,
    no_hp VARCHAR (20) NOT NULL,
    alamat TEXT NOT NULL,
    PRIMARY KEY (id_karyawan)
);

CREATE TABLE tb_transaksi (
    id_transaksi INT(11) NOT NULL AUTO_INCREMENT,
    id_karyawan_transaksi INT(11) NOT NULL,
    id_menu_transaksi INT(11) NOT NULL,
    bayar_transaksi INT(50) NOT NULL,
    kembalian_transaksi INT(50) NOT NULL,
    PRIMARY KEY (id_transaksi),
    FOREIGN KEY (id_karyawan_transaksi) REFERENCES tb_karyawan (id_karyawan),
    FOREIGN KEY (id_menu_transaksi) REFERENCES tb_menu (id_menu)
);