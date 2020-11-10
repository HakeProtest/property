<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('user');
		
		
		$this->load->helper('tgl_indonesia');
		$this->load->helper('system');
	}
	
	public function index(){
		$this->load->view('home_admin');
	}
	
	
	
	public function laporan(){
		$this->load->view('admin/laporan');
	}
	function lapbulanan()
	{
		
			$t1=$this->input->post('bulan');
			$t2=$this->input->post('tahun');
			$data['dataLap']=$this->m_kegiatan->lapBulanan($t1,$t2)->result();
			$data['bulan']=$t1;
			$data['tahun']=$t2;
			//$data['dataBarang']=$this->m_kegiatan->lapBulanan($t1,$t2)->result();
			$this->load->view('admin/lapBulanan',$data);
		
	}
	

	public function inputPengguna(){
		
		$this->load->view('admin/tambah_pengguna');
	}
	public function simpan_input_pengguna()
	{
		$status = $this->input->post('status');
		$user_id = $this->input->post('user_id');
		$nama_user = $this->input->post('nama_user');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		
		$config['upload_path']='./foto';
		$config['allowed_types']='jpg|jpeg|png';
		$config['max_size']=5000;

		$this->load->library('upload',$config);

		if(! $this->upload->do_upload('foto')){
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan')</script>";	
			redirect('admin/inputPengguna/','refresh');
		} else{
			$gambar=$this->upload->data();
			$photo=$gambar['file_name'];
		}
		
		$data = array(
 		'status' => $status,
 		'user_id' => $user_id,
 		'nama_user' => $nama_user,
 		'email' => $email,
 		'password' => $password,
 		'photo' => $photo,
 		);

		$this->user->add($data);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_pengguna/tampilPengguna','refresh');
	}

	

	public function logout(){
		$this->load->view('dex');
	}
}