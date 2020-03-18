<?php

class M_fungsi extends CI_Model{

  public function get_data() {
		$query = $this->db->get('masterfungsi');
    return $query->result_array();
	}

}
