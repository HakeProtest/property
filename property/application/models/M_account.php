<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_account extends CI_Model {
		
		public function get(){
			//$this->db->join('divisi','divisi.id_divisi=account.id_divisi');
			$this->db->join('jabatan','jabatan.id_jabatan=account.id_jabatan');
			
			return $this->db->get("account")->result();
		}
		public function add($data){
			
			return $this->db->insert('account',$data);
		}
		public function getByID($id_account){
			$this->db->where('id_account',$id_account);
			return $this->db->get('account')->row(0);

			//$sql="SELECT * from account";
			//return $this->db->query($sql);
		}

		public function edit($id_account,$data)
		{
			$this->db->where('id_account',$id_account);
			return $this->db->update('account',$data);
		}
		 function delete($id_account)
    {
        $this->db->where("id_account", $id_account);
        $this->db->delete("account");
    }
		
		public function add_contact($data){
			
			return $this->db->insert('contact',$data);
		}
	}