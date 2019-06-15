<?php
class Men_model extends CI_model{

/*
*	Get all men related products
*/
	public function get_product(){

		$query = $this->db->get('men');
		return $query->result();

	}

/*
*	Get single product
*/

	public function product($id){

		$this->db->where('id',$id);
		$query = $this->db->get('men');
		return $query->result();
	}

	public function related_product(){

		$this->db->limit('4');
		$query = $this->db->get('men');
		return $query->result();
	}

}






?>