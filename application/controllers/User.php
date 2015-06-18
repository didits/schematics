<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		if($this->session->userdata('email_address')!=""){
			$this->welcome();
		}else{
			$this->load->view('user/create');
		}
	}
	
	public function logins()
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
	
	function welcome(){
		$data['title']= 'Welcome';
		$this->load->view('header_view',$data);
		$this->load->view('welcome_view.php', $data);
		$this->load->view('footer_view',$data);
	}
	
	public function login(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Your Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		
		if($this->form_validation->run() == FALSE){
			$this->logins();
		}else{
			$email=$this->input->post('email');
			$password=$this->input->post('pass');

			$result=$this->user_model->login($email,$password);
			if($result) $this->goto_dashboard();
			else redirect('/login/gagal');
		}
		
	}
	
	function thank(){
		$this->load->view('user/RegisterSuccess');
	}

	function thank_panitia(){
		$this->load->view('user/panitia_sukses');
	}
	
	public function registration(){
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|xss_clean|valid_email|callback_email_sudah_terpakai');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]|regex_match[/^[a-zA-Z0-9_-~!@#$%^&*()+=]{6,32}$/]');
		$this->form_validation->set_rules('event', 'Event', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$this->user_model->add_user();
			$this->thank();
		}
	}

	public function panitia(){
			$this->user_model->panitia();
			$this->thank_panitia();
	}
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_email' => '',
		'user_event'=>'',
		'status'=>'',
		'daerah'=>'',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('/home');
	}
	
	public function email_sudah_terpakai()
	{
		$email=$this->input->post('email_address');
        $result=$this->user_model->check_email_exist($email);
        if($result){
			$this->form_validation->set_message('check_email', 'Email already exist.');
			return false;
		}else{
			return true;
		}
	}
	public function check_email()
	{
		$email=$this->input->post('email_address');
        $result=$this->user_model->check_email_exist($email);
        if($result){
			return false;
        }else{	
			return true;
        }
	}
	
	public function goto_dashboard()
	{
		$ev=$this->session->userdata('user_event');
		if($ev=='NPC'){
			redirect('/dashboard/npc');
		}
		else if($ev=='NLC'){
			redirect('/dashboard/nlc');
		}else if($ev=='NST'){
			redirect('/dashboard/nst');
		}	
	}
}
?>