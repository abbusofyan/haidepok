<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_checkout extends CI_Model {

	 public function checkout($id)
	 {
		 $query = $this->db->query('SELECT * FROM `penggunaan_tempat` WHERE `penggunaan_tempat`.`id_penggunaantempat` = '.$id.' ');
		 return $query->result_array();
	 }

	 public function jenispenggunan($id)
	 {
	 	$query = $this->db->query('SELECT * FROM `jenis_penggunaan` WHERE `jenis_penggunaan`.`id_jenispenggunaan` = '.$id.' ');
		 return $query->result_array();
	 }



 // public function detailtempat($id) {
 // $this->db->select('*');
 // $this->db->from('tempat');
 // $this->db->join('fasilitas_tempat','fasilitas_tempat.Id_tempat=tempat.Id_tempat');
 // $this->db->join('master_fasilitas','master_fasilitas.Id_masterfasilitas=fasilitas_tempat.Id_masterfasilitas');
 // $this->db->where($id);
 // $query = $this->db->get();
 // return $query->result();
// }

}

 