<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_projek extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_projek');
		$this->load->model('m_pengembang');
		$this->load->model('m_property');
	}
	public function tambah(){
		
		$data['pengembang']=$this->m_pengembang->get();
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('projek/tambah',$data);
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		$this->form_validation->set_rules('id_projek', 'id_projek', 'trim|required|is_unique[projek.id_projek]');
		if($this->form_validation->run() != false){
		$config['upload_path']='./foto';
		$config['allowed_types']='jpg|jpeg|png|pdf';
		$config['max_size']=5000;

		$this->load->library('upload',$config);

		if(! $this->upload->do_upload('foto')){
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan Foto')</script>";	
			redirect('c_projek/tambah/','refresh');
		} else{
			$gambar=$this->upload->data();
			$photo=$gambar['file_name'];
		}	
		
		if(! $this->upload->do_upload('foto_denah')){
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan Foto')</script>";	
			redirect('c_projek/tambah/','refresh');
		} else{
			$gambar=$this->upload->data();
			$photo2=$gambar['file_name'];
		}	
		
		
		$data = array(
		'id_projek' => $this->input->post('id_projek',TRUE),
		'nm_projek' => $this->input->post('nm_projek',TRUE),
		'id_pengembang' => $this->input->post('id_pengembang',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'tgl_listing' => $this->input->post('tgl_listing',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'foto_projek' => $photo,
		'foto_denah' => $photo2,
	    );

		$this->m_projek->add($data);
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_projek/tampil','refresh');
		}else{
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, ID sudah dipakai')</script>";
		redirect('c_projek/tampil','refresh');
		}
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_projek->get();
		$this->load->view('projek/tampil',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		$data['pengembang']=$this->m_pengembang->get();
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_projek->getByID($this->uri->segment(3));
		$this->load->view('projek/ubah',$data);
		$this->load->view('footer');
	}
	
	

	public function hapus($id_projek)
	{
		 $row = $this->m_projek->getByID($id_projek);

            if ($row) {
                $this->m_projek->delete($id_projek);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_projek/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_projek/tampil'));
            }
	}

	public function simpan_ubah(){
		
		if($_FILES['foto']['tmp_name']!=''){
				$config['upload_path']='./foto';
				$config['allowed_types']='jpg|jpeg|png|pdf';
				$config['max_size']=5000;

				$this->load->library('upload',$config);

				if(! $this->upload->do_upload('foto')){
					echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan')</script>";	
					redirect('c_property/ubah/','refresh');
				} else{
					$gambar=$this->upload->data();
					$photo=$gambar['file_name'];
				}
		}else {
			$photo = $this->input->post('foto2',TRUE);
		}
		
		if($_FILES['foto_denah']['tmp_name']!=''){
				$config['upload_path']='./foto';
				$config['allowed_types']='jpg|jpeg|png|pdf';
				$config['max_size']=15000;

				$this->load->library('upload',$config);

				if(! $this->upload->do_upload('foto_denah')){
					echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan')</script>";	
					redirect('c_property/ubah/','refresh');
				} else{
					$gambar=$this->upload->data();
					$photo2=$gambar['file_name'];
				}
		}else {
			$photo2 = $this->input->post('foto_denah2',TRUE);
		}
		
		$data = array(
		'id_projek' => $this->input->post('id_projek',TRUE),
		'nm_projek' => $this->input->post('nm_projek',TRUE),
		'id_pengembang' => $this->input->post('id_pengembang',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'tgl_listing' => $this->input->post('tgl_listing',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'foto_projek' => $photo,
		'foto_denah' => $photo2,
	    );
		$id_projek = $this->input->post('id_projek2',TRUE);
		
		if ($this->m_projek->edit($id_projek,$data)) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_projek/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data Projek</div>");
			redirect('c_projek/ubah/'.$id_projek,'refresh');
		}
		
		
	}
	
	public function detail()
	{
		$data['acc'] = $this->m_projek->getByID($this->uri->segment(3));
		$data['acc2'] = $this->m_property->getByProjekID($this->uri->segment(3));
		$this->load->view('frontend/detail_projek.php',$data);
	}
	

}