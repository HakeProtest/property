<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pengguna extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
	}
	public function tambahPengguna(){
		
		$this->load->view('admin/tambah_pengguna');
	}
	public function simpan_input_pengguna()
	{
		$status = $this->input->post('status');
		$user_id = $this->input->post('user_id');
		$nama_user = $this->input->post('nama_user');
		$password = $this->input->post('password');
		

		$data = array(
 		'status' => $status,
 		'user_id' => $user_id,
 		'nama_user' => $nama_user,
 		'password' => $password,
 		
 		);

		$this->user->add($data);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_pengguna/tampilPengguna','refresh');
	}

	public function tampilPengguna()
	{
		$data['user'] = $this->m_pengguna->getPengguna();
		$this->load->view('admin/tampilan_keloladata',$data);
	}
	public function tampilPenggunaManajer()
	{
		$data['user'] = $this->m_pengguna->getPengguna();
		$this->load->view('manajer/tampilan_keloladata',$data);
	}
	public function tampilPenggunaDirektur()
	{
		$data['user'] = $this->m_pengguna->getPengguna();
		$this->load->view('direktur/tampilan_keloladata',$data);
	}

	public function ubahPengguna()
	{
		$data['user'] = $this->m_pengguna->getPenggunaByID($this->uri->segment(3));
		$this->load->view('admin/ubah_pengguna',$data);
	}
	public function profil()
	{
		$data['user'] = $this->m_pengguna->getPenggunaByID($this->uri->segment(3));
		$this->load->view('admin/profil',$data);
	}
	public function profilkepala()
	{
		$data['user'] = $this->m_pengguna->getPenggunaByID($this->uri->segment(3));
		$this->load->view('kepala_supir/profil',$data);
	}
	public function profilmanajer()
	{
		$data['user'] = $this->m_pengguna->getPenggunaByID($this->uri->segment(3));
		$this->load->view('manajer/profil',$data);
	}
	public function profildirektur()
	{
		$data['user'] = $this->m_pengguna->getPenggunaByID($this->uri->segment(3));
		$this->load->view('direktur/profil',$data);
	}
	public function tambah1Pengguna()
	{
		$data['user'] = $this->m_pengguna->getPenggunaByID($this->uri->segment(3));
		$this->load->view('admin/tambah_pengguna',$data);
	}

	public function hapusPengguna($user_id)
	{
		 $row = $this->m_pengguna->getPenggunaByID($user_id);

            if ($row) {
                $this->m_pengguna->delete($user_id);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_pengguna/tampilpengguna'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_pengguna/tampilpengguna'));
            }
	}

	public function simpan_ubah_pengguna(){
		$user_id = $this->input->post('user_id');
		$nama_user = $this->input->post('nama_user');
		$status = $this->input->post('status');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$data = array(
		
			'nama_user' => $nama_user,
			'status' => $status,
			'email' => $email,
			'password' => $password
			);

		if ($this->m_pengguna->edit_pengguna($user_id,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_pengguna/tampilPengguna','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_pengguna/ubahPengguna/'.$user_id,'refresh');
		}
		
	}
	public function simpan_ubah_pengguna2(){
		$user_id = $this->input->post('user_id');
		$nama_user = $this->input->post('nama_user');
		$status = $this->input->post('status');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$data = array(
		
			'nama_user' => $nama_user,
			'status' => $status,
			'email' => $email,
			'password' => $password
			);

		if ($this->m_pengguna->edit_pengguna($user_id,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_pengguna/profil/'.$user_id,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_pengguna/profil/'.$user_id,'refresh');
		}
		
	}
	
	public function simpan_ubah_pengguna_kepala(){
		$user_id = $this->input->post('user_id');
		$nama_user = $this->input->post('nama_user');
		$status = $this->input->post('status');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$data = array(
		
			'nama_user' => $nama_user,
			'status' => $status,
			'email' => $email,
			'password' => $password
			);

		if ($this->m_pengguna->edit_pengguna($user_id,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_pengguna/profilkepala/'.$user_id,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_pengguna/profilkepala/'.$user_id,'refresh');
		}
		
	}
	
	public function simpan_ubah_pengguna_manajer(){
		$user_id = $this->input->post('user_id');
		$nama_user = $this->input->post('nama_user');
		$status = $this->input->post('status');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$data = array(
		
			'nama_user' => $nama_user,
			'status' => $status,
			'email' => $email,
			'password' => $password
			);

		if ($this->m_pengguna->edit_pengguna($user_id,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_pengguna/profilmanajer/'.$user_id,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_pengguna/profilmanajer/'.$user_id,'refresh');
		}
		
	}
	
	public function simpan_ubah_pengguna_direktur(){
		$user_id = $this->input->post('user_id');
		$nama_user = $this->input->post('nama_user');
		$status = $this->input->post('status');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$data = array(
		
			'nama_user' => $nama_user,
			'status' => $status,
			'email' => $email,
			'password' => $password
			);

		if ($this->m_pengguna->edit_pengguna($user_id,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_pengguna/profildirektur/'.$user_id,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_pengguna/profildirektur/'.$user_id,'refresh');
		}
		
	}

}