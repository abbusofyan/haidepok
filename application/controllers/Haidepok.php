<?php

 class Haidepok extends CI_Controller {

 	function __contructs(){
 		parent::__contructs();

 		$this->load->model('GambarModel');
        $this->load->model('M_booking');
	}
 	public function index()
    {
        $data['tempat'] = $this->db->query("SELECT * FROM tempat LIMIT 3")->result_array();
 		$this->load->view('landingpage', $data);
 	}

 	public function daftar_ruangpublik(){

 		$this->load->view('daftar_ruangpublik');
 	}

 	public function detailtempat($id){
 		$this->load->model('M_caritempat');
 		$data['detailtempat']     = $this->M_caritempat->detailtempat($id);
 		$data ['fasilitastempat'] = $this->M_caritempat->fasilitastempat($id);
 		// var_dump($data[0]['fasilitastempat']);
 		$this->load->view('detail_tempat', $data);
 	}


    public function bookingtempat(){
    // $nama    = $this->input->post('nama');

    $event          = $this->input->post('jenis_penggunaan');
    $data_jenis     = array(
             'jenis_penggunaan'=>$event,
    );

    $this->db->insert('jenis_penggunaan',$data_jenis);

    $id_jenispenggunaan = $this->db->query("SELECT id_jenispenggunaan FROM jenis_penggunaan ORDER BY id_jenispenggunaan DESC LIMIT 1")->row_array();
    $id = $id_jenispenggunaan['id_jenispenggunaan'];

    $alamat  = $this->input->post('alamat');
    $email   = $this->input->post('email');
    $telepon = $this->input->post('telepon');
    $tanggalmulai   = $this->input->post('tanggal_mulai');
    $tanggalselesai = $this->input->post('tanggal_selesai');
    $id_tempat      = $this->input->post('id_tempat');
    $data   = array(
            // 'nama'   =>$nama,
            'alamat' =>$alamat,
            'email'  =>$email,
            'telepon'=>$telepon,
            'id_tempat'       =>$id_tempat,
            'id_user'         => $this->session->userdata('id_user'),
            'id_jenispenggunaan' => $id,
            'id_status'       =>2,
            'tanggal_mulai'   =>$tanggalmulai,
            'tanggal_selesai' =>$tanggalselesai, 
    );
    $insert1 = $this->db->insert('penggunaan_tempat',$data);

    redirect('Haidepok/checkouttempat/'.$id_tempat);
       }

    public function checkouttempat($id){
        if (!$this->session->userdata('username')) { ?>
            <script>alert('Silahkan Login Dahulu');
            window.location='<?=base_url('auth') ?>'
            </script>
        <?php
        }
        $this->load->model('M_checkout');
        $data['checkout'] = $this->M_checkout->checkout($id);
        $data['checkout'] = $this->db->join('user', 'user.id_user=tempat.id_pemilik');
        $data['checkout'] = $this->db->get_where('tempat', ['id_tempat' => $id])->row_array();
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $this->load->view('v-checkouttempat', $data);
    }

    public function checkorder($id)
    {
        $this->db->join('tempat', 'tempat.id_tempat=penggunaan_tempat.id_tempat');
        $this->db->join('jenis_penggunaan', 'jenis_penggunaan.id_jenispenggunaan=penggunaan_tempat.id_jenispenggunaan');
        $this->db->join('status', 'status.id_status=penggunaan_tempat.id_status');
        $this->db->join('user', 'user.id_user=penggunaan_tempat.id_user');
        $data['get'] = $this->db->get('penggunaan_tempat', ['id_user' => $id])->row_array();

        // $this->load->view('include/header');
        $this->load->view('v-checkorder', $data);
        // $this->load->view('include/footer');
    }

}
 