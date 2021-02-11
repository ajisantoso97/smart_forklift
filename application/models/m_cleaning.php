<?php defined('BASEPATH') or exit('No direct script access allowed');

class m_cleaning extends CI_Model
{
    public function cleaning_forklift()
    {
        $result = $this->db->get('m_dwms_cleaning');
        return $result->result();
    }

    public function cleaning_qr()
    {
        $this->db->select('*');
        $this->db->from('m_dwms_cleaning');
        $this->db->where('txtserialnumber');
        $query = $this->db->get();
        return $query;

    }
    public function edit_cleaning($where)
    {
        return $this->db->get_where('m_dwms_cleaning', $where);
    }

    public function del($no)
    {
        $this->db->where('int_forklift_id', $no);
        $query = $this->db->delete('m_dwms_cleaning');
        return $query;
    }

}
