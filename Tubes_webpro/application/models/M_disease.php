<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_disease extends CI_Model
{
    public function getDisease()
    {
        return $this->db->get('disease')->result_array();
    }
    public function getCode($code)
    {
        return $this->db->get_where('disease', ['code' => $code])->row_array();
    }
    public function searchDisease()
    {
        $search = $this->input->post('search');
        $this->db->like('name', $search);
        $this->db->or_like('description', $search);
        return $this->db->get('disease')->result_array();
    }
}
