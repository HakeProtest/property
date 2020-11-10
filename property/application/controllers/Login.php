<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('user');
		$this->load->library('session');
	}
	
	public function index(){
		$this->load->view('login/tampil_login');
	}
	
	public function proses_login(){
		if($this->input->post('login')){
			$id = $this->input->post('id');
			$password = $this->input->post('password');

			$this->form_validation->set_rules('id','ID','required');
			$this->form_validation->set_rules('password','Password','required');
			
			if ($this->form_validation->run() == FALSE) {
				redirect('login','refresh');
			} else {
				$this->session->set_userdata('username',$id);
				$user = $this->user->get_for_login($id);
				$this->session->set_userdata('id_account',$user->id_account);
				$this->session->set_userdata('nm_account', $user->nm_account);
				$this->session->set_userdata('foto', $user->foto);
				$this->session->set_userdata('akses', $user->akses);
				if ($password==$user->password){
					$data = $this->user->get_user_data($id);
					redirect('c_order/grafik','refresh');
				} else {
					$this->session->set_flashdata('msg','Gagal Login!\n Username dan Password Tidak Ditemukan');
					redirect('login','refresh');
				}
			}
		}
	}

	

	public function admin(){
		$this->load->view('admin/home_admin');
	}
	

	public function logout(){
		 $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect('');
	}

	
}