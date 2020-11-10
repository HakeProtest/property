<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_property extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_property');
		$this->load->model('m_projek');
		$this->load->model('m_kategori');
		$this->load->model('m_account');
	}
	public function tambah(){
		
		$data['projek']=$this->m_projek->get();
		$data['kategori']=$this->m_kategori->get();
		
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('property/tambah',$data);
		$this->load->view('footer');
	}
	public function simpan_input()
	{
		$this->form_validation->set_rules('id_property', 'id_property', 'trim|required|is_unique[property.id_property]');
		if($this->form_validation->run() != false){
				
		$config['upload_path']='./foto';
		$config['allowed_types']='jpg|jpeg|png|pdf';
		$config['max_size']=5000;

		$this->load->library('upload',$config);

		if(! $this->upload->do_upload('foto')){
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan Foto')</script>";	
			redirect('c_property/tambah/','refresh');
		} else{
			$gambar=$this->upload->data();
			$photo=$gambar['file_name'];
		}
		
		$config2['upload_path']='./files';
		$config2['allowed_types']='pdf';
		//$config['max_size']=15000;

		$this->load->library('upload',$config2);

		if(! $this->upload->do_upload('file')){
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan File')</script>";	
			redirect('c_property/tambah/','refresh');
		} else{
			$filee=$this->upload->data();
			$file=$filee['file_name'];
		}
		
		 $data = array(
		 'id_property' => $this->input->post('id_property',TRUE),
		'nm_property' => $this->input->post('nm_property',TRUE),
		'no_kavling' => $this->input->post('no_kavling',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'tgl_listing' => $this->input->post('tgl_listing',TRUE),
		'nm_tipe' => $this->input->post('nm_tipe',TRUE),
		'luas' => $this->input->post('luas',TRUE),
		'hrg_m2' => $this->input->post('hrg_m2',TRUE),
		'interior' => $this->input->post('interior',TRUE),
		'kmr_tidur' => $this->input->post('kmr_tidur',TRUE),
		'kmr_mandi' => $this->input->post('kmr_mandi',TRUE),
		'listrik' => $this->input->post('listrik',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'foto' => $photo,
		'file' => $file,
		'id_account' => $this->input->post('id_account',TRUE),
		'id_projek' => $this->input->post('id_projek',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		'status' => "For Sale",
	    );

		$this->m_property->add($data);
		
		$id_property = $this->input->post('id_property',TRUE);
			
			$nums =  count(array_filter($_FILES['foto_property']['name'])); 
			$fotos = $this->input->post("foto_property");
			
			$files = $_FILES;
			for ($m = 0; $m < $nums; $m++) {
				
				$_FILES['foto_property']['name']= $files['foto_property']['name'][$m];
		        $_FILES['foto_property']['type']= $files['foto_property']['type'][$m];
		        $_FILES['foto_property']['tmp_name']= $files['foto_property']['tmp_name'][$m];
		        $_FILES['foto_property']['error']= $files['foto_property']['error'][$m];
		        $_FILES['foto_property']['size']= $files['foto_property']['size'][$m];  
                
				$configx['upload_path']='./foto';
				$configx['allowed_types']='jpg|jpeg|png|pdf';
				$configx['max_size']=15000;

				$this->load->library('upload',$configx);

				if(! $this->upload->do_upload('foto_property')){
					echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan Foto')</script>";	
					redirect('c_property/tambah/','refresh');
				} else{
					$poto=$this->upload->data();
					$photo=$poto['file_name'];
				}
				
				$data1 = array(
				'id_property' => $id_property,
				'foto_property' => $photo
			);
			
			$this->m_property->addfoto($data1);
		}
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_property/tampil','refresh');
		}else{
			echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, ID sudah dipakai')</script>";
		redirect('c_property/tampil','refresh');
		}
	}
	
	public function simpan_input_galeri()
	{
		
		$config['upload_path']='./foto';
		$config['allowed_types']='jpg|jpeg|png|pdf';
		$config['max_size']=5000;

		
		
		$id_property = $this->input->post('id_property',TRUE);
			
			$nums =  count(array_filter($_FILES['foto_property']['name'])); 
			$fotos = $this->input->post("foto_property");
			
			$files = $_FILES;
			for ($m = 0; $m < $nums; $m++) {
				
				$_FILES['foto_property']['name']= $files['foto_property']['name'][$m];
		        $_FILES['foto_property']['type']= $files['foto_property']['type'][$m];
		        $_FILES['foto_property']['tmp_name']= $files['foto_property']['tmp_name'][$m];
		        $_FILES['foto_property']['error']= $files['foto_property']['error'][$m];
		        $_FILES['foto_property']['size']= $files['foto_property']['size'][$m];  
                
				$configx['upload_path']='./foto';
				$configx['allowed_types']='jpg|jpeg|png|pdf';
				$configx['max_size']=15000;

				$this->load->library('upload',$configx);

				if(! $this->upload->do_upload('foto_property')){
					echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan Foto')</script>";	
					redirect('c_property/tambahgaleri/'.$id_property,'refresh');
				} else{
					$poto=$this->upload->data();
					$photo=$poto['file_name'];
				}
				
				$data1 = array(
				'id_property' => $id_property,
				'foto_property' => $photo
			);
			
			$this->m_property->addfoto($data1);
		}
		echo "<script type='text/javascript'>window.alert('Data Tersimpan')</script>";
		redirect('c_property/galeri/'.$id_property,'refresh');
	}

	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_property->get();
		$this->load->view('property/tampil',$data);
		$this->load->view('footer');
	}
	
	public function ubah()
	{
		$data['projek']=$this->m_projek->get();
		$data['kategori']=$this->m_kategori->get();
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_property->getByID($this->uri->segment(3));
		$this->load->view('property/ubah',$data);
		$this->load->view('footer');
	}
	
	public function tambahgaleri()
	{
		
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_property->getByID($this->uri->segment(3));
		$this->load->view('property/tambahgaleri',$data);
		$this->load->view('footer');
	}
	
	

	public function hapus($id_property)
	{
		 $row = $this->m_property->getByID($id_property);

            if ($row) {
                $this->m_property->delete($id_property);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_property/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_property/tampil'));
            }
	}
	
	public function hapusgaleri($id_property)
	{
		 $row = $this->m_property->getFotoByID($id_property);

            if ($row) {
                $this->m_property->deleteFoto($id_property);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_property/galeri/'.$row->id_property));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_property/tampil/'.$row->id_property));
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
		if($_FILES['file']['tmp_name']!=''){
				$config2['upload_path']='./files';
				$config2['allowed_types']='pdf';
				$config2['max_size']=15000;

				$this->load->library('upload',$config2);

				if(! $this->upload->do_upload('file')){
					echo "<script type='text/javascript'>window.alert('Gagal Tersimpan, Cek Kelengkapan Data Masukan')</script>";	
					redirect('c_property/ubah/','refresh');
				} else{
					$filee=$this->upload->data();
					$file=$filee['file_name'];
				}
		}else {
			$file = $this->input->post('file2',TRUE);
		}
		$data = array(
		'id_property' => $this->input->post('id_property',TRUE),
		'nm_property' => $this->input->post('nm_property',TRUE),
		'no_kavling' => $this->input->post('no_kavling',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'tgl_listing' => $this->input->post('tgl_listing',TRUE),
		'nm_tipe' => $this->input->post('nm_tipe',TRUE),
		'luas' => $this->input->post('luas',TRUE),
		'hrg_m2' => $this->input->post('hrg_m2',TRUE),
		'interior' => $this->input->post('interior',TRUE),
		'kmr_tidur' => $this->input->post('kmr_tidur',TRUE),
		'kmr_mandi' => $this->input->post('kmr_mandi',TRUE),
		'listrik' => $this->input->post('listrik',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'foto' => $photo,
		'file' => $file,
		'id_account' => $this->input->post('id_account',TRUE),
		'id_projek' => $this->input->post('id_projek',TRUE),
		'id_kategori' => $this->input->post('id_kategori',TRUE),
		
	    );
		$id_property = $this->input->post('id_property2',TRUE);
		
		if ($this->m_property->edit($id_property,$data)==TRUE) {
			$this->session->set_flashdata('msg',"<div class='alert alert-success'> Berhasil Mengubah Data.</div>");
			redirect('c_property/tampil','refresh');
		} else {
			$this->session->set_flashdata('msg',"<div class='alert alert-danger'> Gagal Mengubah Data Property!</div>");
			redirect('c_property/ubah/'.$id_property,'refresh');
		}
		
	}
	
	public function listProperty()
	{
		$data['acc'] = $this->m_property->get();
		
		$this->load->view('frontend/properties.php',$data);
	}
	
	public function detail()
	{
		
		$data['acc'] = $this->m_property->getByID($this->uri->segment(3));
		$data['acc2'] = $this->m_property->getGaleriByID($this->uri->segment(3));
		$this->load->view('frontend/detail.php',$data);
	}
	
	public function history()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_property->getHistoryByID($this->uri->segment(3));
		$this->load->view('property/history.php',$data);
		$this->load->view('footer');
		
		
	}
	
	public function galeri()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_property->getGaleriByID($this->uri->segment(3));
		$this->load->view('property/galeri.php',$data);
		$this->load->view('footer');
		
		
	}
	
	public function kontak()
	{
		$this->load->view('frontend/contact.php');
	}
	
	public function simpan_kontak()
	{
		
		 $data = array(
		'nm_contact' => $this->input->post('nm_contact',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_kontak' => $this->input->post('no_kontak',TRUE),
		'source' => $this->input->post('source',TRUE),
		'minat' => $this->input->post('minat',TRUE),
	    );

		$this->m_account->add_contact($data);
		echo "<script type='text/javascript'>window.alert('Terima Kasih Telah Menghubungi Kami')</script>";
		redirect('c_property/kontak','refresh');
	}
	
	public function search()
	{
		
		 
		$alamat = $this->input->post('lokasi',TRUE);
		$id_kategori = $this->input->post('id_kategori',TRUE);
		$kamar_tidur = $this->input->post('kamar_tidur',TRUE);
		$kamar_mandi = $this->input->post('kamar_mandi',TRUE);
		$dari =$this->input->post('dari',TRUE);
		$sampai = $this->input->post('sampai',TRUE);
		
	    
	    if($alamat!=''){
			$w1 = "and projek.alamat like '%".$alamat."%' or nm_property like '%".$alamat."%' ";
		}else{
			$w1='';
		}
		if($id_kategori!=''){
			$w2 = 'and id_kategori='.$id_kategori;
		}else{
			$w2='';
		}
		if($kamar_mandi!=''){
			$w3 = ' and kmr_mandi='.$kamar_mandi;
		}else{
			$w3='';
		}
		if($kamar_tidur!=''){
			$w4 = ' and kmr_tidur='.$kamar_tidur;
		}else{
			$w4='';
		}
	    
		$data['acc'] = $this->db->query("select *, projek.alamat as palamat from property 
		
		join projek on projek.id_projek=property.id_projek 
		where harga between $dari and $sampai $w1 $w2 $w3 $w4")->result();
		$this->load->view('frontend/search.php',$data);
	}
	

}