<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
		$this->load->helper('string');
		$this->load->database();
    }
	
	function login($email,$password)
    {
        $query = $this->db->query("call login('$email', '$password')");    
        if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
                $newdata = array(
				'user_id' => $rows->id,
				'user_email' => $rows->email,
				'user_event' => $rows->event,
				'status' => $rows->status,
				'daerah' => $rows->daerah,
				'logged_in'  => TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
                return true;            
		}
		return false;
    }
	
	public function add_user()
	{
		$email=$this->input->post('email_address');
		$password=$this->input->post('password');
		$event=$this->input->post('event');
		$this->db->query("call buat_akun('$email', '$password', '$event')");
	}

	public function panitia()
	{
		$nrp=$this->input->post('nrp');
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$event=$this->input->post('event');
		$this->db->query("call buat_panitia('$nrp', '$nama', '$email', '$event')");
	}
	
	public function check_email_exist($email)
    {
        $this->db->where("email",$email);
        $query=$this->db->get("user");
        if($query->num_rows()>0){
            return true;
        }else{
			return false;
        }
    }
	public function halaman_berita($paging){
		$this->db->where("no",$paging);
        $query=$this->db->get("blog");
		return $query;
}
}
?>