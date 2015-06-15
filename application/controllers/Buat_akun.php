<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_akun extends CI_Controller {
	
	public function index()
	{
		$this->load->view('user/create');
		$this->load->view('footer');
	}
}
