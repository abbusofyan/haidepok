<?php 
	defined ('BASEPATH') or exit ("No direct script access allowed");

	class Login_model extends CI_Model
	{
		public function cek_login($email,$password)
		{
			$query = $this->db->query("SELECT * FROM user WHERE email='$email' AND password='$password'");
			if ($query->num_rows() > 0) {
				return $query->row();
			}
		}
		public function tampil_data($username)
		{
			$this->db->where('username',$username);
			$query = $this->db->get('user');

			$query->row();
		}
		// daftar akun
		public function daftar_akun($table,$data)
		{
			$this->db->insert($table,$data);
		}
	}