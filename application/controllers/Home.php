<?php

// HARUS EXTENDS KE CI_CONTROLLER
class Home extends CI_Controller
{

    // METHOD INDEX
    // PARAMETER BERFUNGSI UNTUK MENGAMBIL NILAI DARI URL
    public function index($nama = '')
    {
        // TAMPILAN AWAL
        // echo 'ini Home/Index';

        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;

        // PANGGIL FOLDER VIEWS - VIEW('FOLDER/FILE)
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
