<?php
class Home extends CI_controller{


	public function index(){

			$data['products_w'] = $this->Women_model->get_product();
			$data['products_m'] = $this->Men_model->get_product();
			$this->load->view('includes/header.php');
			$this->load->view('home/home.php',$data);
			$this->load->view('includes/footer.php');

	}


}




?>