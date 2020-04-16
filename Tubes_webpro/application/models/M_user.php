<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getData($uid)
    {
        return $this->db->get_where('user', ['username' => $uid])->row_array();
    }
    public function insert($data)
    {
        $this->db->insert('user', $data);
    }
    public function update($data)
    {
        return $this->db->where('username', $data['username'])->update('user', $data);
    }
}
