<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*$data['title'] = 'Dashboard';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/index', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
		

		$data['title'] = 'Data Anak Yatim';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/anakyatim', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
		

		/*$data['title'] = 'Galeri';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/galeri', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);	
		*/

		/*$data['title'] = 'Agenda';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/kalender');
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);	
		*/

		/*$data['title'] = 'Agenda';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/catatan', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
		*/	

		$this->load->model('get_all_data');
		$data['title'] = 'Data Anak Yatim';
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/admin/anakyatim', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
			
	}

	public function tambah_data(){
		$this->tbl_mahasiswa->tambah_data_anakyatim();
		$this->session->set_flashdata('pesan', '<div class=""alert alert-succes role="alert> Data baru berhasuil ditambahkan! </div>');
		redirect ('anakyatim')
	}


}
