<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

public function index(){
$this->load->library("cart");
$data['visible'] = 1;
		$this->load->view('include/header');
		$this->load->view('cart',$data);
		$this->load->view('include/footer');
}

}