<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_caritempat');
	}

	public function caritempat()
	{
		$lokasi = $this->input->post('lokasi');
		$s = $this->M_caritempat->caritempat($lokasi);
		if ($s) {
			$data = array(
				'status' => 1,
				'searchresult' => $lokasi,
				'listlokasi' => $s
			);
			$this->parser->parse('daftar_ruangpublik', $data);
		}else{
			$data = array(
				'status' => 0,
				'searchresult' => $lokasi,
				'listlokasi' => $s
			);
			$this->parser->parse('daftar_ruangpublik', $data);
		}
	}

	public function carilokasiajax()
	{
		$lokasi = $this->input->post('lokasi');
	
		$s = $this->M_caritempat->caritempat($lokasi);
		if ($s) {
			$data = array(
				'status' => 1,
				'searchresult' => $lokasi,
				'listlokasi' => $s
			);
		}else{
			$data = array('status' => 0, );
		}
	}
}
