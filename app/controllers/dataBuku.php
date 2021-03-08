<?php 

    class dataBuku extends Controller {
        public function index()
        {
            $data['judul'] = 'Daftar Data Buku';
            $data['dataBuku'] = $this->model('dataBuku_model')->getAlldataBuku();
            $this->view('templates/header', $data);
            $this->view('dataBuku/index', $data);
            $this->view('templates/footer');

        }

        public function detail($no)
        {
            $data['judul'] = 'Detail Data Buku';
            $data['dataBuku'] = $this->model('dataBuku_model')->getdataBukuByNo($no);
            $this->view('templates/header', $data);
            $this->view('dataBuku/detail', $data);
            $this->view('templates/footer');

        }

        public function tambah()
        {
            if( $this->model('dataBuku_model')->tambahDataBuku($_POST) > 0 ) { 
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/dataBuku');
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/dataBuku');
                exit;
            }   
        }

        public function hapus($no)
        {
            if( $this->model('dataBuku_model')->hapusDataBuku($no) > 0 ) { 
                Flasher::setFlash('berhasil', 'dihapus', 'success');
                header('Location: ' . BASEURL . '/dataBuku');
                exit;
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location: ' . BASEURL . '/dataBuku');
                exit;
            }
        }

         public function getubah()
         {
            echo json_encode($this->model('dataBuku_model')->getdataBukuByNo($_POST['no']));
         }

         public function ubah() 
         {
            if( $this->model('dataBuku_model')->ubahDataBuku($_POST) > 0 ) { 
                Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL . '/dataBuku');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diubah', 'danger');
                header('Location: ' . BASEURL . '/dataBuku');
                exit;
            }  
         }

         public function cari()
         {
            $data['judul'] = 'Daftar Data Buku';
            $data['dataBuku'] = $this->model('dataBuku_model')->cariDataBuku();
            $this->view('templates/header', $data);
            $this->view('dataBuku/index', $data);
            $this->view('templates/footer');
         }




    }

