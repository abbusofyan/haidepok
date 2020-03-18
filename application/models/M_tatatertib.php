<?php

class M_tatatertib extends CI_Model{

  public function get_data() {
		$query = $this->db->get('mastertatatertib');
    return $query->result_array();
	}

}
