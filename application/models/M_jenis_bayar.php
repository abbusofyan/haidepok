<?php

class M_jenis_bayar extends CI_Model{

  public function get_data() {
		$query = $this->db->get('jenis_bayar');
    return $query->result_array();
	}

}
