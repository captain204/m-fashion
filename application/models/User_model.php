<?php
class User_model extends CI_model{


public function register(){

	$data =  array(

				
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
		);

	$insert = $this->db->insert('users',$data);

}


public function login($username,$password){

	$this->db->where('username',$username);
	$this->db->where('password',$password);
	$result = $this->db->get('user');
	if($result->num_rows()==1){

		return $result->row(0)->id;
	}else{

		return false;
	}

}




}



?>