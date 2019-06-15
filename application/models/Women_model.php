<?php

class Women_model extends CI_model{



/*

*   Get all women related products 
*/ 


	public function get_product(){


		

				$query = $this->db->get('women');

				return  $query->result();

	}

/*u

*   Get single  products 
*/ 

	public function product($id){
	$this->db->where('id',$id);
	$query = $this->db->get('women');
	return $query->result();

	}

/*
*   Select first three products in the category  
*/ 

 public function related_product(){

 		$this->db->limit('4');
 		$query = $this->db->get('women');
 		return $query->result();

 }

}














?>