<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kategori extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
		
	}
	public function tambah(){
		
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('kategori/tambah');
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		
		 $data = array(
		'nm_kategori' => $this->input->post('nm_kategori',TRUE),
		
	    );

		$this->m_kategori->add($data);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_kategori/tampil','refresh');
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_kategori->get();
		$this->load->view('kategori/tampil',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_kategori->getByID($this->uri->segment(3));
		$this->load->view('kategori/ubah',$data);
		$this->load->view('footer');
	}
	

	public function hapus($id_kategori)
	{
		 $row = $this->m_kategori->getByID($id_kategori);

            if ($row) {
                $this->m_kategori->delete($id_kategori);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_kategori/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_kategori/tampil'));
            }
	}

	public function simpan_ubah(){
		
		$data = array(
		'nm_kategori' => $this->input->post('nm_kategori',TRUE),
		
	    );
		$id_kategori = $this->input->post('id_kategori',TRUE);
		
		if ($this->m_kategori->edit($id_kategori,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_kategori/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_kategori/ubah/'.$id_kategori,'refresh');
		}
		
	}
	

}