<?php

class M_fasilitas extends CI_Model{

  public function get_data() {
		$query = $this->db->get('masterfasilitas');
    return $query->result_array();
	}

}
