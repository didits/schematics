<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		$this->load->helper('string');
		$this->load->database();
    }
	
	public function submit_nlc()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->dashboard->submit_nlc())
		{
				$error = array('error' => $this->dashboard->display_errors());

				$this->load->view('dashboard/nlc', $error);
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());

				$this->load->view('upload_success', $data);
		}
	}
}
?>