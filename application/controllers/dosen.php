<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function view_dosen()
    {
        $data['dosen'] = $this->db->get('dosen')->result();
        $this->load->view('view_dosen', $data);
    }

    public function deleteUser ($id)
{
    $this->db->where('id', $id);
    $this->db->delete('dosen');
    
   
    redirect(base_url('view-dosen')); 
}
}