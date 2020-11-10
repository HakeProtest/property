<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_account extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_account');
		
		$this->load->model('m_jabatan');
	}
	public function tambah(){
		
		
		$data['jabatan']=$this->m_jabatan->get();
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('account/tambah',$data);
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		$this->form_validation->set_rules('id_account', 'id_account', 'trim|required|is_unique[account.id_account]');
		if($this->form_validation->run() != false){
		
		$config['upload_path']='./foto';
		$config['allowed_types']='jpg|jpeg|png';
		$config['max_size']=5000;

		$this->load->library('upload',$config);

		if(! $this->upload->do_upload('foto')){
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan')</script>";	
			redirect('c_account/tambah/','refresh');
		} else{
			$gambar=$this->upload->data();
			$photo=$gambar['file_name'];
		}
		
		 $data = array(
		 'id_account' => $this->input->post('id_account',TRUE),
		'nm_account' => $this->input->post('nm_account',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_kontak' => $this->input->post('no_kontak',TRUE),
		'email' => $this->input->post('email',TRUE),
		'foto' => $photo,
		'akses' => $this->input->post('akses',TRUE),
		
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
	    );

		$cek = $this->m_account->add($data);
		
		
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_account/tampil','refresh');
		}else{
		echo "<script type='text/javascript'>window.alert('Duplikat ID!,ID tersebut Sudah Dipakai')</script>";
		redirect('c_account/tambah','refresh');	
		}
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_account->get();
		$this->load->view('account/tampil',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		
		$data['jabatan']=$this->m_jabatan->get();
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_account->getByID($this->uri->segment(3));
		$this->load->view('account/ubah',$data);
		$this->load->view('footer');
	}
	
	

	public function hapus($id_account)
	{
		 $row = $this->m_account->getByID($id_account);

            if ($row) {
                $this->m_account->delete($id_account);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_account/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_account/tampil'));
            }
	}

	public function simpan_ubah(){
		
		
		
		if($_FILES['foto']['tmp_name']!=''){
				$config['upload_path']='./foto';
				$config['allowed_types']='jpg|jpeg|png';
				$config['max_size']=5000;

				$this->load->library('upload',$config);

				if(! $this->upload->do_upload('foto')){
					echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan')</script>";	
					redirect('c_account/ubah/','refresh');
				} else{
					$gambar=$this->upload->data();
					$photo=$gambar['file_name'];
				}
		}else {
			$photo = $this->input->post('foto2',TRUE);
		}
		$data = array(
		'id_account' => $this->input->post('id_account',TRUE),
		'nm_account' => $this->input->post('nm_account',TRUE),
		'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_kontak' => $this->input->post('no_kontak',TRUE),
		'email' => $this->input->post('email',TRUE),
		'foto' => $photo,
		'akses' => $this->input->post('akses',TRUE),
		
		'id_jabatan' => $this->input->post('id_jabatan',TRUE),
	    );
		$id_account = $this->input->post('id_account2',TRUE);
		
		if ($this->m_account->edit($id_account,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_account/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_account/ubah/'.$id_account,'refresh');
		}
		
		
	}
	

}