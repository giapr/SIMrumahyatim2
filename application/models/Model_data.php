<?php

class Model_data extends CI_model
{
    //INDEX//
    //profile//
    public function getAllProfile()
    {
        return $this->db->get('profil')->result_array(); //select * FROM my table//
    }
    //catatan
    public function getAllCatatan()
    {
        return $this->db->get('catatan')->result_array(); //select * FROM my table//
    }


    public function getAllChart()
    {
        $this->db->group_by('Jenis_k');
        $this->db->select('Jenis_k');
        $this->db->select("count(*) as total");
        return $this->db->from('tbl_anakyatim')
            ->get()
            ->result();
    }

    //ANAK YATIM
    public function getAllAnakyatim()
    {
        return $this->db->get('tbl_anakyatim')->result_array(); //select * FROM my table//
    }

    public function getDataAnakYatimById($id)
    {
        return $this->db->get_where('tbl_anakyatim', ['id' => $id])->row_array();
    }

    public function tambahDataAnakYatim()
    {
        $data = [
            "Nama_anak" => $this->input->post('Nama_anak'),
            "Tgllahir_anak" => $this->input->post('Tgllahir_anak'),
            "Jenis_k" => $this->input->post('Jenis_k'),
            "Sekolah" => $this->input->post('Sekolah'),
            "Alamat" => $this->input->post('Alamat')

        ];
        $this->db->insert('tbl_anakyatim', $data);
    }

    public function hapusDataAnakYatim($id)
    {
        //$this->db->where('id', $id);//
        $this->db->delete('tbl_anakyatim', ['id' => $id]);
    }


    public function editDataAnakYatim()
    {
        $data = [
            "Nama_anak" => $this->input->post('Nama_anak'),
            "Tgllahir_anak" => $this->input->post('Tgllahir_anak'),
            "Jenis_k" => $this->input->post('Jenis_k'),
            "Sekolah" => $this->input->post('Sekolah'),
            "Alamat" => $this->input->post('Alamat')

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_anakyatim', $data);
    }

    public function cariDataAnakYatim()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('Nama_anak', $keyword);
        $this->db->or_like('Tgllahir_anak', $keyword);
        $this->db->or_like('Jenis_k', $keyword);
        $this->db->or_like('Sekolah', $keyword);
        $this->db->or_like('Alamat', $keyword);
        return $this->db->get('tbl_anakyatim')->result_array();
    }

    //Duafa//
    public function getAllduafa()
    {
        return $this->db->get('tbl_duafa')->result_array(); //select * FROM my table//
    }

