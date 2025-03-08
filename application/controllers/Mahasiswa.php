<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function view_mahasiswa()
    {
        $data['mahasiswa'] = $this->db->get('mahasiswa')->result();
        $this->load->view('view_mahasiswa', $data);
    }

    public function deleteUser ($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
        redirect(base_url('view-mahasiswa'));
    }


}


    



