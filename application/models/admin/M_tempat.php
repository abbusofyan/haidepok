<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tempat extends CI_Model {

	public function listall()
	{
		$this->db->select('*');
		$this->db->from('tempat');
		$this->db->join('jenis_tempat', 'jenis_tempat.id_jenistempat=tempat.id_jenistempat', 'left');
		$this->db->join('user', 'user.id_user=tempat.id_pemilik', 'left');
		return $this->db->get()->result_array();
	}

	public function add($data)
	{
		$this->db->insert('tempat', $data);
	}

	public function countall()
	{
		return $this->db->count_all('tempat');
	}

	public function verify($id)
	{
		$this->db->set('status_tempat', 'Terverifikasi');
		$this->db->where('id_tempat', $id);
		return $this->db->update('tempat');
	}

	public function listwhereiduser()
	{
		$iduser = $this->session->userdata('id_user');
		$this->db->join('jenis_tempat','jenis_tempat.id_jenistempat=tempat.id_jenistempat');
		return $this->db->get_where('tempat', ['id_pemilik' => $iduser])->result_array();
	}

}

/* End of file M_tempat.php */
/* Location: ./application/models/admin/M_tempat.php */