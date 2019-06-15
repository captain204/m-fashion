<?php
class Admin extends CI_controller{


		public function index(){

			$this->load->view('admin/home');

		}



public function add(){
		$this->form_validation->set_rules('firstname','First Name','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('lastname','Last Name','trim|required|min_length[2]|max_length[25]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[25]');
		$this->form_validation->set_rules('password1','Confirm password','trim|required|min_length[4]|max_length[25]|matches[password]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		if ($this->form_validation->run()==FALSE) {
			
			$this->load->view('admin/add_admin');
		} else{

			if ($this->Admin_model->add_admin()) {
				$this->session->set_flashdata('added','Admin added');
				redirect('admin/add');
			}else{

				"unable to add  admin";
			}
		}
	}



		public function add_admin(){

			$this->form_validation->set_rules('firstname','First Name', 'trim|required|min_length[2]|max_length[25]');
			$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[2]|max_length[25]');
			$this->form_validation->set_rules('username', 'Username','trim|required|min_length[2]|max_lenght[25]');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_lenght[250]');
			$this->form_validation->set_rules('password2','Confirm Password','trim|required|min_length[6]|max_lenght[250]|matches[password]');
			$this->form_validation->set_rules('email','trim|required');

			if($this->form_validation->run()==FALSE){
				$this->load->view('admin/add_admin');
			} else{

				if($this->Admin_model->add_admin()){
					$this->session->set_flashdata('registered','Admin Successfully added');
					redirect('admin');
				}else{

					echo "Admin not added";
				}
			}


		}


		public function login(){

			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->form_validation->run()==FALSE) {			
				$this->load->view('admin/login');
			} else{
			$user = $this->Admin_model->login($username,$password);
			if($user){
				$data = array(
					'logged_in' => true,
					'username' => $username,
				);
				$this->session->set_flashdata('login','You are currently logged in');
				redirect('admin');
			}else{

				$this->session->set_flashdata('failed','Invalid username or password');
				redirect('admin/login');
			}

		}

	}


		public function logout(){

			$this->session->session_destroy();
			redirect('login');

		}


		/*
		* Add male related products to the database
		*/


