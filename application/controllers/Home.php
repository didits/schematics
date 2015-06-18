<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('home/index');
		$this->load->view('footer');
	}
	public function profile()
	{
		$this->load->view('profile');
		$this->load->view('footer');
	}
}
