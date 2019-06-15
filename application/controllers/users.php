<?php
class Users extends CI_controller{


public function register(){

	$this->form_validation->set_rules('firstname','First Name','trim|required|min_length[2]|max_length[25]');
	$this->form_validation->set_rules('lastname','Last Name','trim|required|min_length[2]|max_length[25]');
	$this->form_validation->set_rules('username','Username','trim|required|min_length[3]|max_length[25]');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[50]');
	$this->form_validation->set_rules('password2','Confirm password','trim|required|matches[password]');
	if ($this->form_validation == false) {
		
		$this->load->view('users/register')
	}  else{

			if($this->User_model->register()){

				$this->session->set_flashdata('registered','welcome to m fashion');
				redirect('/');
			}

		}

	}


public function login(){

		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user_id = $this->User_model->login($username,$password);

		if($user_id){

			$data = array(

				'username' => 
				'logged_in'=>true;
			);

			$this->session->set_userdata($data);

			$this->session->set_flashdata('login','Your login is successfull');
			redirect('/');

		} else{

			$this->session->set_flashdata('fail','Login failed');
			redirect('login');
		}


}


public function logout(){


}

?>