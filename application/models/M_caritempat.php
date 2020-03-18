<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_caritempat extends CI_Model {


	public function caritempat($lokasi)
	{
		$this->db->where('status_tempat', 'Terverifikasi');
		$this->db->like('nama_tempat', $lokasi);
		$this->db->or_like('alamat_tempat', $lokasi);
		$query = $this->db->get('tempat');
		return $query->result_array();
	}

	 public function detailtempat($id)
	 {
	 	 $this->db->join('user', 'user.id_user=tempat.id_pemilik');
		 $query = $this->db->get_where('tempat', ['id_tempat' => $id]);
		 return $query->result_array();
	 }

	 public function fasilitastempat($id)
	 {
	 	$this->db->select('master_fasilitas.fasilitas, master_fasilitas.id_masterfasilitas, fasilitas_tempat.jumlah');
	 	$this->db->from('master_fasilitas');
	 	$this->db->join('fasilitas_tempat','fasilitas_tempat.id_masterfasilitas=master_fasilitas.id_masterfasilitas');
	 	$this->db->where('fasilitas_tempat.id_tempat=',$id);
	 	$query=$this->db->get()->result_array();
        return $query;
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

 