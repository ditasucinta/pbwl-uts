<?php

require_once "inc/Koneksi.php";

class Karyawan extends Koneksi {
    public function tampil ()
    {
        $sql = "SELECT * FROM tb_karyawan";
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
        $nama_karyawan = $_POST['nama_karyawan'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO tb_karyawan (nama_karyawan,email,no_hp,alamat) VALUES (:nama_karyawan,:email,:no_hp,:alamat)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_karyawan", $nama_karyawan);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":no_hp", $no_hp);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_karyawan WHERE id_karyawan=:id_karyawan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_karyawan", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_karyawan = $_POST['nama_karyawan'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $id_karyawan = $_POST['id_karyawan'];

        $sql = "UPDATE tb_karyawan SET nama_karyawan=:nama_karyawan, email=:email, no_hp=:no_hp, alamat=:alamat  WHERE id_karyawan=:id_karyawan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_karyawan", $nama_karyawan);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":no_hp", $no_hp);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":id_karyawan", $id_karyawan);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_karyawan WHERE id_karyawan=:id_karyawan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_karyawan", $id);
        $stmt->execute();

    }
}