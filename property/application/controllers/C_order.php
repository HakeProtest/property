<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_order extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_order');
		$this->load->model('m_lead');
		$this->load->model('m_account');
		$this->load->model('m_property');
		$this->load->helper('tgl_indonesia');
	}
	public function tambah(){
		
		$data['lead']=$this->m_lead->get();
		$data['account']=$this->m_account->get();
		$data['property']=$this->m_property->getstok();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('order/tambah',$data);
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		$this->form_validation->set_rules('id_order', 'id_order', 'trim|required|is_unique[order.id_order]');
		if($this->form_validation->run() != false){
		 $data = array(
		 'id_order' => $this->input->post('id_order',TRUE),
		'id_property' => $this->input->post('id_property',TRUE),
		'id_account' => $this->input->post('id_account',TRUE),
		'id_lead' => $this->input->post('id_lead',TRUE),
		'tgl_order' => $this->input->post('tgl_order',TRUE),
		
	    );

		$this->m_order->add($data);
		$id_property = $this->input->post('id_property',TRUE);
		$this->m_order->updatestok($id_property);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_order/tampil','refresh');
		}else{
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, ID sudah dipakai')</script>";
		redirect('c_order/tampil','refresh');
		}
	}
	
	public function simpan_input2()
	{
		$id = $this->uri->segment(3);
		$this->form_validation->set_rules('id_order', 'id_order', 'trim|required|is_unique[order.id_order]');
		if($this->form_validation->run() != false){
		 $data = array(
		 'id_order' => $this->input->post('id_order',TRUE),
		'id_property' => $this->input->post('id_property',TRUE),
		'id_account' => $this->input->post('id_account',TRUE),
		'id_lead' => $this->input->post('id_lead',TRUE),
		'tgl_order' => $this->input->post('tgl_order',TRUE),
		
	    );

		$this->m_order->add($data);
		$id_property = $this->input->post('id_property',TRUE);
		$this->m_order->updatestok($id_property);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_opportunity/detail/'.$id,'refresh');
		}else{
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, ID sudah dipakai')</script>";
		redirect('c_opportunity/detail/'.$id,'refresh');
		}
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_order->get();
		$this->load->view('order/tampil',$data);
		$this->load->view('footer');
	}
	
	public function grafik()
	{
		$this->load->view('header');
		$this->load->view('menu');
		
		$data['bulanan'] = $this->m_order->ambilGrafikBulanan();
		$data['pie'] = $this->m_order->ambilJumlahOpp();
		
		$this->load->view('order/grafik',$data);
		$this->load->view('footer');
	}
	
	public function laporan()
	{
		$data['account']=$this->m_account->get();
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_order->get();
		$this->load->view('order/laporan',$data);
		$this->load->view('footer');
	}
	
	public function hasillaporan()
	{
		
		$t1=$this->input->post('t1');
		$t2=$this->input->post('t2');
		$s1=$this->input->post('sales');
		$data['t1'] = $t1;
		$data['t2'] = $t2;
		$data['s1'] = $s1;
		$data['acc'] = $this->m_order->ambilLaporan($t1,$t2,$s1);
		
		$data['account']=$this->m_account->get();
		$this->load->view('header');
		$this->load->view('menu');
		//$data['acc'] = $this->m_order->get();
		$this->load->view('order/hasil_laporan',$data);
		$this->load->view('footer');
	}
	
	public function detail($id)
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_order->getbyid2($id);
		$this->load->view('order/detail',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		$data['lead']=$this->m_lead->get();
		$data['account']=$this->m_account->get();
		$data['property']=$this->m_property->getstok();
		
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_order->getByID($this->uri->segment(3));
		$this->load->view('order/ubah',$data);
		$this->load->view('footer');
	}
	

	public function hapus($id_order)
	{
		 $row = $this->m_order->getByID($id_order);

            if ($row) {
                $this->m_order->delete($id_order);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_order/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_order/tampil'));
            }
	}

	public function simpan_ubah(){
		
		$data = array(
		'id_property' => $this->input->post('id_property',TRUE),
		'id_account' => $this->input->post('id_account',TRUE),
		'id_lead' => $this->input->post('id_lead',TRUE),
		'tgl_order' => $this->input->post('tgl_order',TRUE),
		
	    );
		$id_order = $this->input->post('id_order',TRUE);
		
		if ($this->m_order->edit($id_order,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_order/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_order/ubah/'.$id_order,'refresh');
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
		//$id_order = $this->input->post('id_order',TRUE);
		
		if ($this->m_order->add($data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		}
		
	}
	

}