<?php

class Mahasiswa extends CI_Controller
{

    // KARENA SETIAP METHOD HARUS MENJALANKAAN DATABASE MAKA AKTIFKAN CONSTRUCT
    public function __construct()
    {
        // UNTUK MENJALANKAN CONSTRUCT PADA KELAS PARENT (CI_CONTROLLER)
        parent::__construct();
        // $this->load->database(); // INI DIJALANKAN PADA AUTO LOAD
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';

        // MENGAMBIL DATA DARI DATABASE MENGGUNKAN MODEL (NOT CLEAN CODE)
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

        if ($this->input->post('keyword')) {
            $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Mahasiswa';

        //SET_RULES('NAME', 'YANG DITAMPILKAN', 'YANG DIBUTUHKAN')
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah Data Mahasiswa';
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            // REDIRECT KE CONTROLLER MAHASISWA
            redirect('mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Data Mahasiwa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $data['fakultas'] = ['Teknologi Industri', 'Ilmu Komputer', 'Psikologi', 'Manajemen', 'Kedokteran'];

        //SET_RULES('NAME', 'YANG DITAMPILKAN', 'YANG DIBUTUHKAN')
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Tambah Data Mahasiswa';
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            // REDIRECT KE CONTROLLER MAHASISWA
            redirect('mahasiswa');
        }
    }
}
