<?php
class Admin_model extends CI_model{

/*
* Add new admin
*/

		public function add_admin(){


			$data =  array(

					'firstname'=>$this->input->post('firstname'),
					'lastname'=>$this->input->post('lastname'),
					'username'=>$this->input->post('username'),
					'password'=>$this->input->post('password'),
					'email' => $this->input->post('email'),
				);

			$insert = $this->db->insert('admin',$data);

			return $insert;
		}


/*
* User login model
*/

		public function login($username,$password){

				$this->db->where('username',$username);
				$this->db->where('password',$password);
				$result = $this->db->get('admin');
				if($result->num_rows() == 1){
					return $result->row(0)->id;
				} else{
					return false;
				}

		}

/*
* Men related products model
*/


	public function add_product_m($data){

		$insert = $this->db->insert('men',$data);
		return $insert;
	}

	public function update_m($id,$data){
		$this->db->where('id',$id);
		$update = $this->db->update('men',$data);
		return $update;
	}	


	public function delete_m($id){
		$this->db->where('id',$id);
		$delete = $this->db->delete('men');
		return $delete;
	}

	public function view_m(){	
		$query = $this->db->get('men');
 		return $query->result();
	}

/*
*  Get single  products model
*/


	public function get_men($id){
		$this->db->where('id',$id);
		$query = $this->db->get('men');
		return $query->result();
	}


/*
*  End of Men related products model
*/

/*
* Women related products model
*/


	public function add_product_w($data){

		$insert = $this->db->insert('women',$data);
		return $insert;
	}

	public function update_w($id,$data){
		$this->db->where('id',$id);
		$update = $this->db->update('women',$data);
		return $update;
	}

	public function delete_w($id){
		$this->db->where('id',$id);
		$delete = $this->db->delete('women');
		return $delete;
	}

	public function view_w(){
		
		$query = $this->db->get('women');
 		return $query->result();
	}
/*
*  Get single  products model
*/

	public function get_women($id){
		$this->db->where('id',$id);
		$query = $this->db->get('women');
		return $query->result();
	}


/*
*  End of women related products model
*/



}

?>