<?php

class Pengelola extends CI_Controller {

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

    //$this->load->library('custom_upload');

}
private function load($title = '', $datapath = '')
{
    $page = array(
        "head_admin_pengelola"    => $this->load->view('template2/head', array("title" => $title), true),
        "header_admin_pengelola"  => $this->load->view('template2/header', false, true),
        "main_js_admin_pengelola" => $this->load->view('template2/main_js', false, true),
        "sidebar_admin_pengelola" => $this->load->view('template_admin_pengelola/sidebar_admin_pengelola', false, true),
        "footer_admin_pengelola"  => $this->load->view('template2/footer', false, true)
    );
    return $page;
}

public function index(){
    $path = "";
    $data = array(
        "page"    => $this->load("dashboardpengelola", $path) ,
        "content" => $this->load->view('pengelola/dashboardpengelola', false, true)
    );

    $this->load->view('template_admin_pengelola/default_template_admin_pengelola', $data);
   }

public function daftarsemuapenggunaan(){
    $path = "";
    $data = array(
        "page"    => $this->load("daftarsemuapenggunaan", $path) ,
        "content" => $this->load->view('pengelola/daftarsemuapenggunaan', false, true)
    );

    $this->load->view('template_admin_pengelola/default_template_admin_pengelola', $data);
}
public function daftarpermohonanpenggunaan(){
    $path = "";
    $data = array(
        "page"    => $this->load("daftarpermohonanpenggunaan", $path) ,
        "content" => $this->load->view('pengelola/daftarpermohonanpenggunaan', false, true)
    );

    $this->load->view('template_admin_pengelola/default_template_admin_pengelola', $data);
}

public function daftarsemuaruangpublik(){
    $path = "";
    $datax= array(
        'ruangpublik' => $this->M_ruangpublik->get_data(),
    );
    $data = array(
        "page"    => $this->load("daftarsemuaruangpublik", $path) ,
        "content" => $this->load->view('pengelola/daftarsemuaruangpublik', $datax, true)
    );

    $this->load->view('template_admin_pengelola/default_template_admin_pengelola', $data);
}

public function daftarpendaftaranruangpublik(){
    $datax= array(
        'ruangpublik' => $this->M_ruangpublik->get_data(),
    );
    $path = "";
    $data = array(
        "page"    => $this->load("daftarpendaftaranruangpublik", $path) ,
        "content" => $this->load->view('pengelola/daftarpendaftaranruangpublik', $datax, true)
    );

    $this->load->view('template_admin_pengelola/default_template_admin_pengelola', $data);
}

public function inputruangpublik(){
    $path = "";
    $datax= array(
        'kecamatan' => $this->M_wilayah->get_data_kecamtatan(),
        'tipe' => $this->M_tipe_ruangpublik->get_data(),
        'jenis_bayar' => $this->M_jenis_bayar->get_data(),
        'fasilitas' => $this->M_fasilitas->get_data(),
        'tatatertib' => $this->M_tatatertib->get_data(),
        'syarat' => $this->M_syarat->get_data(),
        'fungsi' => $this->M_fungsi->get_data()
    );
    $data = array(
        "page"    => $this->load("inputruangpublik", $path) ,
        "content" => $this->load->view('pengelola/inputruangpublik',$datax, true),
    );

    $this->load->view('template_admin_pengelola/default_template_admin_pengelola', $data);
}

public function inputpenggunaan(){
    $path = "";
    $data = array(
        "page"    => $this->load("inputpenggunaan", $path) ,
        "content" => $this->load->view('pengelola/inputpenggunaan', false, true)
    );

    $this->load->view('template_admin_pengelola/default_template_admin_pengelola', $data);
}

public function detailruangpublik($id){
    $datax= array(
        'ruangpublik' => $this->M_ruangpublik->get_detail($id),
    );
    $path = "";
    $data = array(
        "page"    => $this->load("detailruangpublik", $path) ,
        "content" => $this->load->view('pengelola/detailruangpublik', $datax, true)
    );

    $this->load->view('template_admin_pengelola/default_template_admin_pengelola', $data);
}

function get_data_kelurahan(){
    $id_kecamatan = $this->input->post('id',TRUE);
    $data = $this->M_wilayah->get_data_kelurahan($id_kecamatan);
    echo json_encode($data);
}

