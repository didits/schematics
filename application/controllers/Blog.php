<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{
		$datas=array(
		'h' => $this->db->query("call show_berita(1)"),
		'b'=> 2,
		'c'=>0		);
		$this->load->view('blog', $datas);
		$this->load->view('footer');
	}
}
