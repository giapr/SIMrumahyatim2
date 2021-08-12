<?php
class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_data');
	}

	public function index()
	{

		$data['kegiatan'] = $this->Model_data->getAllKegiatan();
		$data['profil'] = $this->Model_data->getAllDataprofil();



		//var_dump($data);
		//die;

		$this->load->view('frontend/template/meta');
		$this->load->view('frontend/template/navbar');
		$this->load->view('frontend/index', $data);
		$this->load->view('frontend/template/js');
	}
}
