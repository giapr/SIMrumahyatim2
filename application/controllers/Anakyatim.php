
<?php
class Anakyatim extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_data');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Data Anak Yatim';

        #isi#       
        $data['anakyatim'] = $this->Model_data->getAllAnakYatim();
        if ($this->input->post('keyword')) {
            $data['anakyatim'] = $this->Model_data->getAllAnakYatim();
        }
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/anakyatim/index', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function tambahDataAnakYatim()
    {
        #judul#
        $data['judul'] = 'Tambah Data Anak Yatim';

        $this->form_validation->set_rules('Nama_anak', 'Nama', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('Tgllahir_anak', 'Tanggal lahir', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('Jenis_k', 'Jenis Kelamin', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('Sekolah', 'Sekolah', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('Alamat', 'Alamat', 'trim|required', array('required' => '%s tidak boleh kosong !'));


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/anakyatim/tambah', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {
            $this->Model_data->tambahDataAnakYatim();
            redirect('anakyatim');
        }
    }

    public function hapusDataAnakYatim($id)
    {
        $this->Model_data->hapusDataAnakYatim($id);
        redirect('anakyatim');
    }

    public function detailDataAnakYatim($id)
    {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['anakyatim'] = $this->Model_data->getDataAnakYatimById($id);
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/anakyatim/index', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function editDataAnakYatim($id)
    {
        #judul#
        $data['judul'] = 'Tambah Data Anak Yatim';
        $data['anakyatim'] = $this->Model_data->getDataAnakYatimById($id);

        $this->form_validation->set_rules('Nama_anak', 'Nama', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('Tgllahir_anak', 'Tanggal lahir', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('Jenis_k', 'Jenis Kelamin', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('Sekolah', 'Sekolah', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('Alamat', 'Alamat', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/anakyatim/edit', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {
            $this->Model_data->editDataAnakYatim();
            redirect('anakyatim');
        }
    }
}
