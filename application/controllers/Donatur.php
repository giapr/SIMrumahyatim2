
<?php
class Donatur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_data');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Data Donatur';

        #isi#       
        $data['donatur'] = $this->Model_data->getAllDonatur();
        if ($this->input->post('keyword')) {
            $data['donatur'] = $this->Model_data->getAllDonatur();
        }
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/donatur/index', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function tambahDataDonatur()
    {
        #judul#
        $data['judul'] = 'Tambah Data Donatur';

        $this->form_validation->set_rules('nama', 'nama', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/donatur/tambah', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {
            $this->Model_data->tambahDataDonatur();
            redirect('donatur');
        }
    }

    public function hapusDataDonatur($id)
    {
        $this->Model_data->hapusDataDonatur($id);
        redirect('donatur');
    }

    public function detailDataDonatur($id)
    {
        $data['judul'] = 'Detail Data Donatur';
        $data['donatur'] = $this->Model_data->getDataDonaturById($id);
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/donatur/index', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function editDataDonatur($id)
    {
        #judul#
        $data['judul'] = 'Edit Data Donatur';
        $data['donatur'] = $this->Model_data->getDataDonaturById($id);

        $this->form_validation->set_rules('nama', 'nama', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/donatur/edit', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {
            $this->Model_data->editDataDonatur();
            redirect('donatur');
        }
    }
}
