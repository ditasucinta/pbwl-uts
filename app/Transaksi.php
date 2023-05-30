<?php

require_once "inc/Koneksi.php";
require_once "Menu.php";

class Transaksi extends Koneksi {
    public function tampil()
    {
        $sql = "SELECT * FROM tb_transaksi as transaksi JOIN tb_menu as menu ON transaksi.id_menu_transaksi=menu.id_menu JOIN tb_karyawan as karyawan ON transaksi.id_karyawan_transaksi=karyawan.id_karyawan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $id_karyawan_transaksi = $_POST['id_karyawan_transaksi'];
        $id_menu_transaksi = $_POST['id_menu_transaksi'];
        $bayar_transaksi = $_POST['bayar_transaksi'];
        $kembalian_transaksi = $this->kembalian($id_menu_transaksi, $bayar_transaksi);

        $sql = "INSERT INTO tb_transaksi (id_karyawan_transaksi, id_menu_transaksi, bayar_transaksi, kembalian_transaksi) VALUES (:id_karyawan_transaksi, :id_menu_transaksi, :bayar_transaksi, :kembalian_transaksi)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_karyawan_transaksi", $id_karyawan_transaksi);
        $stmt->bindParam(":id_menu_transaksi", $id_menu_transaksi);
        $stmt->bindParam(":bayar_transaksi", $bayar_transaksi);
        $stmt->bindParam(":kembalian_transaksi", $kembalian_transaksi);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_transaksi as transaksi JOIN tb_menu as menu ON transaksi.id_menu_transaksi=menu.id_menu JOIN tb_karyawan as karyawan ON transaksi.id_karyawan_transaksi=karyawan.id_karyawan WHERE id_transaksi=:id_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_transaksi", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $id_karyawan_transaksi = $_POST['id_karyawan_transaksi'];
        $id_menu_transaksi = $_POST['id_menu_transaksi'];
        $bayar_transaksi = $_POST['bayar_transaksi'];
        $kembalian_transaksi = $this->kembalian($id_menu_transaksi, $bayar_transaksi);

        $sql = "UPDATE tb_transaksi SET id_karyawan_transaksi=:id_karyawan_transaksi, id_menu_transaksi=:id_menu_transaksi, bayar_transaksi=:bayar_transaksi, kembalian_transaksi=:kembalian_transaksi WHERE id_transaksi=:id_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_karyawan_transaksi", $id_karyawan_transaksi);
        $stmt->bindParam(":id_menu_transaksi", $id_menu_transaksi);
        $stmt->bindParam(":bayar_transaksi", $bayar_transaksi);
        $stmt->bindParam(":kembalian_transaksi", $kembalian_transaksi);
        $stmt->bindParam(":id_transaksi", $id_transaksi);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_transaksi WHERE id_transaksi=:id_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_transaksi", $id);
        $stmt->execute();

    }

    public function kembalian($idHarga, $bayar)
    {
        $mn = new Menu;
        $dataHarga = $mn->edit($idHarga);

        $totalKembalian = $bayar - $dataHarga['harga_menu'];

        return $totalKembalian;
    }
}