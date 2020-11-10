<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_lead extends CI_Model {
		
		public function get(){
			
			
			return $this->db->get("lead")->result();
		}
		public function add($data){
			
			return $this->db->insert('lead',$data);
		}
		public function getByID($id_lead){
			$this->db->where('id_lead',$id_lead);
			return $this->db->get('lead')->row(0);

			//$sql="SELECT * from lead";
			//return $this->db->query($sql);
		}

		public function edit($id_lead,$data)
		{
			$this->db->where('id_lead',$id_lead);
			return $this->db->update('lead',$data);
		}
		 function delete($id_lead)
    {
        $this->db->where("id_lead", $id_lead);
        $this->db->delete("lead");
    }
		
		public function add_contact($data){
			
			return $this->db->insert('contact',$data);
		}
	}