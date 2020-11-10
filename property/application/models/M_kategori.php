<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_kategori extends CI_Model {
		
		public function get(){
		
			return $this->db->get("kategori")->result();
		}
		public function add($data){
			
			return $this->db->insert('kategori',$data);
		}
		public function getByID($id_kategori){
			$this->db->where('id_kategori',$id_kategori);
			return $this->db->get('kategori')->row(0);
		}

		public function edit($id_kategori,$data)
		{
			$this->db->where('id_kategori',$id_kategori);
			return $this->db->update('kategori',$data);
		}
		 function delete($id_kategori)
    {
        $this->db->where("id_kategori", $id_kategori);
        $this->db->delete("kategori");
    }
		
	}