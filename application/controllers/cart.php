<?php

class Cart extends CI_controller{

	public $delivery_fee =10.000;
	public $total = 0;
	public $grand_total;

/*
*	Cart index
*/
	
	public function index(){
		$this->load->view('includes/header.php');
		$this->load->view('cart.php');
		$this->load->view('includes/footer.php');
	}

/*
*	Cart index
*/



	public function add(){

		$data = array(

				'id' =>$this->input->post('item_number'),
				'qty'=>$this->input->post('qty'),
				'price'=>$this->input->post('price'),
				'name' =>$this->input->post('title'),
			);

			print_r($data);
			if($this->cart->insert($data)){
				redirect('/');
		} else{

			echo "unable to add to cart";
		}
	}

	public function update($in_cart = null){
		$data = $_POST;
		$this->cart->update($data);
		redirect('cart','refresh');
	}
}
?>
	