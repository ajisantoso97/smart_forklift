<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mdwms_service extends CI_Model
{
    public function Forklift_service()
    {
        $result = $this->db->get('m_dwms_service');
        return $result->result();
    }

    public function edit_service($where)
    {
        return $this->db->get_where('m_dwms_service', $where);
    }

    public function del($no)
    {
        $this->db->where('int_service_id', $no);
        $query = $this->db->delete('m_dwms_service');
        return $query;
    }
}