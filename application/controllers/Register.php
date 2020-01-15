<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$unique_email = $this->db->select('*')->from('users')->where('email',$this->input->post('email'))->get()->num_rows();
		if ($unique_email>0) {
			$visible = 1;
			$this->session->set_flashdata('visible', $visible);
			$msg='<div class="alert alert-danger">Account exist with this email <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';
			$this->session->set_flashdata('message',$msg);
			redirect('Welcome');
		}

		$visible = 0;
		$this->session->set_flashdata('visible', $visible);
		$data['email']=$this->input->post('email');
		$data['password']=md5($this->input->post('password'));
		$this->db->insert('users',$data);

					$insert_id = $this->db->insert_id();
				
					$last_id=md5($insert_id);
					
					
					$this->db->where('id',$insert_id);
					$this->db->set('unique_key',$last_id);
					$this->db->update('users');


				$edata['ulink']=base_url().'verify/pass/'.$last_id.'';
				$edata['uemail']=$data['email'];
				
				$this->load->view('send_email',$edata);


		$msg='<div class="alert alert-success">Congratulations! Your Account Created successfully. Please check your email to verify. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button></div>';
		$visible = 1;
		$this->session->set_flashdata('visible', $visible);
		$this->session->set_flashdata('message',$msg);
		redirect('Welcome');
	}


}
