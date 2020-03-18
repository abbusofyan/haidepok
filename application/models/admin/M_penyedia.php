<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penyedia extends CI_Model {

	public function listall()
	{
		return $this->db->get_where('user', ['level' => 'Penyedia'])->result_array();
	}

	public function counttempat()
	{
		$this->db->like('id_pemilik', $this->session->userdata('id_user'));
		return $this->db->count_all_results('tempat');
	}

	public function countall()
	{
		$this->db->where('level', 'Penyedia');
		$this->db->where('status', 'aktif');
		return $this->db->count_all_results('user');
	}

	public function verify($id)
	{
		$this->db->set('status', 'aktif');
		$this->db->where('id_user', $id);
		return $this->db->update('user');
	}
}

/* End of file M_penyedia.php */
/* Location: ./application/models/M_penyedia.php */