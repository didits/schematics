<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('user_email')!=''){
			$ev=$this->session->userdata('user_event');
			if($ev=='NPC'){
				redirect('/dashboard/npc');
			}
			else
			if($ev=='NLC'){
				redirect('/dashboard/nlc');
			}
			else
			if($ev=='NST'){
				redirect('/dashboard/nst');
			}
		}else $this->load->view('user/login');
		$this->load->view('footer');
	}
	
	public function gagal()
	{
		if($this->session->userdata('user_email')!=''){
			$ev=$this->session->userdata('user_event');
			if($ev=='NPC'){
				redirect('/dashboard/npc');
			}
			else
			if($ev=='NLC'){
				redirect('/dashboard/nlc');
			}
			else
			if($ev=='NST'){
				redirect('/dashboard/nst');
			}
		}else $this->load->view('user/login_gagal');
		$this->load->view('footer');
	}
}
