<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$this->load->library("cart");
		$data['total_cart_items'] = count($this->cart->contents());
		$data['categories']=  $this->db->select('*')->from('categories')->get()->result_array();
		$data['visible'] = 1;

		$this->load->view('include/header',$data);
		$this->load->view('home',$data);
		$this->load->view('include/footer');
	}

	public function menu()
	{

		$this->load->library("cart");
		$data['total_cart_items'] = count($this->cart->contents());

		$data['lunchs']=  $this->db->select('*')->from('items')->where('category_id',4)->get()->result_array();
		$data['dinners']=  $this->db->select('*')->from('items')->where('category_id',5)->get()->result_array();
		$data['coffees']=  $this->db->select('*')->from('items')->where('category_id',6)->get()->result_array();
		$data['snacks']=  $this->db->select('*')->from('items')->where('category_id',7)->get()->result_array();
		$data['drinks']=  $this->db->select('*')->from('items')->where('category_id',8)->get()->result_array();
		$data['visible'] = 1;
		$this->load->view('include/header', $data);
		$this->load->view('menu',$data);
		$this->load->view('include/footer');
	}

	public function items()
	{
		$this->load->library("cart");
		$data['total_cart_items'] = count($this->cart->contents());

		$data['visible'] = 1;
		$this->load->library('pagination');

		if (!empty($_GET['search'])) {
			$query = $this->db->LIKE('title', $_GET['search'],'both');
			$data['search']  = $_GET['search'];
			
		}
		$query=  $this->db->select('*')->from('items')->get();

		$data['totalItems'] = $query->num_rows();

		$data['result'] = $query->result_array();

		$config['suffix']          = "?" . http_build_query($_GET, '', "&");
		$config['base_url']        = site_url('Welcome/items/');
		$config['total_rows']      =$data['totalItems'];
		$config['per_page']        = 9;
		$config['num_links']       = 4;
		$config['full_tag_open']   = '<ul class="pagination no-margin">';
		$config['full_tag_close']  = '</ul>';
		$config['cur_tag_open']    = '<li class="active"><a href="">';
		$config['cur_tag_close']   = '</a></li>';
		$config['prev_tag_open']   = '<li>';
		$config['prev_tag_close']  = '</li>';
		$config['next_tag_open']   = '<li>';
		$config['next_tag_close']  = '</li>';
		$config['num_tag_open']    = '<li>';
		$config['num_tag_close']   = '</li>';
		$config['last_tag_open']   = '<li>';
		$config['last_tag_close']  = '</li>';
		$config['first_tag_open']  = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['next_link']       = 'Next >';
		$config['prev_link']       = '< Prev';

		if ($this->uri->segment(3)) {
			$data['segment'] = $this->uri->segment(3);
		} else {
			$data['segment'] = 0;
		}



		$this->pagination->initialize($config);

		if (!empty($_GET['search'])) {
			$query = $this->db->LIKE('title', $_GET['search'],'both');
			$data['search']  = $_GET['search'];
			
		}

		$query = $this->db->limit($config['per_page'], $data['segment'])->select('*')->from('items')->get();

		$data['result'] = $query->result_array();


		$this->load->view('include/header',$data);
		$this->load->view('items',$data);
		$this->load->view('include/footer');
	}


	public function category($id)
	{
		$this->load->library("cart");
		$data['total_cart_items'] = count($this->cart->contents());
		$data['visible'] = 1;
		$this->load->library('pagination');

		$data['result']=  $this->db->select('*')->from('items')->where('category_id', $id)->get()->result_array();

		$this->load->view('include/header',$data);
		$this->load->view('items',$data);
		$this->load->view('include/footer');
	}

	public function menu_details($id)
	{

		$this->load->library("cart");
		$data['total_cart_items'] = count($this->cart->contents());


		$data['item']=  $this->db->select('*')->from('items')->where('id',$id)->get()->result_array();

		$data['reviews'] =  $this->db->select('*')->from('review')->join('users', 'review.user_id =users.id')->where('review.item_id',$id)->get()->result_array();


		$data['visible'] = 1;
		$this->load->view('include/header', $data);
		$this->load->view('menu_details',$data);
		$this->load->view('include/footer');
	}



	public function contact()
	{
		$this->load->library("cart");
		$data['total_cart_items'] = count($this->cart->contents());
		$data['visible'] = 1;
		$this->load->view('include/header',$data);
		$this->load->view('contact',$data);
		$this->load->view('include/footer');
	}

public function sms(){
	require_once "vendor/autoload.php";
	$basic  = new \Nexmo\Client\Credentials\Basic('c1cf87d5', '0TcYhbYWKNNwB3eW');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '8801748613498',
    'from' => 'Nexmo',
    'text' => 'Hello from Nexmo'
]);
		}


}
