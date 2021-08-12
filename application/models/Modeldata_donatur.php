<?php 

class Model_data extends CI_model
{
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

    

}

