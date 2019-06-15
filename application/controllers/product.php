<?php 
class Product extends CI_controller{



	public function product_w($id){
		$data['product'] = $this->Women_model->product($id);
		$data['related'] = $this->Women_model->related_product();
		$this->load->view('includes/header.php');
		$this->load->view('product/product.php',$data);
		$this->load->view('includes/footer.php');
	}


	public function product_m($id){

		$data['product'] = $this->Men_model->product($id);
		$data['related'] = $this->Men_model->related_product();
		$this->load->view('includes/header.php');
		$this->load->view('product_men/product_men.php',$data);
		$this->load->view('includes/footer.php');
		
	}


}






?>