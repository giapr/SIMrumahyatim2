<?php 

class Auth extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('Model_login');
        
	}

	public function index(){

		$this->load->view('backend/template/meta');
        $this->load->view('backend/template/navbar');
        //echo "halo halo tampilan login";
        $this->load->view('backend/auth/login');
        $this->load->view('backend/template/js');

	}

	public function login_aksi(){
		$user = $this->input->post('username',true);
		$pass = md5($this->input->post('password', true));

		//rule validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() != FALSE){
			$where = array(
				'username' => $user,
				'password' => $pass
			);

			$cekLogin = $this->Model_login->cek_login($where)->num_rows();

			if($cekLogin > 0){
				$sess_data = array(
					'username' => $user,
					'login' => 'OK'
				);

				$this->session->set_userdata($sess_data);

				redirect(base_url('admin'));

			}else{
				echo "gagal";
			}

		}else{
			$this->load->view('backend/template/meta');
            $this->load->view('backend/template/navbar');
            //echo "halo halo tampilan login";
            $this->load->view('backend/auth/login');
            $this->load->view('backend/template/js');
		}

	}

	public function logout(){

		$this->session->sess_destroy();
		redirect(base_url('auth'));

	}
}
?>


