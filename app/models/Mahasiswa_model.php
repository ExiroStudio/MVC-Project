<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table); // Query untuk mengambil semua data mahasiswa
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        // Menggunakan bind parameter untuk menghindari SQL Injection
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id'); // Query untuk mengambil data mahasiswa berdasarkan ID
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('',:nama,:email,:pekerjaan,:perusahaan,:status,:posisi)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('perusahaan', $data['perusahaan']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('posisi', $data['posisi']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function deleteMahasiswa($id)
    {
        // Menggunakan bind parameter untuk menghindari SQL Injection
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id'); // Query untuk mengambil data mahasiswa berdasarkan ID
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function editDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    pekerjaan = :pekerjaan,
                    email = :email,
                    perusahaan = :perusahaan,
                    status = :status,
                    posisi = :posisi
                    WHERE id = :id";


        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('perusahaan', $data['perusahaan']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('posisi', $data['posisi']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();
    }
}
