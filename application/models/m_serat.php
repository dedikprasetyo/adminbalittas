<?php 	
	class m_serat extends CI_Model
	{
		public function selectSerat() {
			// $query = $this->db->select("*");
			// $query = $this->db->from("serat");
			$query = $this->db->get('serat');
   			return $query->result();
		}
	}
 ?>