<?php

class M_wilayah extends CI_Model{

	public function get_data_kecamtatan() {
		$query = $this->db->query('SELECT * FROM `wilayah` GROUP BY kd_kecamatan');
    return $query->result_array();
	}

	function get_data_kelurahan($id_kecamatan){
    $query = $query = $this->db->query("SELECT * FROM wilayah WHERE kd_kecamatan = '$id_kecamatan'");
    return $query->result_array();
  }

}
