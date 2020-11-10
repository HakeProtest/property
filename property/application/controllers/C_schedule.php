<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_schedule extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_schedule');
		$this->load->model('m_lead');
		$this->load->model('m_account');
		$this->load->helper('tgl_indonesia');
	}
	public function tambah(){
		
		$data['lead']=$this->m_lead->get();
		$data['account']=$this->m_account->get();
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('schedule/tambah',$data);
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		
		 $data = array(
		'id_account' => $this->input->post('id_account',TRUE),
		'subjek' => $this->input->post('subjek',TRUE),
		'id_lead' => $this->input->post('id_lead',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		
	    );

		$this->m_schedule->add($data);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_schedule/tampil','refresh');
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_schedule->get();
		$this->load->view('schedule/tampil',$data);
		$this->load->view('footer');
	}
	
	public function detail($id)
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_schedule->getbyid2($id);
		$this->load->view('schedule/detail',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		$data['lead']=$this->m_lead->get();
		$data['account']=$this->m_account->get();
		
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_schedule->getByID($this->uri->segment(3));
		$this->load->view('schedule/ubah',$data);
		$this->load->view('footer');
	}
	

	public function hapus($id_schedule)
	{
		 $row = $this->m_schedule->getByID($id_schedule);

            if ($row) {
                $this->m_schedule->delete($id_schedule);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_schedule/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_schedule/tampil'));
            }
	}

	public function simpan_ubah(){
		
		$data = array(
		'id_account' => $this->input->post('id_account',TRUE),
		'subjek' => $this->input->post('subjek',TRUE),
		'id_lead' => $this->input->post('id_lead',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		
	    );
		$id_schedule = $this->input->post('id_schedule',TRUE);
		
		if ($this->m_schedule->edit($id_schedule,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_schedule/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_schedule/ubah/'.$id_schedule,'refresh');
		}
		
	}
	
	public function simpan2($id_opportunity){
		
		$data = array(
		'id_account' => $this->input->post('id_account',TRUE),
		'subjek' => $this->input->post('subjek',TRUE),
		'id_lead' => $this->input->post('id_lead',TRUE),
		'lokasi' => $this->input->post('lokasi',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		
	    );
		//$id_schedule = $this->input->post('id_schedule',TRUE);
		
		if ($this->m_schedule->add($data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		}
		
	}
	

}