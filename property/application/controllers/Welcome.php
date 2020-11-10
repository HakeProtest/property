<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 public function __construct(){
		parent::__construct();
		$this->load->model('m_property');
		$this->load->model('m_pengembang');
		$this->load->model('m_kategori');
		$this->load->model('m_account');
		$this->load->model('m_projek');
	}
	
	public function index()
	{
		
		$data['acc'] = $this->m_property->getlimited();
		$data['acc2'] = $this->m_account->get();
		$data['kat'] = $this->m_kategori->get();
		$data['pro'] = $this->m_projek->getlimited();
		$this->load->view('frontend/index.php',$data);
	}
	
	public function projek()
	{
		
		
		$data['pro'] = $this->m_projek->get();
		$this->load->view('frontend/projek.php',$data);
	}
	
	public function agen()
	{
		
		
		$data['acc2'] = $this->m_account->get();
		
		$this->load->view('frontend/agen.php',$data);
	}
}
