<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function payment_method()
	{

		$this->load->library("cart");
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }

		$data['total_cart_items'] = count($this->cart->contents());
		$this->load->view('include/header',$data);
		$this->load->view('payment-method');
		$this->load->view('include/footer');		
	}


	public function stripe_payment_form()
	{
	$this->load->library("cart");
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }

		$data['total_cart_items'] = count($this->cart->contents());
		$data['total_price'] = $this->cart->total();

		$this->load->view('include/header',$data);
		$this->load->view('stripe-payment');
		$this->load->view('include/footer');
	}



	public function stripe_payment()
	{

	$this->load->library("cart");
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }

		try{
			require_once('application/libraries/stripe-php/init.php');

			\Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));

			\Stripe\Charge::create ([
				"amount" => $_POST['total_price'] * 100,
				"currency" => "BDT",
				"source" => $this->input->post('stripeToken'),
				"description" => "Payment from FOODBOX" 
			]);

		} catch (\Stripe\Error\ApiConnection $e) {
    // Network problem, perhaps try again.
			
			$this->session->set_flashdata('success', 'Network problem, perhaps try again.');
			redirect($_SERVER['HTTP_REFERER']);
		} catch (\Stripe\Error\InvalidRequest $e) {
    // You screwed up in your programming. Shouldn't happen!
			
			$this->session->set_flashdata('success', 'You screwed up in your programming. Shouldnt happen!');
			redirect($_SERVER['HTTP_REFERER']);
		} catch (\Stripe\Error\Api $e) {
    // Stripe's servers are down!
			
			$this->session->set_flashdata('success', 'Stripe servers are down!');
			redirect($_SERVER['HTTP_REFERER']);
		} catch (\Stripe\Error\Card $e) {
    // Card was declined.
			
			$this->session->set_flashdata('success', 'Network problem, perhaps try again.');
			redirect($_SERVER['HTTP_REFERER']);
		}


		$data['user_id']=$this->session->userdata('userid');
		$data['user_name']=$this->input->post('name');
		$data['user_address']=$this->input->post('address');
		$data['user_email']=$this->input->post('email');
		$data['user_mobile']=$this->input->post('mobile');
		$data['cart'] = serialize($this->cart->contents());
		$data['payment_method']='card-payment';
		$data['transaction_id']=$this->input->post('stripeToken');
		$data['order_date']=date("Y-m-d h:i:sa");

		$this->db->insert('orders',$data);
		$this->cart->destroy();
		$msg='<div class="alert alert-success">Congratulations '.$data['user_name'].'! <br>
		Your order has been confirmed. <br>
		Your transaction key '.$data['transaction_id'].' </div>';

		$this->session->set_flashdata('order',$msg);
		redirect(base_url());


	}



	public function index()
	{

		$this->load->library("cart");
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }

		$this->form_validation->set_rules('name', 'Name', 'required|english_check');
		$this->form_validation->set_rules('email', 'Email', 'required');
	 	$this->form_validation->set_rules('mobile', 'Mobile number', 'required|numeric|min_length[11]');
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[6]');
		$this->form_validation->set_message('english_check', 'Use only alphabet and space');

		function  english_check($str){

			if (!preg_match("/^[a-zA-Z ]*$/",$str)) {	return FALSE; }else{ return TRUE; } }

		if ($this->form_validation->run() == FALSE)
		{

			$data['total_cart_items'] = count($this->cart->contents());

			$this->load->view('include/header',$data);
			$this->load->view('order');
			$this->load->view('include/footer');
		}else{

			$data['user_id']=$this->session->userdata('userid');
			$data['user_name']=$this->input->post('name');
			$data['user_address']=$this->input->post('address');
			$data['user_email']=$this->input->post('email');
			$data['user_mobile']=$this->input->post('mobile');
			$data['cart'] = serialize($this->cart->contents());
			$data['payment_method']='cash-on-delivery';
			$data['order_date']=date("Y-m-d h:i:sa");

			$this->db->insert('orders',$data);
			$this->cart->destroy();
			$msg='<p>Congratulations '.$data['user_name'].'! <br>
			Order confirmed! Food is on the way. Please wait 30 minutes.</p>';
			$this->session->set_flashdata('order',$msg);
			redirect(base_url());

	}

}
	public function cash_on_delivery()
	{
		$this->load->library("cart");
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }

		$this->form_validation->set_rules('name', 'Name', 'required|english_check');
		
		$this->form_validation->set_rules('mobile', 'Mobile number', 'required|numeric|min_length[11]');

		$this->form_validation->set_rules('address', 'Address', 'required|min_length[6]');


		$this->form_validation->set_message('english_check', 'Use only alphabet and space');

		function  english_check($str){

			if (!preg_match("/^[a-zA-Z ]*$/",$str)) {
				return FALSE;
			}else{
				return TRUE;
			}
		}

		if ($this->form_validation->run() == FALSE)
		{

			$data['total_cart_items'] = count($this->cart->contents());

			$this->load->view('template/header',$data);
			$this->load->view('cash-on-delivery');
			$this->load->view('template/footer');
		}else{

			$data['user_id']=$this->session->userdata('userid');
			$data['user_name']=$this->input->post('name');
			$data['user_address']=$this->input->post('address');
			$data['user_email']=$this->input->post('email');
			$data['user_mobile']=$this->input->post('mobile');
			$data['cart'] = serialize($this->cart->contents());
			$data['payment_method']='cash-on-delivery';
			$data['transaction_id']=rand(100000,999999);
			$data['order_date']=date("Y-m-d h:i:sa");

			$this->db->insert('orders',$data);
			$this->cart->destroy();
			$msg='<div class="alert alert-success">Congratulations '.$data['user_name'].'! <br>
			Your order has been confirmed. <br>
			Your Order ID '.$data['transaction_id'].' </div>';

			$this->session->set_flashdata('order',$msg);
			redirect(base_url());


		}	
	}



	public function my_account(){

		$this->load->library("cart");
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }

		$query=  $this->db->select('*')->from('orders')->where('user_id',$this->session->userdata('userid'))->order_by('id','desc')->get();
		$data['result'] = $query->result_array();

		$data['total_cart_items'] = count($this->cart->contents());

		$this->load->view('include/header',$data);
		$this->load->view('my-order',$data);
		$this->load->view('include/footer');


	}

	public function order_details($id){
		$this->load->library("cart");
		if(($this->session->userdata('userid'))){
		}else{ redirect('Login'); }


		$query=  $this->db->select('*')->from('orders')->where('id',$id)->get();
		$data['result'] = $query->result_array();
		$data['cart'] = unserialize($data['result'][0]['cart']);

		$data['total_cart_items'] = count($this->cart->contents());

		$this->load->view('include/header',$data);
		$this->load->view('order-details',$data);
		$this->load->view('include/footer');


	}



	public function pending_orders(){


		if(($this->session->userdata('admin_id'))){
		}else{ redirect('Admin'); }


		$query=  $this->db->select('*')->from('orders')->where('status',0)->order_by('id','desc')->get();
		$data['result'] = $query->result_array();

		//$data['total_cart_items'] = count($this->cart->contents());
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('pending-orders',$data);
		$this->load->view('admin/footer');

	}



	public function delivered_orders(){


		if(($this->session->userdata('admin_id'))){
		}else{ redirect('Admin'); }


		$query=  $this->db->select('*')->from('orders')->where('status',1)->order_by('id','desc')->get();
		$data['result'] = $query->result_array();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('pending-orders',$data);
		$this->load->view('admin/footer');

	}


	public function cancelled_orders(){

		if(($this->session->userdata('admin_id'))){
		}else{ redirect('Admin'); }

		$query=  $this->db->select('*')->from('orders')->where('status',2)->order_by('id','desc')->get();
		$data['result'] = $query->result_array();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('pending-orders',$data);
		$this->load->view('admin/footer');

	}




	public function order_info($id){

		if(($this->session->userdata('admin_id'))){
		}else{ redirect('Admin'); }

		$this->load->library("cart");

		$query=  $this->db->select('*')->from('orders')->where('id',$id)->get();
		$data['result'] = $query->result_array();
		$data['cart'] = unserialize($data['result'][0]['cart']);

		$data['total_cart_items'] = count($this->cart->contents());

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('order-info',$data);
		$this->load->view('admin/footer');


	}

	public function order_delete($id){

		$this->db->where('id',$id);

		$this->db->delete('orders');

		$msg='<div class="alert alert-info">Order deleted successfully!</div>';
		
		$this->session->set_flashdata('message',$msg);

		redirect($_SERVER['HTTP_REFERER']);

	}

	public function delivered($id){

		
		$this->db->set('status',1);
		$this->db->where('id',$id);
		$this->db->update('orders');

		$msg='<div class="alert alert-success">Order marked as delivered </div>';

		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);


	}



	public function cancelled($id){

		
		$this->db->set('status',2);
		$this->db->where('id',$id);
		$this->db->update('orders');

		$msg='<div class="alert alert-success">Order marked as cancelled </div>';

		$this->session->set_flashdata('message',$msg);
		redirect($_SERVER['HTTP_REFERER']);


	}

} 	
