<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan extends CI_Model {

	public function listall()
	{
		$setid = $this->session->userdata('id_user');
		$this->db->where('id_pemilik', $setid);
		$this->db->join('tempat','tempat.id_tempat=penggunaan_tempat.id_tempat', 'left');
		$this->db->join('user','user.id_user=penggunaan_tempat.id_user', 'left');
		$this->db->join('jenis_penggunaan','jenis_penggunaan.id_jenispenggunaan=penggunaan_tempat.id_jenispenggunaan', 'left');
		$this->db->join('status','status.id_status=penggunaan_tempat.id_status', 'left');
		return $this->db->get('penggunaan_tempat')->result_array();
	}

	public function countpesan()
	{
		$setid = $this->session->userdata('id_user');
		$this->db->where('id_pemilik', $setid);
		$this->db->join('tempat','tempat.id_tempat=penggunaan_tempat.id_tempat', 'left');
		$this->db->join('user','user.id_user=penggunaan_tempat.id_user', 'left');
		$this->db->join('jenis_penggunaan','jenis_penggunaan.id_jenispenggunaan=penggunaan_tempat.id_jenispenggunaan', 'left');
		$this->db->join('status','status.id_status=penggunaan_tempat.id_status', 'left');
		return $this->db->count_all_results('penggunaan_tempat');
	}

}

/* End of file M_pemesanan.php */
/* Location: ./application/models/admin/M_pemesanan.php */