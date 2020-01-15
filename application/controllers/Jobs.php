<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {


	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('single_job');
		$this->load->view('include/footer');
	}
}