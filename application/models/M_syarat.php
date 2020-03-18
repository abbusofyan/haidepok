<?php

class M_syarat extends CI_Model{

  public function get_data() {
		$query = $this->db->get('mastersyaratdanketentuan');
    return $query->result_array();
	}

}
