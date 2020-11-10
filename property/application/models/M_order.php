<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class M_order extends CI_Model {
		
		public function get(){
		$this->db->join('lead','lead.id_lead=order.id_lead');
		$this->db->join('account','account.id_account=order.id_account');
		$this->db->join('property','property.id_property=order.id_property');
			return $this->db->get("order")->result();
		}
		public function ambilLaporan($t1,$t2,$s1){
			$this->db->join('lead','lead.id_lead=order.id_lead');
		$this->db->join('account','account.id_account=order.id_account');
		$this->db->join('property','property.id_property=order.id_property');
		
		$this->db->where("DATE(tgl_order) between '$t1' AND '$t2'");
		if($s1!=''){
		$this->db->where("order.id_account",$s1);
		}
		
		return $this->db->get("order")->result();
		}
		
		public function ambilGrafikBulanan(){
			$query = $this->db->query("SELECT CONCAT(YEAR(tgl_order),'/',MONTH(tgl_order)) AS tahun_bulan ,sum(harga) AS jumlah_bulanan FROM `order` o
join property on property.id_property = o.id_property 
GROUP BY MONTH(tgl_order);");
			return $query->result();
		}
		public function ambilJumlahOpp(){
			$query = $this->db->query("SELECT status_op, COUNT(*) as jml FROM opportunity GROUP BY status_op;");
			return $query->result();
		}
		public function add($data){
			
			return $this->db->insert('order',$data);
		}
		public function getByID($id_order){
			$this->db->join('lead','lead.id_lead=order.id_lead');
		$this->db->join('account','account.id_account=order.id_account');
		$this->db->join('property','property.id_property=order.id_property');
			$this->db->where('id_order',$id_order);
			return $this->db->get('order')->row();
		}
		

		public function edit($id_order,$data)
		{
			$this->db->where('id_order',$id_order);
			return $this->db->update('order',$data);
		}
		
		public function updatestok($id_property)
		{
			
			return $this->db->query("update property set status='Sold Out' where id_property='$id_property'");
		}
		 function delete($id_order)
    {
        $this->db->where("id_order", $id_order);
        $this->db->delete("order");
    }
		
	}