<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {

	
	public function pass($id)
	{ 
		
			$this->db->set('status',1);
			$this->db->where('unique_key',$id);
			$this->db->update('users');
			
				$visible = 1;
				$this->session->set_flashdata('visible', $visible);
				$msg='<div class="alert alert-success">Your Email Verified Successfully! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';
				$this->session->set_flashdata('message',$msg);
				redirect('Welcome', $data);

		
	
	}
	
	
	
	
	
}
