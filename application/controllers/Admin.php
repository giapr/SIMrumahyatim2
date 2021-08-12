<?php
class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_data');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';

		$data['profil'] = $this->Model_data->getAllProfile();
		$data['catatan'] = $this->Model_data->getAllCatatan();

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/index.php', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}

	public function inde()
	{
		$data['judul'] = 'Dashboard';

		$data['laporan'] = $this->Model_data->getAlllaporan();
		$data['hasil'] = $this->Model_data->getAllChart();
		//var_dump($data['hasil']);
		//die;

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/chart2', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}

	public function Agenda()
	{
		$data['title'] = 'Agenda';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/catatan', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}
}
