<?php
class Duafa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_data');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Data Duafa';

        #isi#       
        $data['duafa'] = $this->Model_data->getAllduafa();
        if ($this->input->post('keyword')) {
            $data['duafa'] = $this->Model_data->getAllduafa();
        }
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/duafa/index', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function tambahDataduafa()
    {
        #judul#
        $data['judul'] = 'Tambah Data Duafa';

        $this->form_validation->set_rules('nama', 'nama', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required', array('required' => '%s tidak boleh kosong !'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/duafa/tambah', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {
            $this->Model_data->tambahDataduafa();
            redirect('duafa');
        }
    }

    public function hapusDataduafa($id)
    {
        $this->Model_data->hapusDataduafa($id);
        redirect('duafa');
    }

    public function detailDataduafa($id)
    {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['duafa'] = $this->Model_data->getDataduafaById($id);
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/duafa/index', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function editDataduafa($id)
    {
        #judul#
        $data['judul'] = 'Tambah Data Duafa';
        $data['duafa'] = $this->Model_data->getDataduafaById($id);

        $this->form_validation->set_rules('nama', 'nama', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required', array('required' => '%s tidak boleh kosong !'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/duafa/edit', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {
            $this->Model_data->editDataduafa();
            redirect('duafa');
        }
    }
}
