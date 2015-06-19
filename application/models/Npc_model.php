<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Npc_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
	public function show_informasi(){
		return $this->db->query("select * from informasi_npc");
	}
	
	public function bukti_pendaftaran($email){
		$mail=$email;
		return $this->db->query("call cetak_npc('$mail')");
	}

    public function tambahdata(){
		//variabel global
		$hasil='';
		
		$nama_ketua = $this->input->post('nama_ketua');
		$email_ketua = $this->session->userdata('user_email');
		$no_hp = $this->input->post('no_hp_ketua');
		$fb_ketua = $this->input->post('fb_ketua');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$nama_jalan = $this->input->post('nama_jalan');
		$nama_kota = $this->input->post('nama_kota');
		$nama_provinsi = $this->input->post('nama_provinsi');
		
		$hasil = $this->db->query("call dashboard_npc('$nama_ketua', '$email_ketua', '$no_hp', '$fb_ketua', '$asal_sekolah', '$nama_jalan', '$nama_kota', '$nama_provinsi')");
		
		foreach ($hasil->result() as $row)
				{
				   $id_tim = $row->id_tim;
				}
		$config['upload_path']          = './uploads/npc';
		$config['allowed_types']        = 'jpg';
		$config['file_name']			= $id_tim;
		$config['overwrite']       		= TRUE;
		$config['min_width']            = 500;
		$config['min_height']           = 500;
		$config['max_size']             = 2000;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('dashboard/npc',$error);
		}
		else
		{				
				$data = array('upload_data' => $this->upload->data());
				$this->load->view('user/tunggu_validasi');
		}
    }
	
}

