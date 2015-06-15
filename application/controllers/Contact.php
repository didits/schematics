<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->helper('string');
		$this->load->database();
    }
	
	public function index()
	{
		$this->load->view('contact_us', array('error' => '' ));
		$this->load->view('footer');
	}
	public function post()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$subjek = $this->input->post('subjek');
		$pesan = $this->input->post('pesan');
		$this->db->query("call hub_kami('$nama','$email','$subjek','$pesan')");
		$this->load->view('contact_us', array('error' => '<p style="margin:15px; font-style:italic;color:#FFF">TERIMA KASIH!</p>' ));
	}
	
}
