<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_drugs extends CI_Model
{
    public function getDrugs()
    {
        return $this->db->get('drugs')->result_array();
    }
    public function getCode($code)
    {
        return $this->db->get_where('drugs', ['code_drugs' => $code])->row_array();
    }
    public function searchDrugs()
    {
        $search = $this->input->post('search');
        $this->db->like('name', $search);
        $this->db->or_like('description', $search);
        return $this->db->get('drugs')->result_array();
    }
}
?>