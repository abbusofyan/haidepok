<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Auth extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model('login/login_model');
		} 
		//index
		public function index()
		{
			if ($this->session->userdata('level') == 'Admin') {
				redirect('admin/Dashboard');
			}elseif ($this->session->userdata('level') == 'Penyewa') {
				redirect();
			}
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$data['title'] = 'Login';
				$this->load->view('_login/login-page', $data);
			} else {
				$email = $this->input->post('email');
				$password = $this->input->post('pass');

				$data = $this->login_model->cek_login($email,$password);

				if ($data) {
					$data_session = [
						'id_user'   => $data->id_user,
						'nik'       => $data->nik,
						'nama'      => $data->nama,
						'username'  => $data->username,
						'alamat'    => $data->alamat,
						'kecamatan' => $data->kecamatan,
						'kelurahan' => $data->kelurahan,
						'telepon'   => $data->telepon,
						'email'     => $data->email,
						'tipe'      => $data->tipe,
						'level'     => $data->level,
						'status'    => $data->status
					];
					$this->session->set_userdata($data_session);

					if ($this->session->userdata('level') == 'Penyewa') {
						redirect();
					} elseif ($this->session->userdata('level') == 'Admin') {
						redirect('admin/dashboard');
					} elseif ($this->session->userdata('level') == 'Penyedia') {
						if ($this->session->userdata('status')=='aktif') {
							redirect();
						} else { ?>
							<script>alert('Akun Belum Diverifikasi');
							window.location='<?=base_url('auth') ?>'
							</script>
						<?php
						}
					}
				} else { ?>
					<script>alert('Login Gagal, Username/Password Salah');
						window.location='<?=base_url('auth') ?>'
					</script>
				<?php
				}
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('Haidepok');
		}
		
		public function register()
		{
			$this->form_validation->set_rules('nik', 'NIK', 'trim|required|min_length[16]|max_length[16]');
			$this->form_validation->set_rules('nama', 'Name', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
			$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'trim|required');
			$this->form_validation->set_rules('telepon', 'Telepon', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('tipe', 'Tipe', 'trim|required');
			$this->form_validation->set_rules('level', 'Level', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
					$nik       = $this->input->post('nik');
					$nama      = $this->input->post('nama');
					$username  = $this->input->post('username');
					$password  = $this->input->post('password');
					$alamat    = $this->input->post('alamat');
					$kecamatan = $this->input->post('kecamatan');
					$kelurahan = $this->input->post('kelurahan');
					$telepon   = $this->input->post('telepon');
					$email     = $this->input->post('email');
					$tipe      = $this->input->post('tipe');
					$level     = $this->input->post('level');
					if ($level == 'Penyedia') {
						$status = 'belum aktif';
					} elseif($level=='Penyewa') {
						$status = 'aktif';
					}

					$data = array(
						'nik'       => $nik,
						'nama'      => $nama,
						'username'  => $username,
						'password'  => $password,
						'alamat'    => $alamat,
						'kecamatan' => $kecamatan,
						'kelurahan' => $kelurahan,
						'telepon'   => $telepon,
						'email'     => $email,
						'tipe'      => $tipe,
						'level'     => $level,
						'status'    => $status
					);
					// var_dump($data);
					// die();
					$this->login_model->daftar_akun('user',$data);
					redirect('auth');
			}else{
				$this->load->view('_login/register-page');
			}
		}
	}