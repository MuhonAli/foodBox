<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{ 
		$this->load->library("cart");
		$data['total_cart_items'] = count($this->cart->contents());

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
			{	$visible = 1;
				$this->session->set_flashdata('visible', $visible);
				
				$this->load->view('include/header',$data);
				$this->load->view('home', $data);
				$this->load->view('include/footer',$data);

			}else{
				$data['email']=$this->input->post('email');
				$data['password']=md5($this->input->post('password'));

				$this->db->where('email',$data['email']);
				$this->db->where('password',$data['password']);
				$query=$this->db->get('users');
				$result=$query->result_array();

				if ($result) {

					if($result[0]['status']=='0'){

						$visible = 1;
						$this->session->set_flashdata('visible', $visible);
						$msg='<div class="alert alert-danger">Your Email is not verified yet! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>';
						$this->session->set_flashdata('message',$msg);
						redirect('Welcome', $data);

					} else if($result[0]['status']=='1'){
						$visible = 0;
						$this->session->set_flashdata('visible', $visible);
						$this->session->set_userdata('userid', $result[0]['id']);
						$this->session->set_userdata('email', $result[0]['email']);
						redirect('Welcome', $data);				
					} else{
						$visible = 1;
						$this->session->set_flashdata('visible', $visible);
						$msg='<div class="alert alert-danger">Invalid Username or Password <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button></div>';
						$this->session->set_flashdata('message',$msg);
						redirect('Welcome', $data);
					}
				}
			}
		}
	}