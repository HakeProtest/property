<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pengembang extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_pengembang');
		
	}
	public function tambah(){
		
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('pengembang/tambah');
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		$this->form_validation->set_rules('id_pengembang', 'id_pengembang', 'trim|required|is_unique[pengembang.id_pengembang]');
		if($this->form_validation->run() != false){
		  $data = array(
		  'id_pengembang' => $this->input->post('id_pengembang',TRUE),
		'nm_pengembang' => $this->input->post('nm_pengembang',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_kontak' => $this->input->post('no_kontak',TRUE),
		'email' => $this->input->post('email',TRUE),
	    );

		if($this->m_pengembang->add($data)){
			
		
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_pengembang/tampil','refresh');
		}else{
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, ID sudah dipakai')</script>";
		redirect('c_pengembang/tampil','refresh');
		}
		}else{
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, ID sudah dipakai')</script>";
		redirect('c_pengembang/tampil','refresh');
		}
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_pengembang->get();
		$this->load->view('pengembang/tampil',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_pengembang->getByID($this->uri->segment(3));
		$this->load->view('pengembang/ubah',$data);
		$this->load->view('footer');
	}
	

	public function hapus($id_pengembang)
	{
		 $row = $this->m_pengembang->getByID($id_pengembang);

            if ($row) {
                $this->m_pengembang->delete($id_pengembang);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_pengembang/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_pengembang/tampil'));
            }
	}

	public function simpan_ubah(){
		
		 $data = array(
		 'id_pengembang' => $this->input->post('id_pengembang',TRUE),
		'nm_pengembang' => $this->input->post('nm_pengembang',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_kontak' => $this->input->post('no_kontak',TRUE),
		'email' => $this->input->post('email',TRUE),
	    );
		$id_pengembang = $this->input->post('id_pengembang2',TRUE);
		
		if ($this->m_pengembang->edit($id_pengembang,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_pengembang/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data Pengembang</div>");
			redirect('c_pengembang/ubah/'.$id_pengembang,'refresh');
		}
		
		
	}
	

}