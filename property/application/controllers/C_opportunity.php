<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_opportunity extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_opportunity');
		$this->load->model('m_account');
		$this->load->model('m_contact');
		$this->load->model('m_property');
		$this->load->model('m_lead');
		$this->load->helper("tgl_indonesia");
		
	}
	public function tambah(){
		
		$data['contact']=$this->m_contact->get();
		$data['property']=$this->m_property->getstok();
		
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('opportunity/tambah',$data);
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		$id_contact = $this->input->post('id_contact',TRUE);
		
		$cp = $this->db->query("select * from contact where id_contact = '$id_contact'")->row();
		
		
		
		$data = array(
		'nm_lead' => $cp->nm_contact,
		'no_kontak' => $cp->no_kontak,
		'email' => $cp->email,
		'source' => $cp->source
	    );
		
		$this->m_opportunity->addlead($data);
		
		$id_lead = $this->db->insert_id();
		
		$this->m_opportunity->delcon($id_contact);
		
		$data2 = array(
		'id_lead' => $id_lead,
		'id_account' => $this->input->post('id_account',TRUE),
		'est_keuntungan' => $this->input->post('est_keuntungan',TRUE),
		'tgl_dibuat' => $this->input->post('tgl_dibuat',TRUE),
		'id_property' => $this->input->post('id_property',TRUE),
	    );

		$this->m_opportunity->add($data2);
		
		$id_opp = $this->db->insert_id();
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_opportunity/detail/'.$id_opp,'refresh');
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		if($this->session->akses=="Manager"){
			$data['acc'] = $this->m_opportunity->get();
		}else{
			$data['acc'] = $this->m_opportunity->getbyaccount();
		}
		
		$data['acc2'] = $this->m_contact->get();
		$this->load->view('opportunity/tampil',$data);
		$this->load->view('footer');
	}
	
	public function aktifitas()
	{
		$this->load->view('header');
		$this->load->view('menu');
	
			$data['acc'] = $this->m_opportunity->getaktifitas();
		
		
		$data['acc2'] = $this->m_contact->get();
		$this->load->view('opportunity/aktifitas',$data);
		$this->load->view('footer');
	}
	
	public function detail($id)
	{
		$data['lead']=$this->m_lead->get();
		$data['account']=$this->m_account->get();
		$data['property']=$this->m_property->getstok();
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_opportunity->getbyid($id);
		$this->load->view('opportunity/detail',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		$data['pengembang']=$this->m_pengembang->get();
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_opportunity->getByID($this->uri->segment(3));
		$this->load->view('opportunity/ubah',$data);
		$this->load->view('footer');
	}
	
	

	public function hapus($id_opportunity)
	{
		 $row = $this->m_opportunity->getByID($id_opportunity);

            if ($row) {
                $this->m_opportunity->delete($id_opportunity);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_opportunity/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_opportunity/tampil'));
            }
	}

	public function simpan_ubah(){
		
		$data = array(
		'nm_opportunity' => $this->input->post('nm_opportunity',TRUE),
		'id_pengembang' => $this->input->post('id_pengembang',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'tgl_listing' => $this->input->post('tgl_listing',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
	    );
		$id_opportunity = $this->input->post('id_opportunity',TRUE);
		
		if ($this->m_opportunity->edit($id_opportunity,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_opportunity/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_opportunity/ubah/'.$id_opportunity,'refresh');
		}
		
	}
	
	public function usulan(){
		
		$data = array(
		'usulan' => $this->input->post('usulan',TRUE),
		'status_op' => $this->input->post('status_op',TRUE),
		
	    );
		$id_opportunity = $this->input->post('id_opportunity',TRUE);
		
		if ($this->m_opportunity->edit($id_opportunity,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		}
		
	}
	
	public function bertemu(){
		
		$data = array(
		'bertemu' => $this->input->post('bertemu',TRUE),
		'status_op' => $this->input->post('status_op',TRUE),
		
	    );
		$id_opportunity = $this->input->post('id_opportunity',TRUE);
		
		if ($this->m_opportunity->edit($id_opportunity,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		}
		
	}
	
	public function negosiasi(){
		
		$data = array(
		'negosiasi' => $this->input->post('negosiasi',TRUE),
		'status_op' => $this->input->post('status_op',TRUE),
		
	    );
		$id_opportunity = $this->input->post('id_opportunity',TRUE);
		
		if ($this->m_opportunity->edit($id_opportunity,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		}
		
	}
	
	public function keputusan(){
		
		$data = array(
		'keputusan' => $this->input->post('keputusan',TRUE),
		'status_op' => $this->input->post('status_op',TRUE),
		
	    );
		$id_opportunity = $this->input->post('id_opportunity',TRUE);
		
		if ($this->m_opportunity->edit($id_opportunity,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		}
		
	}
	
	public function close(){
		
		$data = array(
		'close_deal' => $this->input->post('close',TRUE),
		'status_op' => $this->input->post('status_op',TRUE),
		'win_lost' => $this->input->post('win_lost',TRUE),
		'waktu_close' => date("Y-m-d")
	    );
		$id_opportunity = $this->input->post('id_opportunity',TRUE);
		
		if ($this->m_opportunity->edit($id_opportunity,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data User</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		}
		
	}
	
	public function ubahlead(){
		
		$data = array(
		'alamat' => $this->input->post('alamat',TRUE),
		'pekerjaan' => $this->input->post('pekerjaan',TRUE),
		'desc_info' => $this->input->post('desc_info',TRUE),
		'source' => $this->input->post('source',TRUE),
		
	    );
		$id_opportunity = $this->input->post('id_opportunity',TRUE);
		$id_lead = $this->input->post('id_lead',TRUE);
		
		if ($this->m_opportunity->editlead($id_opportunity,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data lead.</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data lead</div>");
			redirect('c_opportunity/detail/'.$id_opportunity,'refresh');
		}
		
	}
	
	public function laporan()
	{
		$data['account']=$this->m_account->get();
		$data['acc']=$this->m_opportunity->get();
		$this->load->view('header');
		$this->load->view('menu');
		
		$this->load->view('opportunity/laporan',$data);
		$this->load->view('footer');
	}
	
	public function hasillaporan()
	{
		
		$t1=$this->input->post('t1');
		$t2=$this->input->post('t2');
		$s1=$this->input->post('status_op');
		$s2=$this->input->post('sales');
		$data['t1'] = $t1;
		$data['t2'] = $t2;
		$data['s1'] = $s1;
		$data['s2'] = $s2;
		$data['acc'] = $this->m_opportunity->ambilLaporan($t1,$t2,$s1,$s2);
		
		$data['account']=$this->m_account->get();
		$this->load->view('header');
		$this->load->view('menu');
		
		$this->load->view('opportunity/hasil_laporan',$data);
		$this->load->view('footer');
	}
	
	

}