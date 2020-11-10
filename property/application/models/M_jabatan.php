<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_jabatan extends CI_Model {
		
		public function get(){
		
			return $this->db->get("jabatan")->result();
		}
		public function add($data){
			
			return $this->db->insert('jabatan',$data);
		}
		public function getByID($id_jabatan){
			$this->db->where('id_jabatan',$id_jabatan);
			return $this->db->get('jabatan')->row(0);
		}

		public function edit($id_jabatan,$data)
		{
			$this->db->where('id_jabatan',$id_jabatan);
			return $this->db->update('jabatan',$data);
		}
		 function delete($id_jabatan)
    {
        $this->db->where("id_jabatan", $id_jabatan);
        $this->db->delete("jabatan");
    }
		
	}