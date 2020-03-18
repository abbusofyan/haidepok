<?php

class Admin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('text');
    $this->load->model('M_wilayah');
    $this->load->model('M_ruangpublik');
    $this->load->model('M_tipe_ruangpublik');
    $this->load->model('M_jenis_bayar');
    $this->load->model('M_fasilitas');
    $this->load->model('M_tatatertib');
    $this->load->model('M_syarat');
    $this->load->model('M_fungsi');
    //$this->load->model('M_Home');
    //$this->load->library('custom_upload');

}
private function load($title = '', $datapath = '')
{
    $page = array(
        "head_admin_admin"    => $this->load->view('template2/head', array("title" => $title), true),
        "header_admin_admin"  => $this->load->view('template2/header', false, true),
        "main_js_admin_admin" => $this->load->view('template2/main_js', false, true),
        "sidebar_admin_admin" => $this->load->view('template_admin_admin/sidebar_admin_admin', false, true),
        "footer_admin_admin"  => $this->load->view('template2/footer', false, true)
    );
    return $page;
}

public function index(){
    $path = "";
    $data = array(
        "page"    => $this->load("dashboardadmin", $path) ,
        "content" => $this->load->view('admin/dashboardadmin', false, true)
    );

    $this->load->view('template_admin_admin/default_template_admin_admin', $data);
   }

public function daftarpermohonanregis(){
    $path = "";
    $data = array(
        "page"    => $this->load("daftarpermohonanregis", $path) ,
        "content" => $this->load->view('admin/daftarpermohonanregis', false, true)
    );

    $this->load->view('template_admin_admin/default_template_admin_admin', $data);
}

public function permohonanpendaftaran(){
    $datax= array(
        'ruangpublik' => $this->M_ruangpublik->get_data(),
    );
    $path = "";
    $data = array(
        "page"    => $this->load("permohonanpendaftaran", $path) ,
        "content" => $this->load->view('admin/permohonanpendaftaran', $datax, true)
    );

    $this->load->view('template_admin_admin/default_template_admin_admin', $data);
}

public function approveruangpublik($id,$status) {
  $this->db->set('status_pendaftaran', $status, FALSE);
  $this->db->where('id_ruangpublik', $id);
  $this->db->update('pendaftaran_ruangpublik');

  $this->session->set_flashdata('message', 'Status ruang publik berhasil diupdate');
  redirect('/Admin/permohonanpendaftaran', 'refresh');
}

public function detailpendaftaran($id){
    $datax= array(
        'ruangpublik' => $this->M_ruangpublik->get_detail($id),
    );
    $path = "";
    $data = array(
        "page"    => $this->load("permohonanpendaftaran", $path) ,
        "content" => $this->load->view('admin/detailpendaftaran', $datax, true)
    );

    $this->load->view('template_admin_admin/default_template_admin_admin', $data);
}

}
