<?php 
class Kegiatan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_data');
	}
	
    public function index(){
		
		$data['judul'] = 'Data Kegiatan';

        #isi#       
        $data['kegiatan'] = $this->Model_data->getAllDataKegiatan();
        if ( $this->input->post('keyword') ) {
            $data['kegiatan'] = $this->Model_data->getAllDataKegiatan();
        }
        //var_dump($data);
        //die;
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/kegiatan/index', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}

    public function galeri(){
		
		$data['judul'] = 'Galeri Foto Kegiatan';

        #isi#       
        $data['kegiatan'] = $this->Model_data->getAllKegiatan();
        if ( $this->input->post('keyword') ) {
            $data['kegiatan'] = $this->Model_data->getAllKegiatan();
        }
        //var_dump($data);
        //die;
		$this->load->view('backend/template/meta', $data);
		$this->load->view('backend/template/navbar', $data);
		$this->load->view('backend/template/sidebar', $data);
		$this->load->view('backend/kegiatan/galeri', $data);
		$this->load->view('backend/template/footer', $data);
		$this->load->view('backend/template/js', $data);
	}



    public function editDataKegiatan($id_kegiatan)
    {
        #judul#
        $data['judul'] = 'Edit detail kegiatan';
        $data['kegiatan'] = $this->Model_data->getDataKegiatanById($id_kegiatan);
        $data['gambar'] = $this->Model_data->getDatafotoById($id_kegiatan);

        $this->form_validation->set_rules('nama_kegiatan' , 'Nama kegiatan' , 'required');
        if ($this->form_validation->run()== FALSE )
        {         
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/kegiatan/edit', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
        }else {
             
            $this->Model_data->editDataKegiatan();
            redirect('kegiatan');
        }
        
    }


    public function tambahDatakegiatan()
    {
        #judul#
        $data['judul'] = 'Tambah Data Kegiatan';

        $this->form_validation->set_rules('nama_kegiatan' , 'Nama kegiatan' , 'required');
        if ($this->form_validation->run()== FALSE )
        {         
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/kegiatan/tambah', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
        }else {
            $this->Model_data->tambahDatakegiatan();
            redirect('kegiatan/index');
        }
        
        
        
    }


    public function detailDataKegiatan($id_kegiatan)
    {
        $data['judul']='Detail Kegiatan';
        $data['kegiatan'] = $this->Model_data->getDatakegiatanById($id_kegiatan);
        $data['gambar'] = $this->Model_data->getDatafotoById($id_kegiatan);

        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/kegiatan/detail', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function hapusDataKegiatan($id_kegiatan)
    {
        $this->Model_data->hapusDataKegiatan($id_kegiatan);
         redirect('kegiatan/index');
    }

    public function hapusFoto($id)
    {
        $this->Model_data->hapusDataFoto($id);
         redirect('kegiatan');
    }



}