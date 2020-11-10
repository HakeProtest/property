<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_projek extends CI_Model {
		
		public function get(){
			$this->db->join('pengembang','pengembang.id_pengembang=projek.id_pengembang');
			
			return $this->db->get("projek")->result();
		}
		public function getlimited(){
			$this->db->join('pengembang','pengembang.id_pengembang=projek.id_pengembang');
			$this->db->limit(6); 
			return $this->db->get("projek")->result();
		}
		public function add($data){
			
			return $this->db->insert('projek',$data);
		}
		public function getByID($id_projek){
			$this->db->where('id_projek',$id_projek);
			return $this->db->get('projek')->row(0);

			//$sql="SELECT * from projek";
			//return $this->db->query($sql);
		}

		public function edit($id_projek,$data)
		{
			$this->db->where('id_projek',$id_projek);
			return $this->db->update('projek',$data);
		}
		 function delete($id_projek)
    {
        $this->db->where("id_projek", $id_projek);
        $this->db->delete("projek");
    }
		
	}