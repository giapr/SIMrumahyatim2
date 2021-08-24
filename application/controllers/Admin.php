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

	public function editProfil()
	{
		$data['judul'] = 'Edit Profil';

		$data['profil'] = $this->Model_data->getAllProfile();


		$this->form_validation->set_rules('latar_belakang', 'Latar Belakang', 'trim|required', array('required' => '%s tidak boleh kosong !'));
		$this->form_validation->set_rules('program_kerja', 'Program Kerja', 'trim|required', array('required' => '%s tidak boleh kosong !'));
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required', array('required' => '%s tidak boleh kosong !'));
		$this->form_validation->set_rules('visi', 'Visi', 'trim|required', array('required' => '%s tidak boleh kosong !'));
		$this->form_validation->set_rules('misi', 'Misi', 'trim|required', array('required' => '%s tidak boleh kosong !'));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('backend/template/meta', $data);
			$this->load->view('backend/template/navbar', $data);
			$this->load->view('backend/template/sidebar', $data);
			$this->load->view('backend/admin/editprofil', $data);
			$this->load->view('backend/template/footer', $data);
			$this->load->view('backend/template/js', $data);
		} else {
			$this->Model_data->editProfil();
			redirect('admin');
		}
	}

	public function inde()
	{
		$data['judul'] = 'Dashboard';

		$data['keluar'] = $this->Model_data->laporan_grafik();
		foreach ($this->model_data->laporan_grafik()->result_array() as $row) {
			$data['grafifk'][] = (float)$row['Januari'];
			$data['grafifk'][] = (float)$row['Februari'];
			$data['grafifk'][] = (float)$row['Maret'];
			$data['grafifk'][] = (float)$row['April'];
			$data['grafifk'][] = (float)$row['Mei'];
			$data['grafifk'][] = (float)$row['Juni'];
			$data['grafifk'][] = (float)$row['Juli'];
			$data['grafifk'][] = (float)$row['Agustus'];
			$data['grafifk'][] = (float)$row['September'];
			$data['grafifk'][] = (float)$row['Oktober'];
			$data['grafifk'][] = (float)$row['November'];
			$data['grafifk'][] = (float)$row['Desember'];
		}
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/chart2', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}

	public function data_admin()
	{
		$data['judul'] = 'Data admin';

		$data['admin'] = $this->Model_data->getAllAdmin();

		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/data_admin', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}

	public function tambah_admin()
	{
		$data['judul'] = 'Tambah admin';

		$data['admin'] = $this->Model_data->getAllAdmin();

		$this->form_validation->set_rules('username', 'username', 'trim|required', array('required' => '%s tidak boleh kosong !'));
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required', array('required' => '%s tidak boleh kosong !'));
		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required', array('required' => '%s tidak boleh kosong !'));
		$this->form_validation->set_rules('password', 'password', 'trim|required', array('required' => '%s tidak boleh kosong !'));
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('backend/template/meta', $data);
			$this->load->view('backend/template/navbar', $data);
			$this->load->view('backend/template/sidebar', $data);
			$this->load->view('backend/admin/tambah_admin', $data);
			$this->load->view('backend/template/footer', $data);
			$this->load->view('backend/template/js', $data);
		} else {
			$this->Model_data->tambahDataAdmin();
			redirect('Admin/data_admin');
		}
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
