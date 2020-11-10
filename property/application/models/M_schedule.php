<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_schedule extends CI_Model {
		
		public function get(){
		$this->db->join('lead','lead.id_lead=schedule.id_lead');
		$this->db->join('account','account.id_account=schedule.id_account');
			return $this->db->get("schedule")->result();
		}
		public function add($data){
			
			return $this->db->insert('schedule',$data);
		}
		public function getByID($id_schedule){
			$this->db->join('lead','lead.id_lead=schedule.id_lead');
		$this->db->join('account','account.id_account=schedule.id_account');
			$this->db->where('id_schedule',$id_schedule);
			return $this->db->get('schedule')->row();
		}
		public function getByID2($id_schedule){
			$this->db->join('lead','lead.id_lead=schedule.id_lead');
		$this->db->join('account','account.id_account=schedule.id_account');
			$this->db->where('id_schedule',$id_schedule);
			return $this->db->get('schedule')->result();
		}

		public function edit($id_schedule,$data)
		{
			$this->db->where('id_schedule',$id_schedule);
			return $this->db->update('schedule',$data);
		}
		 function delete($id_schedule)
    {
        $this->db->where("id_schedule", $id_schedule);
        $this->db->delete("schedule");
    }
		
	}