<?php


class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {

        // QUERY BUILDER
        // $query = $this->db->get('mahasiswa');
        // GENERATING QUERY RESULT
        // return $query->result_array();

        // METHOD CHAINING 
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "npm" => $this->input->post('npm', true),
            "email" => $this->input->post('email', true),
            "fakultas" => $this->input->post('fakultas', true),
        ];

        // INSERT('TABEL', DATA)
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id)->delete('mahasiswa');
        // $this->db->where('id', $id);
        // $this->db->delete('mahasiswa');
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function getMahasiswaById($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function ubahDataMahasiswa()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "npm" => $this->input->post('npm', true),
            "email" => $this->input->post('email', true),
            "fakultas" => $this->input->post('fakultas', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        // INSERT('TABEL', DATA)
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataMahasiswa()
    {
        // TRUE = KALO DATA DI INSERT PADA DATA BASE
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('npm', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('fakultas', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}
