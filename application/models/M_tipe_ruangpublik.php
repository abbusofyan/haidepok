<?php

class M_tipe_ruangpublik extends CI_Model{

  public function input_data($data,$table) {
    $this->db->insert($table,$data);
  }

  public function get_data() {
		$query = $this->db->get('tipe_ruangpublik');
    return $query->result_array();
	}

}
