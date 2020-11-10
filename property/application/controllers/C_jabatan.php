<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jabatan extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_jabatan');
		
	}
	public function tambah(){
		
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('jabatan/tambah');
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		
		 $data = array(
		'nm_jabatan' => $this->input->post('nm_jabatan',TRUE),
		
	    );

		$this->m_jabatan->add($data);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_jabatan/tampil','refresh');
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_jabatan->get();
		$this->load->view('jabatan/tampil',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_jabatan->getByID($this->uri->segment(3));
		$this->load->view('jabatan/ubah',$data);
		$this->load->view('footer');
	}
	

	public function hapus($id_jabatan)
	{
		 $row = $this->m_jabatan->getByID($id_jabatan);

            if ($row) {
                $this->m_jabatan->delete($id_jabatan);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_jabatan/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_jabatan/tampil'));
            }
	}

	public function simpan_ubah(){
		
		$data = array(
		'nm_jabatan' => $this->input->post('nm_jabatan',TRUE),
		
	    );
		$id_jabatan = $this->input->post('id_jabatan',TRUE);
		
		if ($this->m_jabatan->edit($id_jabatan,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_jabatan/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_jabatan/ubah/'.$id_jabatan,'refresh');
		}
		
	}
	

}