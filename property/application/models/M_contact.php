<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_contact extends CI_Model {
		
		public function get(){
			
			
			return $this->db->get("contact")->result();
		}
		public function add($data){
			
			return $this->db->insert('contact',$data);
		}
		public function getByID($id_contact){
			$this->db->where('id_contact',$id_contact);
			return $this->db->get('contact')->row(0);

			//$sql="SELECT * from contact";
			//return $this->db->query($sql);
		}

		public function edit($id_contact,$data)
		{
			$this->db->where('id_contact',$id_contact);
			return $this->db->update('contact',$data);
		}
		 function delete($id_contact)
    {
        $this->db->where("id_contact", $id_contact);
        $this->db->delete("contact");
    }
    
     function deleteall()
    {
      
        $this->db->query("truncate table contact");
    }
		
		public function add_contact($data){
			
			return $this->db->insert('contact',$data);
		}
	}