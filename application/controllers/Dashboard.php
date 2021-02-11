<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('forklift_m');
		$this->load->model('Mdwms_service');
	}

	public function index()
	{
		$this->template->load('template', 'dashboard');

	}

	public function pic_forklift()
	{
		$data['forklift'] = $this->forklift_m->Forklift();

		$this->template->load('template', 'Unit_forklift',$data );

	}

	public function service_forklift()
	{
		$data['forklift'] = $this->Mdwms_service->Forklift_service();
		$this->template->load('template', 'm_service_data',$data );
	}

	public function add()
	{
		// var_dump($_POST);
		$this->template->load('template', 'service_form');
	}

	public function addProses()
	{
		// var_dump($_POST);
		// Insert Data
		$data = array(
			'int_service_id' => $this->input->post('No'),
			'txtequipment' => $this->input->post('Equipment'),
			'txtlokasi' => $this->input->post('Lokasi'),
			'txtjan' => $this->input->post('Jan'),
			'txtfeb' => $this->input->post('Feb'),
			'txtmar' => $this->input->post('Mar'),
			'txtapr' => $this->input->post('Apr'),
			'txtmei' => $this->input->post('Mei'),
			'txtjun' => $this->input->post('Jun'),
			'txtjul' => $this->input->post('Jul'),
			'txtagst'=> $this->input->post('Agst'),
			'txtsep' => $this->input->post('Sep'),
			'txtokt' => $this->input->post('Okt'),
			'txtnov' => $this->input->post('Nov'),
			'txtdes' => $this->input->post('Des')
		);

		$this->db->insert('m_dwms_service', $data);
		echo "<script>alert('Data berhasil disimpan');window.location='" . site_url('dashboard/service_forklift') . "'</script>";
	}

	public function edit_service($no)
	{
		$where = array(
			'int_service_id' => $no
		);
		$data['forklift'] = $this->Mdwms_service->edit_service($where, 'm_dwms_service')->result();
		$this->template->load('template', 'service_update', $data);
	}

	public function update_service()
	{
		$data = array(
			'int_service_id' => $this->input->post('no'),
			'txtarea' => $this->input->post('area'),
			'txtequipment' => $this->input->post('equipment'),
			'txtlokasi' => $this->input->post('lokasi'),
			'txtjan' => $this->input->post('januari'),
			'txtfeb' => $this->input->post('februari'),
			'txtmar' => $this->input->post('maret'),
			'txtapr' => $this->input->post('april'),
			'txtmei' => $this->input->post('mei'),
			'txtjun' => $this->input->post('juni'),
			'txtjul' => $this->input->post('juli'),
			'txtagst' => $this->input->post('agustus'),
			'txtsep' => $this->input->post('september'),
			'txtokt' => $this->input->post('oktober'),
			'txtnov' => $this->input->post('november'),
			'txtdes' => $this->input->post('desember')
		);
		$this->db->replace('m_dwms_service', $data);
		echo "<script>alert('Data berhasil disimpan');window.location='" . site_url('dashboard/service_forklift') . "'</script>";
	}

	public function del($no)
	{

		$this->Mdwms_service->del($no);
		echo "<script>alert('Data berhasil dihapus');window.location='" . site_url('service_forklift') . "'</script>";
	}

}
