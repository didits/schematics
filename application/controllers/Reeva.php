<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reeva extends CI_Controller {
	public function index()
	{
		$this->load->view('event/reeva');
		$this->load->view('footer');
	}
}
