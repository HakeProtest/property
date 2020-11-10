<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lead extends CI_Controller {
	 
	public function __construct(){
		parent::__construct();
		$this->load->model('m_lead');
		
	}
	
	
	public function tampil()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data['acc'] = $this->m_lead->get();
		$this->load->view('lead/tampil',$data);
		$this->load->view('footer');
	}
	
	
	
	

	public function hapus($id_lead)
	{
		 $row = $this->m_lead->getByID($id_lead);

            if ($row) {
                $this->m_lead->delete($id_lead);
                
                $this->session->set_flashdata('message', '<div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong>
                    Delete Record Success.
                    <br>
                </div>');
                redirect(site_url('c_lead/tampil'));
            } else {
                $this->session->set_flashdata('message', 'Record Not Found');
                redirect(site_url('c_lead/tampil'));
            }
	}

	
	

}