<?php

class Peoples extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'List of peoples';

        // BUAT ALIAS
        $this->load->model('Peoples_model', 'peoples');

        // PAGGINATION 
        $this->load->library('pagination');

        // AMBIL DATA KEYWORD
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userData('keyword');
        }

        // CONFIG
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_pages'] = 10;

        // INITIALIZE
        $this->pagination->initialize($config);

        // AMBIL DATA PEOPLE
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_pages'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
}
