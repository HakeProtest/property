<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Model {
		
		public function add($data){
			// $this->db->insert('user',$data);
			return $this->db->insert('account',$data);
		}
		
		public function get(){
			return $this->db->get('account')->result();
		}
		
		public function get_for_login($id){
			$this->db->where('username',$id);
			$cek=$this->db->get('account')->row(0);
			return $cek;
		}
		
		public function get_user_data($id){
			$this->db->where('username',$id);
			return $cek=$this->db->get('account')->row(0);
		}

		/*public function email_exists($email)
		{
			$sql = "SELECT username, email FROM user WHERE email = '{$email}' LIMIT 1 ";
			$result = $this->db->query($sql);
			$row = $result->row();

			return ($result->num_rows() === 1 && $row->email) ? $row->username : false;
		}

		public function verify_reset_password_code($email, $code)
		{
			$sql = "SELECT username, email FROM user WHERE email = '{$email}' LIMIT 1 ";
			$row = $result->row();

			if ($result->num_rows() === 1){
				return ($code == md5($this->config->item('salt') . $row->username))? true : false;
			} else {
				return false;
			}
		}*/

	}