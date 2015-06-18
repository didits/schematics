<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panitia extends CI_Controller {

	public function index()
	{
		$this->load->view('user/panitia');
		$this->load->view('footer');
	}
}