public function inputdataruangpublik() {
  $nama_ruang_publik = $this->input->post('nama_ruang_publik');
	$pic_ruang_publik = $this->input->post('pic_ruang_publik');
	$no_telp = $this->input->post('no_telp');
  $no_whatsapp = $this->input->post('no_whatsapp');
  $email = $this->input->post('email');
  $alamat = $this->input->post('alamat');
  $rt = $this->input->post('rt');
  $rw = $this->input->post('rw');
  $kd_kecamatan = $this->input->post('kd_kecamatan');
  $kd_kelurahan = $this->input->post('kd_kelurahan');
  $harga = $this->input->post('harga');
  $kapasitas = $this->input->post('kapasitas');
  $jam_buka = $this->input->post('jam_buka');
  $jam_tutup = $this->input->post('jam_tutup');
  $deskripsi = $this->input->post('deskripsi');
  $tipe = $this->input->post('tipe');
  $jenis_bayar = $this->input->post('jenis_bayar');
  $fasilitas =  $this->input->post('fasilitas');
  $tatatertib = $this->input->post('tatatertib');
  $syarat = $this->input->post('syarat');
  $fungsi = $this->input->post('fungsi');

  // upload foto ruang publik
  $data_foto = [];

  $count = count($_FILES['files']['name']);

  if ($count > 1) {
    for($i=0;$i<$count;$i++){

      if(!empty($_FILES['files']['name'][$i])){

        $_FILES['file']['name'] = $_FILES['files']['name'][$i];
        $_FILES['file']['type'] = $_FILES['files']['type'][$i];
        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
        $_FILES['file']['error'] = $_FILES['files']['error'][$i];
        $_FILES['file']['size'] = $_FILES['files']['size'][$i];

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '5000';
        $config['file_name'] = $_FILES['files']['name'][$i];

        $this->load->library('upload',$config);

        if($this->upload->do_upload('file')){
          $uploadData = $this->upload->data();
          $filename = $uploadData['file_name'];

          $data_foto['totalFiles'][] = $filename;
        }
      }
    }
  }

  $data = array(
    'nama_ruangpublik' => $nama_ruang_publik,
    'pic_ruangpublik' => $pic_ruang_publik,
    'tlp_ruangpublik' => $no_telp,
    'wa_ruangpublik' => $no_whatsapp,
    'email_ruangpublik' => $email,
    'alamat_ruangpublik' => $alamat,
    'rt_ruangpublik' => $rt,
    'rw_ruangpublik' => $rw,
    'kel_ruangpublik' => $kd_kecamatan,
    'kec_ruangpublik' => $kd_kelurahan,
    'harga_ruangpublik' => $harga,
    'kapasitas_ruangpublik' => $kapasitas,
    'jam_buka' => $jam_buka,
    'jam_tutup' => $jam_tutup,
    'deskripsi_ruangpublik' => $deskripsi,
    'id_tiperuangpublik' => $tipe,
    'id_jenisbayar' => $jenis_bayar,
    'status_pendaftaran' => 1,
  );

  $this->db->trans_start();
	$rp_id = $this->M_ruangpublik->input_data($data,'pendaftaran_ruangpublik');

  // input fasilitas
  foreach ($fasilitas as $fasil) {
    $data_fasilitas = array(
      'id_fasilitas' => $fasil,
      'id_ruangpublik' => $rp_id
    );
    $this->M_ruangpublik->input_fasilitas($data_fasilitas);
  }

  // input tatatertib
  foreach ($tatatertib as $tatib) {
    $data_tatatertib = array(
      'id_tatatertib' => $tatib,
      'id_ruangpublik' => $rp_id
    );
    $this->M_ruangpublik->input_tatatertib($data_tatatertib);
  }

  // input syarat dan ketentuan
  foreach ($syarat as $syrt) {
    $data_syarat = array(
      'id_syaratdanketentuan' => $tatib,
      'id_ruangpublik' => $rp_id
    );
    $this->M_ruangpublik->input_syarat($data_syarat);
  }

  // input fungsi
  foreach ($fungsi as $fngs) {
    $data_fungsi = array(
      'id_fungsi' => $fngs,
      'id_ruangpublik' => $rp_id
    );
    $this->M_ruangpublik->input_fungsi($data_fungsi);
  }

  // input foto ruang publik
  foreach ($data_foto['totalFiles'] as $foto) {
    $data_foto = array(
      'id_ruangpublik' => $rp_id,
      'namafile' => $foto,
    );
    $this->M_ruangpublik->input_foto($data_foto);
  }
  $this->db->trans_complete();

  if ($this->db->trans_status() === FALSE)
  {
    // generate an error... or use the log_message() function to log your error
    echo log_message();
  } else {
    $this->session->set_flashdata('message', 'Ruang publik berhasil di daftarkan');
  	redirect('pengelola/daftarsemuaruangpublik');
  }

}


}
