<?php

require_once "inc/Koneksi.php";

class Menu extends Koneksi {
    public function tampil ()
    {
        $sql = "SELECT * FROM tb_menu";
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
        $nama_menu = $_POST['nama_menu'];
        $harga_menu = $_POST['harga_menu'];

        $sql = "INSERT INTO tb_menu (nama_menu, harga_menu) VALUES (:nama_menu,:harga_menu)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_menu", $nama_menu);
        $stmt->bindParam(":harga_menu", $harga_menu);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_menu WHERE id_menu=:id_menu";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_menu", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_menu = $_POST['nama_menu'];
        $harga_menu = $_POST['harga_menu'];
        $id_menu = $_POST['id_menu'];

        $sql = "UPDATE tb_menu SET nama_menu=:nama_menu, harga_menu=:harga_menu WHERE id_menu=:id_menu";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_menu", $nama_menu);
        $stmt->bindParam(":harga_menu", $harga_menu);
        $stmt->bindParam(":id_menu", $id_menu);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_menu WHERE id_menu=:id_menu";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_menu", $id);
        $stmt->execute();

    }
}