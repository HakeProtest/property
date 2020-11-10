<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_property extends CI_Model {
		
		public function get(){
			
			$this->db->join('projek','property.id_projek=projek.id_projek');
			$this->db->join('pengembang','pengembang.id_pengembang=projek.id_pengembang');
			$this->db->join('kategori','kategori.id_kategori=property.id_kategori');
			$this->db->join('account','account.id_account=property.id_account');
			$this->db->select("property.*,nm_account,nm_pengembang,nm_kategori,projek.alamat");
			$this->db->distinct("projek.alamat");
			$this->db->order_by("id_property", "desc");
			
			return $this->db->get("property")->result();
			
			
		}
		
		public function getlimited(){
			
			$this->db->join('projek','property.id_projek=projek.id_projek');
			$this->db->join('pengembang','pengembang.id_pengembang=projek.id_pengembang');
			$this->db->join('kategori','kategori.id_kategori=property.id_kategori');
			$this->db->join('account','account.id_account=property.id_account');
			$this->db->select("property.*,nm_account,nm_pengembang,nm_kategori,projek.alamat");
			$this->db->distinct("projek.alamat");
			$this->db->order_by("id_property", "desc");
			$this->db->limit(6); 
			return $this->db->get("property")->result();
			
			
		}
		
		public function getstok(){
			$this->db->where("status ='For Sale'");
			return $this->db->get("property")->result();
		}
		public function add($data){
			
			return $this->db->insert('property',$data);
		}
		
		public function addfoto($data){
			
			return $this->db->insert('foto_property',$data);
		}
		public function getByID($id_property){
			$this->db->join("projek","projek.id_projek=property.id_projek");
			$this->db->join("kategori","kategori.id_kategori=property.id_kategori");
			$this->db->where('id_property',$id_property);
			return $this->db->get('property')->row(0);

		}
		
		public function getGaleriByID($id_property){
			
			$this->db->where('id_property',$id_property);
			return $this->db->get('foto_property')->result();

		}
		public function getFotoByID($id_property){
			
			$this->db->where('id_foto',$id_property);
			return $this->db->get('foto_property')->row(0);

		}
		public function getByProjekID($id_property){
			$this->db->join("projek","projek.id_projek=property.id_projek");
			$this->db->join("kategori","kategori.id_kategori=property.id_kategori");
			$this->db->where('projek.id_projek',$id_property);
			return $this->db->get('property')->result();

		}
		
		public function getHistoryByID($id_property){
			
			
			$this->db->select("*, lead.no_kontak as ckontak, account.no_kontak as akontak, lead.email as cemail,  account.email as aemail, lead.alamat as calamat ");
			$this->db->join('lead','lead.id_lead=opportunity.id_lead');
			$this->db->join('account','account.id_account=opportunity.id_account');
			$this->db->join('property','property.id_property=opportunity.id_property');
			$this->db->where('opportunity.id_property',$id_property);
			return $this->db->get("opportunity")->result();

		}

		public function edit($id_property,$data)
		{
			$this->db->where('id_property',$id_property);
			 $this->db->update('property',$data);
			return $this->db->affected_rows() > 0 ? TRUE : FALSE;
			
		}
		 function delete($id_property)
    {
        $this->db->where("id_property", $id_property);
        $this->db->delete("property");
    }
    
     function deletefoto($id_property)
    {
        $this->db->where("id_foto", $id_property);
        $this->db->delete("foto_property");
    }
		
	}