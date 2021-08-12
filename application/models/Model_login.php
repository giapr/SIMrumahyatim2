<?php 

class Model_login extends CI_model{

    function cek_login($where){
        return $this->db->get_where('tbl_admin', $where);
    }
}



?>