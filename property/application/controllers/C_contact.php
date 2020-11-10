<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_contact extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_contact');
		
	}
	
	public function tambah(){
		
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('contact/tambah');
		$this->load->view('footer');
	}
	
	public function simpan_input()
	{
		
		 $data = array(
		'nm_contact' => $this->input->post('nm_contact',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_kontak' => $this->input->post('no_kontak',TRUE),
		'source' => $this->input->post('source',TRUE),
		'minat' => $this->input->post('minat',TRUE),
	    );

		$this->m_contact->add_contact($data);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_contact/tampil','refresh');
	}
	
	public function simpan_ubah(){
		
		$data = array(
		'nm_contact' => $this->input->post('nm_contact',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_kontak' => $this->input->post('no_kontak',TRUE),
		'source' => $this->input->post('source',TRUE),
		'minat' => $this->input->post('minat',TRUE),
		
	    );
		$id_contact = $this->input->post('id_contact',TRUE);
		
		if ($this->m_contact->edit($id_contact,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_contact/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data Kontak</div>");
			redirect('c_contact/ubah/'.$id_contact,'refresh');
		}
		
	}
	public function ubah()
	{
		
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_contact->getByID($this->uri->segment(3));
		$this->load->view('contact/ubah',$data);
		$this->load->view('footer');
	}
	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_contact->get();
		$this->load->view('contact/tampil',$data);
		$this->load->view('footer');
	}
	
	
	
	

	public function hapus($id_contact)
	{
		 $row = $this->m_contact->getByID($id_contact);

            if ($row) {
                $this->m_contact->delete($id_contact);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_contact/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_contact/tampil'));
            }
	}
	
	public function hapusall()
	{
                $this->m_contact->deleteall();
            
	}

	
	

}