    public function tambahDataduafa()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat')
        ];
        $this->db->insert('tbl_duafa', $data);
    }

    public function hapusDataduafa($id)
    {
        //$this->db->where('id', $id);//
        $this->db->delete('tbl_duafa', ['id' => $id]);
    }

    public function getDataduafaById($id)
    {
        return $this->db->get_where('tbl_duafa', ['id' => $id])->row_array();
    }

    public function editduafa()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat')

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_duafa', $data);
    }




    //DONATUR//
    public function getAllDonatur()
    {
        return $this->db->get('tbl_donatur')->result_array(); //select * FROM my table//
    }

    public function tambahDataDonatur()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat')
        ];
        $this->db->insert('tbl_donatur', $data);
    }

    public function hapusDataDonatur($id)
    {
        //$this->db->where('id', $id);//
        $this->db->delete('tbl_donatur', ['id' => $id]);
    }

    public function getDataDonaturById($id)
    {
        return $this->db->get_where('tbl_donatur', ['id' => $id])->row_array();
    }

    public function editDataDonatur()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "alamat" => $this->input->post('alamat')
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_donatur', $data);
    }

    public function cariDataDonatur()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('alamat', $keyword);

        return $this->db->get('tbl_donatur')->result_array();
    }


    //KEUANGAN//
    //laporan
    public function getAlllaporan()
    {
        return $this->db->get('laporan')->result_array(); //select * FROM my table//
    }

    /*public function laporan()
    {
        $bc = $this->db->query(
        select 
        ifnull((SELECT sum(jumlah from (laporan WHERE ((Month(tgl)=1 )
    }*/

    public function laporan_search()
    {
        /*$tgl_awal = $this->input->post('tanggal_awal');
        $tgl_akhir = $this->input->post('tanggal_akhir');

        $saldo_awal = "SELECT nominal_keluar,nominal_masuk FROM laporan 
        where date(tanggal) < '$tgl_awal' order by tanggal asc";

        $query = "SELECT * FROM laporan where date(tanggal)  between '$tgl_awal' and '$tgl_akhir'  order by tanggal asc";

        $data['saldo_awal'] = $this->db->query($saldo_awal)->result_array();
        $data['laporan'] = $this->db->query($query)->result_array();*/

        return $this->db->get('laporan')->result_array();
    }


    //pemasukan//
    public function getAllpemasukan()
    {
        return $this->db->get('tbl_pemasukan')->result_array(); //select * FROM my table//

    }



    /*public function tambahDataPemasukan()
    {
        $nama = $this->input->post('nama');
        $nominal = $this->input->post('nominal');
        $tanggal = $this->input->post('tanggal');
        $bukti = $_FILES['bukti'];
        if ($bukti=''){}else{
            $config['upload_path'] = './assets/buktipemasukan';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti')) {
                echo "eror";
            }else{
                $bukti = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama' => $nama,
            'nominal' => $nominal,
           /* 'id_donatur' => $this->input->post('id'),
            'tanggal' => $tanggal,
            'bukti' => $bukti
        );

        $this->db->insert('tbl_pemasukan', $data);
    }*/

    public function tambahDataPemasukan()
    {
        $anggota =  $this->db->get_where('tbl_donatur', ['id' => $this->input->post('id_donatur')])->row_array();
        $config['upload_path']          = './assets/buktipemasukan';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('bukti')) {
            echo "eror";
        } else {

            $bukti = $this->upload->data();
            $bukti = $bukti['file_name'];

            $this->db->trans_start();
            $data = [
                "keterangan" => 'Donasi A/n ' . $anggota['nama'],
                "tanggal" => $this->input->post('tanggal'),
                "nominal_masuk" => $this->input->post('nominal_masuk'),
                "id_donatur" => $this->input->post('id_donatur'),
                "tipe_pemasukan" => 'donasi',
                "bukti" => $bukti
            ];

            $this->db->insert('tbl_pemasukan', $data);

            $last_id = $this->db->insert_id('');

            $laporan = [
                'id_pemasukan' => $last_id,
                "tanggal" => $this->input->post('tanggal'),
                'keterangan' => 'Donasi A/n ' . $anggota['nama'],
                'nominal_masuk' => $this->input->post('nominal_masuk')
            ];
            $this->db->insert('laporan', $laporan);

            $this->db->trans_complete();
        }
    }

    public function hapusDatapemasukan($id)
    {
        //$this->db->where('id', $id);//
        //$this->db->delete('tbl_pemasukan', ['id' => $id]);
        $this->db->trans_start();

        $this->db->delete('tbl_pemasukan', ['id' => $id]);
        $this->db->delete('laporan', ['id_pemasukan' => $id]);

        $this->db->trans_complete();
    }

    //pengeluaran//
    public function getAllpengeluaran()
    {
        return $this->db->get('tbl_pengeluaran')->result_array(); //select * FROM my table//
    }

    public function tambahDataPengeluaran()
    {
        $config['upload_path']          = './assets/buktipemasukan';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('bukti')) {
            echo "eror";
        } else {
            $bukti = $this->upload->data();
            $bukti = $bukti['file_name'];

            $this->db->trans_start();
            $data = [
                "keterangan" => $this->input->post('keterangan'),
                "tanggal" => $this->input->post('tanggal'),
                "nominal_keluar" => $this->input->post('nominal_keluar'),
                "bukti" => $bukti
            ];
            $this->db->insert('tbl_pengeluaran', $data);

            $last_id = $this->db->insert_id();

            $laporan = [
                'id_pengeluaran' => $last_id,
                'tanggal' => $this->input->post('tanggal'),
                'keterangan' => $this->input->post('keterangan'),
                'nominal_keluar' => $this->input->post('nominal_keluar')
            ];

            $this->db->insert('laporan', $laporan);

            $this->db->trans_complete();

            if ($this->db->trans_Status() === FALSE) {
                echo "rollback";
            } else {
                echo "commited";
            }
        }
    }



    public function hapusDatapengeluaran($id)
    {
        //$this->db->where('id', $id);//
        //$this->db->delete('tbl_pemasukan', ['id' => $id]);
        $this->db->trans_start();

        $this->db->delete('tbl_pengeluaran', ['id' => $id]);
        $this->db->delete('laporan', ['id_pengeluaran' => $id]);

        $this->db->trans_complete();
    }

    public function getDataPemasukanById($id)
    {
        return $this->db->get_where('tbl_pemasukan', ['id' => $id])->row_array();
    }


    /* public function tambahDataTransaksi()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "nominal" => $this->input->post('nominal')
            "jenis" => $this->input->post('jenis')
            "id_donatur" => $this->input->post('id')
            "date" => $this->input->post('date')
            "nominal" => $this->input->post('nominal')
        ];
        $this->db->insert('tbl_transaksi', $data);
    }*/

    public function hapusDataTransaksi($id)
    {
        //$this->db->where('id', $id);//
        $this->db->delete('tbl_transaksi', ['id' => $id]);
    }

    public function getDataTransaksiById($id)
    {
        return $this->db->get_where('tbl_transaksi', ['id' => $id])->row_array();
    }

    //KEGIATAN//
    public function getAllKegiatan()
    {
        //return $this->db->get('kegiatan')->result_array(); //select * FROM my table//
        $this->db->select('*');
        $this->db->FROM('kegiatan');
        $this->db->join('tbl_fotokegiatan', 'kegiatan.id_kegiatan = tbl_fotokegiatan.id_kegiatan');
        return $this->db->get('')->result_array();
    }

    public function getAllDataKegiatan()
    {
        return $this->db->get('kegiatan')->result_array(); //select * FROM my table//
    }

    public function getAllfoto()
    {
        return $this->db->get('tbl_fotokegiatan')->result_array(); //select * FROM my table//
    }




    public function getDataKegiatanById($id_kegiatan)
    {
        return $this->db->get_where('kegiatan', ['id_kegiatan' => $id_kegiatan])->row_array();
    }

    public function getDatafotoById($id_kegiatan)
    {
        return $this->db->get_where('tbl_fotokegiatan', ['id_kegiatan' => $id_kegiatan])->result_array();
    }

    public function editDataKegiatan()
    {

        $this->db->trans_start();

        $data = [
            "nama_kegiatan" => $this->input->post('nama_kegiatan'),
            "tanggal_kegiatan" => $this->input->post('tanggal_kegiatan'),
            "deskripsi_kegiatan" => $this->input->post('deskripsi_kegiatan')

        ];


        $this->db->where('id_kegiatan', $this->input->post('id_kegiatan'));
        $this->db->update('kegiatan', $data);


        $last_id = $this->input->post('id_kegiatan');


        $upload = ($_FILES['image']['name']);
        if ($upload) {
            $numberofFiles = sizeof($upload);

            // var_dump($numberofFiles);
            // die;

            $files = $_FILES['image'];
            $config['allowed_types']    = 'gif|jpg|jpeg|png|pdf';
            $config['upload_path']      = './assets/buktipemasukan';

            $this->load->library('upload', $config);

            for ($i = 0; $i < $numberofFiles; $i++) {

                $_FILES['image']['name'] = $files['name'][$i];
                $_FILES['image']['type'] = $files['type'][$i];
                $_FILES['image']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['image']['error'] = $files['error'][$i];
                $_FILES['image']['size'] = $files['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $data = $this->upload->data();
                    $imageName = $data['file_name'];
                    //var_dump($imageName);
                    $insert[$i]['foto'] = $imageName;
                    $insert[$i]['id_kegiatan'] = $last_id;
                }
            }

            //die;
            $this->db->insert_batch('tbl_fotokegiatan', $insert);
            /*$this->db->set('foto_utm',1);
                                     $this->db->where('foto',$data);
                                     $this->db->update('tbl_fotokegiatan');*/

            $this->db->trans_complete();
        }
    }



    public function hapusDataKegiatan($id_kegiatan)
    {
        //$this->db->where('id', $id);//
        //$this->db->delete('tbl_pemasukan', ['id' => $id]);
        $this->db->trans_start();

        $this->db->delete('tbl_fotokegiatan', ['id_kegiatan' => $id_kegiatan]);
        $this->db->delete('kegiatan', ['id_kegiatan' => $id_kegiatan]);

        $this->db->trans_complete();
    }

    public function hapusDataFoto($id)
    {
        //$this->db->where('id', $id);//
        //$this->db->delete('tbl_pemasukan', ['id' => $id]);


        $this->db->delete('tbl_fotokegiatan', ['id' => $id]);
    }




    public function tambahDatakegiatan()
    {


        $data = [
            "nama_kegiatan" => $this->input->post('nama_kegiatan'),
            "tanggal_kegiatan" => $this->input->post('tanggal_kegiatan'),
            "deskripsi_kegiatan" => $this->input->post('deskripsi_kegiatan')

        ];
        $this->db->insert('kegiatan', $data);

        $last_id = $this->db->insert_id();

        $upload = ($_FILES['foto']['name']);
        if ($upload) {
            $numberofFiles = sizeof($upload);
            /*var_dump($numberofFiles);
                                    die;*/

            $files = $_FILES['foto'];
            $config['allowed_types']    = 'gif|jpg|jpeg|png|pdf';
            $config['upload_path']      = './assets/buktipemasukan';

            $this->load->library('upload', $config);

            for ($i = 0; $i < $numberofFiles; $i++) {

                $_FILES['foto']['name'] = $files['name'][$i];
                $_FILES['foto']['type'] = $files['type'][$i];
                $_FILES['foto']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['foto']['error'] = $files['error'][$i];
                $_FILES['foto']['size'] = $files['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload('foto')) {
                    $data = $this->upload->data();
                    $imageName = $data['file_name'];
                    //var_dump($imageName);
                    $insert[$i]['foto'] = $imageName;
                    $insert[$i]['id_kegiatan'] = $last_id;
                }
            }
            //die;
            $this->db->insert_batch('tbl_fotokegiatan', $insert);
            /*$this->db->set('foto_utm',1);
                                     $this->db->where('foto',$data);
                                     $this->db->update('tbl_fotokegiatan');*/
        }
    }

    public function getAllDataprofil()
    {
        return $this->db->get('profil')->result_array(); //select * FROM my table//
    }
}

                    
                        
                               /*$jumlahData = count($_FILES['foto']['name']);

                                for ($i=0; $i<$jumlahData; $i++):

                                $_FILES['file']['name']     = $_FILES['foto']['name'][$i];
                                $_FILES['file']['type']     = $_FILES['foto']['name'][$i];
                                $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'][$i];
                                $_FILES['file']['size']     = $_FILES['foto']['size'][$i];

                                $config['upload_path']      ='./assets/buktipemasukan';
                                $config['allowed_types']    = 'gif|jpg|jpeg|png|pdf';


                                $this->load->library('upload', $config);
                                $this->upload->initialize($config);
                                if ( ! $this->upload->do_upload('file'))
                                {
                                       echo "eror";
                                }
                                else
                                {
                                        $fileData = $this->upload->data();
                                        $uploadData[$i]['foto'] = $fileData['file_name']*/

                                 
                                         /* $fileData = [
                                                    'id_kegiatan' => $last_id,
                                                    //'foto' => $uploadData[$i]['foto']
                                                    
                                                ];  

                                        $this->db->insert('tbl_fotokegiatan', $fileData);
                                             $this->db->trans_complete();*/
