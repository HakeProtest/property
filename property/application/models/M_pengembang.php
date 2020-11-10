<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_pengembang extends CI_Model {
		
		public function get(){
		
			return $this->db->get("pengembang")->result();
		}
		public function add($data){
			
			return $this->db->insert('pengembang',$data);
		}
		public function getByID($id_pengembang){
			$this->db->where('id_pengembang',$id_pengembang);
			return $this->db->get('pengembang')->row(0);
		}

		public function edit($id_pengembang,$data)
		{
			$this->db->where('id_pengembang',$id_pengembang);
			return $this->db->update('pengembang',$data);
		}
		 function delete($id_pengembang)
    {
        $this->db->where("id_pengembang", $id_pengembang);
        $this->db->delete("pengembang");
    }
		
	}