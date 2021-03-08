<?php


class dataBuku_model
{
    private $table = 'data_buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAlldataBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getdataBukuByNo($no)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no=:no');
        $this->db->bind('no', $no);
        return $this->db->single();
    }

    public function tambahDataBuku($data)
    {
        $query = "INSERT INTO data_buku
                        VALUES
                     ('', :no_buku, :judul, :pengarang, :tahun_terbit, :jenis_buku, :status)";

        $this->db->query($query);
        $this->db->bind('no_buku', $data['no_buku']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun_terbit', $data['tahun_terbit']);
        $this->db->bind('jenis_buku', $data['jenis_buku']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBuku($no)
    {
        $query = "DELETE FROM data_buku WHERE no = :no";
        $this->db->query($query);
        $this->db->bind('no', $no);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataBuku($data)
    {
        $query = "UPDATE data_buku SET
                        no_buku = :no_buku,
                        judul = :judul,
                        pengarang = :pengarang,
                        tahun_terbit = :tahun_terbit,
                        jenis_buku = :jenis_buku,
                        status = :status
                        WHERE no = :no";


        $this->db->query($query);
        $this->db->bind('no_buku', $data['no_buku']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun_terbit', $data['tahun_terbit']);
        $this->db->bind('jenis_buku', $data['jenis_buku']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('no', $data['no']);

        $this->db->execute();

        return $this->db->rowCount();
    } 

    public function cariDataBuku()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM data_buku WHERE judul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }


    
}


