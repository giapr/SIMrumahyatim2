
<?php
class keuangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_data');
    }
    //laporan akhir//
    public function laporan()
    {
        $data['judul'] = 'Laporan Keuangan';

        #isi# 
        $data['laporan'] = $this->Model_data->getAlllaporan();
        if ($this->input->post('keyword')) {
            $data['laporan'] = $this->Model_data->getAlllaporan();
        }
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/keuangan/laporan', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function search()
    {
        $data['judul'] = 'Laporan Keuangan';


        $tgl_awal = $this->input->post('tanggal_awal');
        $tgl_akhir = $this->input->post('tanggal_akhir');

        $saldo_awal = "SELECT nominal_keluar,nominal_masuk FROM laporan 
        where date(tanggal) < '$tgl_awal' order by tanggal asc";

        $query = "SELECT nominal_keluar,nominal_masuk, keterangan, tanggal, id, id_pemasukan, id_pengeluaran FROM laporan where date(tanggal)  between '$tgl_awal' and '$tgl_akhir'  order by tanggal asc";

        $data['saldo_awal'] = $this->db->query($saldo_awal)->result_array();
        $data['laporan'] = $this->db->query($query)->result_array();


        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/keuangan/search', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }


    public function pemasukan()
    {
        $data['judul'] = 'Laporan Pemasukan';

        #isi# 
        $data['pemasukan'] = $this->Model_data->getAllPemasukan();
        if ($this->input->post('keyword')) {
            $data['pemasukan'] = $this->Model_data->getAllPemasukan();
        }
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/keuangan/pemasukan', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }
    //pemasukan//
    public function tambahDataPemasukan()
    {
        #judul#
        $data['judul'] = 'Tambah Data Pemasukan';

        $data['donatur'] = $this->Model_data->getAllDonatur();
        if ($this->input->post('keyword')) {
            $data['donatur'] = $this->Model_data->getAllDonatur();
        }
        $data['pemasukan'] = $this->Model_data->getAllPemasukan();
        if ($this->input->post('keyword')) {
            $data['pemasukan'] = $this->Model_data->getAllPemasukan();
        }

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('id_donatur', 'Donatur', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('nominal_masuk', 'Nominal', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('bukti', 'Bukti', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/keuangan/pemasukan_tambah', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {

            $this->Model_data->tambahDataPemasukan();
            redirect('keuangan/pemasukan');
        }
    }


    public function hapusDatapemasukan($id)
    {
        $this->Model_data->hapusDatapemasukan($id);
        redirect('keuangan/pemasukan');
    }

    public function detailDataPemasukan($id)
    {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['anakyatim'] = $this->Model_data->getDataPemasukanById($id);
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/keuangan/pemasukan', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    //pengeluaran//
    public function pengeluaran()
    {
        $data['judul'] = 'Laporan Pengeluaran';

        #isi# 
        $data['pengeluaran'] = $this->Model_data->getAllPengeluaran();
        if ($this->input->post('keyword')) {
            $data['pengeluaran'] = $this->Model_data->getAllPengeluaran();
        }
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/keuangan/pengeluaran', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);
    }

    public function tambahDataPengeluaran()
    {
        #judul#
        $data['judul'] = 'Tambah Data Pengeluaran';

        $data['pemasukan'] = $this->Model_data->getAllPemasukan();
        if ($this->input->post('keyword')) {
            $data['pemasukan'] = $this->Model_data->getAllPemasukan();
        }

        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('nominal_keluar', 'Jenis Kelamin', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('bukti', 'bukti', 'trim|required', array('required' => '%s tidak boleh kosong !'));


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/keuangan/pengeluaran_tambah', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {

            $this->Model_data->tambahDataPengeluaran();
            redirect('keuangan/pengeluaran');
        }
    }

    public function editDataPengeluaran()
    {
        #judul#
        $data['judul'] = 'Edit Data Pengeluaran';

        $data['keuangan'] = $this->Model_data->getAllpengeluaran();
        if ($this->input->post('keyword')) {
            $data['keuangan'] = $this->Model_data->getAllpengeluaran();
        }

        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('nominal_keluar', 'Jenis Kelamin', 'trim|required', array('required' => '%s tidak boleh kosong !'));
        $this->form_validation->set_rules('bukti', 'bukti', 'trim|required', array('required' => '%s tidak boleh kosong !'));


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('backend/template/meta', $data);
            $this->load->view('backend/template/navbar', $data);
            $this->load->view('backend/template/sidebar', $data);
            $this->load->view('backend/keuangan/edit_pengeluaran', $data);
            $this->load->view('backend/template/footer', $data);
            $this->load->view('backend/template/js', $data);
        } else {

            $this->Model_data->tambahDataPengeluaran();
            redirect('keuangan/pengeluaran');
        }
    }

    public function hapusDatapengeluaran($id)
    {
        $this->Model_data->hapusDatapengeluaran($id);
        redirect('keuangan/pengeluaran');
    }




    /* public function laporan()
    { 
        $data['judul'] = 'Laporan Pemasukan';

        #isi# 
        $data['pemasukan'] = $this->Model_data->getAllPemasukan();
        if ( $this->input->post('keyword') ) {
            $data['pemasukan'] = $this->Model_data->getAllPemasukan();
        }
        $this->load->view('backend/template/meta', $data);
        $this->load->view('backend/template/navbar', $data);
        $this->load->view('backend/template/sidebar', $data);
        $this->load->view('backend/keuangan/pemasukan', $data);
        $this->load->view('backend/template/footer', $data);
        $this->load->view('backend/template/js', $data);

    }*/
}
