<?php defined('BASEPATH') or exit('No direct script access allowed');

class Forklift_m extends CI_Model
{
    public function Forklift()
    {
        $this->db->select('*');
        $this->db->from('m_forklift');
        //$this->db->where('txtarea','RM',);
        //$this->db->where('txtwhversion','PM 01');
        //$this->db->group_by('intno');
        $result = $this->db->get();
        return $result->result();
    }

    public function edit_forklift($where){
        return $this->db->get_where('m_forklift',$where);
    }

    public function del($no)
    {
        $this->db->where('intno', $no);
        $query = $this->db->delete('m_forklift');
        return $query;
       
    }
}