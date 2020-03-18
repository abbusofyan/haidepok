<?php

class M_ruangpublik extends CI_Model{

  public function get_data() {
    $results = array();
    $this->db->select('pendaftaran_ruangpublik.*,jenis_bayar.*,jenis_ruangpublik.*,tipe_ruangpublik.*');
    $this->db->from('pendaftaran_ruangpublik');
    $this->db->join('jenis_bayar', 'jenis_bayar.id_jenisbayar = pendaftaran_ruangpublik.id_jenisbayar', 'left');
    $this->db->join('jenis_ruangpublik','pendaftaran_ruangpublik.id_jenisruangpublik = jenis_ruangpublik.id_jenisruangpublik', 'left');
    $this->db->join('tipe_ruangpublik','tipe_ruangpublik.id_tiperuangpublik = pendaftaran_ruangpublik.id_tiperuangpublik', 'left');

    $query = $this->db->get();

    if($query->num_rows() > 0) {
      $results = $query->result_array();
    }
    return $results;
  }

  public function input_data($data,$table) {
    $this->db->insert($table,$data);
    return $this->db->insert_id();
  }

  public function input_fasilitas($data) {
    $this->db->insert('fasilitas',$data);
  }

  public function input_tatatertib($data) {
    $this->db->insert('tata_tertib',$data);
  }

  public function input_syarat($data) {
    $this->db->insert('syaratdanketentuan',$data);
  }

  public function input_fungsi($data) {
    $this->db->insert('fungsi',$data);
  }

  public function input_foto($data) {
    $this->db->insert('foto_ruangpublik',$data);
  }

  public function get_detail($id) {
		$query = $this->db->get('pendaftaran_ruangpublik');
    return $query->result_array();
	}

}
