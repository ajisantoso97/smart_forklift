<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_cleaning extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_cleaning');
		
    }
    public function index()
    {
        $data['cleaning'] = $this->m_cleaning->cleaning_forklift();
        // $data1['row'] = $this->m_cleaning->cleaning_qr();
        
        $this->template->load('template', 'cleaning_forklift', $data);
    }

    public function add()
    {
        // var_dump($_POST);
        $this->template->load('template', 'cleaning_form');
    }

    public function addProses()
    {
        // var_dump($_POST);
        // Insert Data
        $data = array(
            'int_forklift_id' => $this->input->post('No'),
            'txtarea' => $this->input->post('Area'),
            'txtwhversion' => $this->input->post('WH_Version'),
            'txtengversion' => $this->input->post('ENG_Version'),
            'txtserialnumber' => $this->input->post('Serial_Number'),
            'txtnamepic' => $this->input->post('Pic_Forklift'),
            'inttahun' => $this->input->post('Tahun'),
            'txtqrcode' => $this->input->post('Serial_Number')
        );

        $this->db->insert('m_dwms_cleaning', $data);
        echo "<script>alert('Data berhasil disimpan');window.location='" . site_url('c_cleaning') . "'</script>";
    }

    function barcode_qrcode(){
        $data['row'] = $this->m_cleaning->cleaning_qr();
        $this->template->load('template', 'c_cleaning/barcode_qrcode', $data);
        
    }
    public function edit_cleaning($no)
    {
        $where = array(
            'int_forklift_id' => $no
        );
        $data['forklift'] = $this->m_cleaning->edit_cleaning($where, 'm_dwms_cleaning')->result();
        $this->template->load('template', 'cleaning_update', $data);
    }

    public function update_cleaning()
    {
        $data = array(
            'int_forklift_id' => $this->input->post('no'),
            'txtarea' => $this->input->post('area'),
            'txtwhversion' => $this->input->post('wh_version'),
            'txtengversion' => $this->input->post('eng_version'),
            'txtserialnumber' => $this->input->post('serial_number'),
            'txtnamepic' => $this->input->post('pic_forklift'),
            'inttahun' => $this->input->post('tahun')
        );
        $this->db->replace('m_dwms_cleaning', $data);
        echo "<script>alert('Data berhasil disimpan');window.location='" . site_url('c_cleaning') . "'</script>";
    }

    public function del($no)
    {

        $this->m_cleaning->del($no);
        echo "<script>alert('Data berhasil dihapus');window.location='" . site_url('c_cleaning') . "'</script>";
    }
}