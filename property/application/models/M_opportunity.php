<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_opportunity extends CI_Model {
		
		public function get(){
			$this->db->select("*, lead.no_kontak as ckontak, account.no_kontak as akontak, lead.email as cemail,  account.email as aemail, lead.alamat as calamat ");
			$this->db->join('lead','lead.id_lead=opportunity.id_lead');
			$this->db->join('account','account.id_account=opportunity.id_account');
			$this->db->join('property','property.id_property=opportunity.id_property');
			return $this->db->get("opportunity")->result();
		}
		public function getbyid($id){
			$this->db->select("*, lead.no_kontak as ckontak, account.no_kontak as akontak, lead.email as cemail,  account.email as aemail, lead.alamat as calamat ");
			$this->db->join('lead','lead.id_lead=opportunity.id_lead');
			$this->db->join('account','account.id_account=opportunity.id_account');
			$this->db->join('property','property.id_property=opportunity.id_property');
			$this->db->where('id_opportunity',$id);
			return $this->db->get("opportunity")->result();
		}
		
		public function getaktifitas(){
			$this->db->select("*, lead.no_kontak as ckontak, account.no_kontak as akontak, lead.email as cemail,  account.email as aemail, lead.alamat as calamat ");
			$this->db->join('lead','lead.id_lead=opportunity.id_lead');
			$this->db->join('account','account.id_account=opportunity.id_account');
			$this->db->join('property','property.id_property=opportunity.id_property');
			$this->db->where("keputusan ='' and close_deal =''");
			return $this->db->get("opportunity")->result();
		}
		public function getbyaccount(){
			$id = $this->session->id_account;
			$this->db->select("*, lead.no_kontak as ckontak, account.no_kontak as akontak, lead.email as cemail,  account.email as aemail, lead.alamat as calamat ");
			$this->db->join('lead','lead.id_lead=opportunity.id_lead');
			$this->db->join('account','account.id_account=opportunity.id_account');
			$this->db->join('property','property.id_property=opportunity.id_property');
			$this->db->where('opportunity.id_account',$id);
			return $this->db->get("opportunity")->result();
		}
		public function add($data){
			
			return $this->db->insert('opportunity',$data);
		}
		
		public function addlead($data){
			
			return $this->db->insert('lead',$data);
		}
		

		public function edit($id_opportunity,$data)
		{
			$this->db->where('id_opportunity',$id_opportunity);
			return $this->db->update('opportunity',$data);
		}
		
		public function editlead($id_lead,$data)
		{
			$this->db->where('id_lead',$id_lead);
			return $this->db->update('lead',$data);
		}
		 function delete($id_opportunity)
    {
        $this->db->where("id_opportunity", $id_opportunity);
        $this->db->delete("opportunity");
    }
    
    function delcon($id_contact)
    {
        $this->db->where("id_contact", $id_contact);
        $this->db->delete("contact");
    }
    
    public function ambilLaporan($t1,$t2,$s1,$s2){
		$this->db->select("*, lead.no_kontak as ckontak, account.no_kontak as akontak, lead.email as cemail,  account.email as aemail, lead.alamat as calamat ");
			$this->db->join('lead','lead.id_lead=opportunity.id_lead');
			$this->db->join('account','account.id_account=opportunity.id_account');
			$this->db->join('property','property.id_property=opportunity.id_property');
		$this->db->where("DATE(tgl_dibuat) between '$t1' AND '$t2'");
		if($s1!=''){
		$this->db->where("opportunity.win_lost",$s1);
		}
		if($s2!=''){
		$this->db->where("account.id_account",$s2);
		}
		return $this->db->get("opportunity")->result();
	}
	}