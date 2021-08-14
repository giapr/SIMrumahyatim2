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
		$data['Anak_yatim'] = $this->Model_data->getAllJumlahDataAnakYatim();
		$data['Donatur'] = $this->Model_data->getAllJumlahDataDonatur();
		$data['Duafa'] = $this->Model_data->getAllJumlahDataDuafa();
		$data['masuk'] = $this->Model_data->getAllJumlahDatapemasukan();
		$data['keluar'] = $this->Model_data->getAllJumlahDatapengeluaran();


		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/index.php', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}

	/*public function inde()
	{
		$data['judul'] = 'Dashboard';

		//foreach($this->m_chart->laporan()result_array() as $ row)
		//var_dump($data['hasil']);
		//die;
		{
			$data['grafifk'][]=(float)$row['Januari'];
			$data['grafifk'][]=(float)$row['Februari'];
			$data['grafifk'][]=(float)$row['Maret'];
			$data['grafifk'][]=(float)$row['April'];
			$data['grafifk'][]=(float)$row['Mei'];
			$data['grafifk'][]=(float)$row['Juni'];
			$data['grafifk'][]=(float)$row['Juli'];
			$data['grafifk'][]=(float)$row['Agustus'];
			$data['grafifk'][]=(float)$row['September'];
			$data['grafifk'][]=(float)$row['Oktober'];
			$data['grafifk'][]=(float)$row['November'];
			$data['grafifk'][]=(float)$row['Desember']
		}
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/chart2', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}*/

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
