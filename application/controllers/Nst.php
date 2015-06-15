<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nst extends CI_Controller {
	public function index()
	{
		$this->load->view('event/nst');
		$this->load->view('footer');
	}
}