		public function add_product_m(){

			$this->form_validation->set_rules('name','Name','trim|required|min_length[2]');
			$this->form_validation->set_rules('price','Price','trim|required|min_length[2]');
			$this->form_validation->set_rules('category','Category','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');
			$this->form_validation->set_rules('delivery_fee','Delivery fee','trim|required');
			$this->form_validation->set_rules('sizes','Size','trim|required');
			$this->form_validation->set_rules('quantity','Quantity','trim|required');


			if ($this->form_validation->run()==FALSE) {
				$this->load->view('admin/add_product_m');
			} else{

					$config['upload_path'] = './assets/img/men';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$file_data = $this->upload->data();
						$file_name = $file_data['file_name'];
					}  else{

						echo "error";
					} 


					$data = array(

					'name' => $this->input->post('name'),
					'image' => $file_data['file_name'],
					'price' => $this->input->post('price'),
					'category' => $this->input->post('category'),
					'description' => $this->input->post('description'),
					'delivery_fee' => $this->input->post('delivery_fee'),
					'sizes' => $this->input->post('sizes'),
					'quantity' => $this->input->post('quantity'),
				);

				$this->Admin_model->add_product_m($data);
				$this->session->set_flashdata('product','Product added Successfully');
				redirect('admin');

			}


		}

		/*
		* update male related products to the database
		*/



		public function update_product_m($id){
			$data['product'] = $this->Admin_model->get_men($id);
			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('price','Price','trim|required');
			$this->form_validation->set_rules('category','Category','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');
			$this->form_validation->set_rules('delivery_fee','Delivery Fee','trim|required');
			$this->form_validation->set_rules('sizes','Product size','trim|required');
			$this->form_validation->set_rules('quantity','Quantity','trim|required');
			
			if ($this->form_validation->run()==FALSE) {
				$this->load->view('admin/update_m',$data);
			} else{
					$config['upload_path'] = './assets/img/men';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$file_data = $this->upload->data();
						$file_name = $file_data['file_name'];
					}  else{

						echo "error";
					} 

					$data = array(

					'name' => $this->input->post('name'),
					'image' => $file_data['file_name'],
					'price' => $this->input->post('price'),
					'category' => $this->input->post('category'),
					'description' => $this->input->post('description'),
					'delivery_fee' => $this->input->post('delivery_fee'),
					'sizes' => $this->input->post('sizes'),
					'quantity' => $this->input->post('quantity'),
					
				);

				$id = $this->input->post('id');
				$this->Admin_model->update_m($id,$data);
				$this->session->set_flashdata('product','Product added Successfully');
				redirect('admin/view_product_m');
			
		}

	}
		/*
		* view male related products to the database
		*/


		public function view_product_m(){

			$data['product'] = $this->Admin_model->view_m();
			$this->load->view('admin/product_m',$data);

		}

		/*
		* Delete male related products to the database
		*/



		public function delete_m($id){


			if( $this->Admin_model->delete_m($id)){

				redirect('admin/view_product_m');
			}else{

				echo "unable to delete item from database";
			}

		}


		/*
		* End of men related products controller
		*/


		/*
		* view women related products to the database
		*/



		public function view_product_w(){

			$data['product'] = $this->Admin_model->view_w();
			$this->load->view('admin/product_w',$data);

		}

		/*
		* Add women related products to the database
		*/


		public function add_product_w(){

			$image = $this->upload->data('file_name');

			$this->form_validation->set_rules('name','Name','trim|required|min_length[2]|max_lenght[25]');
			$this->form_validation->set_rules('price','Price','trim|required|min_length[2]');
			$this->form_validation->set_rules('category','Category','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');

			if ($this->form_validation() == false) {
				$this->load->view('admin/add_product_m',$data);
			} else{

					$config['upload_path'] = './assets/images/men';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$file_data = $this->upload->data();
						$file_name = $file_data['file_name'];
					}  else{

						echo "error";
					} 


					$data = array(

					'name' => $this->input->post('name'),
					'image' => $file_data['file_name'],
					'price' => $this->input->post('price'),
					'category' => $this->input->post('category'),
					'description' => $this->input->post('description'),
				);

				$this->Admin_model->add_product_m($data);
				$this->session->set_flashdata('product','Product added Successfully');
				redirect('admin');

			}


		}


		/*
		* Update women related products to the database
		*/


		public function update_product_w($id){


			$image = $this->upload->data('file_name');

			$this->form_validation->set_rules('name','Name','trim|required|min_length[2]|max_lenght[25]');
			$this->form_validation->set_rules('price','Price','trim|required|min_length[2]');
			$this->form_validation->set_rules('category','Category','trim|required');
			$this->form_validation->set_rules('description','Description','trim|required');

			if ($this->form_validation->run() == false) {
				$data['product'] = $this->Admin_model->get_women($id);
				$this->load->view('admin/update_w',$data);
			} else{

					$config['upload_path'] = './assets/images/women';
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$this->upload->initialize($config);
					if($this->upload->do_upload('image')){
						$file_data = $this->upload->data();
						$file_name = $file_data['file_name'];
					}  else{

						echo "error";
					} 


					$data = array(

					'name' => $this->input->post('name'),
					'image' => $file_data['file_name'],
					'price' => $this->input->post('price'),
					'category' => $this->input->post('category'),
					'description' => $this->input->post('description'),
				);

				$id = $this->input->post('id');
				$this->Admin_model->add_product_m($id,$data);
				$this->session->set_flashdata('product','Product added Successfully');
				redirect('admin/view_product_w');


		}

	}

		/*
		* Delete male related products in the database
		*/



		public function delete_w($id){


			if( $this->Admin_model->delete_w($id)){

				redirect('admin/view_product_w');
			}else{

				echo "unable to delete item from database";
			}

		}

	/*
	* End of women related products controller
	*/


}


?>