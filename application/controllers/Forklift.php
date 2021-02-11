<?php defined('BASEPATH') or exit('No direct script access allowed');

class Forklift extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('forklift_m');
    }

    public function index()
    {
        $data['forklift'] = $this->forklift_m->Forklift();
        $this->template->load('template', 'forklift_data', $data);
    }
    public function master_forklift($content, $data = NULL)
    {

        $data["m_forklift"] = $this->forklift_m->Forklift();
        $this->load->view('forklift_data', $data);
    }

    public function edit_forklift($no){
        $where = array(
            'intno' => $no
        );
        $data['forklift'] = $this->forklift_m->edit_forklift($where, 'forklift_m')->result();
        $this->template->load('template','forklift_update', $data);
    }
    // Update Data
    public function update_forklift(){
        $data = array(
            'intno' => $this->input->post('no'),
            'txtarea' => $this->input->post('area'),
            'txtwhversion' => $this->input->post('wh_version'),
            'txtengversion' => $this->input->post('eng_version'),
            'txtserialnumber' => $this->input->post('serial_number'),
            'txtnamepic' => $this->input->post('pic_forklift'),
            'inttahun' => $this->input->post('tahun')
        );
        $this->db->replace('m_forklift', $data);
        echo "<script>alert('Data berhasil disimpan');window.location='" . site_url('forklift') . "'</script>";
       
    }

    public function add() {
        // var_dump($_POST);
        $this->template->load('template', 'forklift_form');
    }

    public function addProses()
    {
        // var_dump($_POST);
    // Insert Data
        $data = array(
            'intno' => $this->input->post('No'),
            'txtarea' => $this->input->post('Area'),
            'txtwhversion' => $this->input->post('WH_Version'),
            'txtengversion' => $this->input->post('ENG_Version'),
            'txtserialnumber' => $this->input->post('Serial_Number'),
            'txtnamepic' => $this->input->post('Pic_Forklift'),
            'inttahun' => $this->input->post('Tahun')
        );

        $berhasil = $this->db->insert('m_forklift', $data);
        if($berhasil){
            $this->session->set_flashdata('msg', 'sukses');
            redirect('Forklift');
        }
    }
    
    public function del($no) 
    {
        $berhasil = $this->forklift_m->del($no);
        if ($berhasil) {
            $this->session->set_flashdata('msg', 'sukses2');
            redirect('Forklift');
        }
    }


}
