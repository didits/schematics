<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('nlc_model');
		$this->load->model('npc_model');
	}
	
	public function bukti_pendaftaran()
	{
		$email= $this->session->userdata('user_email');
		$data['h'] = $this->nlc_model->bukti_pendaftaran($email);
		$this->load->view('pdf', $data);
	}

	public function bukti_pendaftaran_npc()
	{
		$email= $this->session->userdata('user_email');
		$data['h'] = $this->npc_model->bukti_pendaftaran($email);
		$this->load->view('pdf_npc', $data);
	}
	
	public function nlc()
	{
		if($this->session->userdata('user_email')!=''){
		if($this->session->userdata('status')=='t'){
			$data['h'] = $this->nlc_model->show_informasi();
			$this->load->view('dashboard/info_nlc', $data);
		}else if($this->session->userdata('status')=='f'){
			$this->load->view('user/tunggu_validasi');
			$this->load->view('footer');
		}else {$this->load->view('dashboard/nlc',array('error' => ' ' ));
		$this->load->view('footer');}}
		else redirect('/login');
	}
	
	public function tambahnlc()
	{
		$this->load->helper('security');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_kelompok', 'Nama Kelompok', 'trim|required|min_length[4]|xss_clean|max_length[32]');
		$this->form_validation->set_rules('email_ketua', 'Email Ketua', 'trim|required|valid_email');
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'trim|required|min_length[4]|max_length[100]');
		$this->form_validation->set_rules('nama_jalan', 'Jalan Sekolah', 'trim|required|min_length[4]|max_length[200]');
		$this->form_validation->set_rules('nama_kota', 'Kota', 'trim|required|min_length[4]|max_length[200]');
		$this->form_validation->set_rules('nama_provinsi', 'Provinsi', 'trim|required|min_length[4]|max_length[200]');
		$this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'trim|required|min_length[4]|max_length[50]|regex_match[/^[a-zA-Z .]{4,50}$/]');
		$this->form_validation->set_rules('no_hp_ketua', 'Nomor HP Ketua', 'trim|required|min_length[4]|max_length[20]|regex_match[/^[0-9]{4,20}$/]');
		$this->form_validation->set_rules('nama_anggota_1', 'Nama Anggota 1', 'trim|min_length[4]|max_length[50]|regex_match[/^[a-zA-Z .]{4,50}$/]');
		$this->form_validation->set_rules('no_hp_1', 'Nomor HP Anggota 1', 'trim|min_length[4]|max_length[20]|regex_match[/^[0-9]{4,20}$/]');
		$this->form_validation->set_rules('nama_anggota_2', 'Nama Anggota 2', 'trim|min_length[4]|max_length[50]|regex_match[/^[a-zA-Z .]{4,50}$/]');
		$this->form_validation->set_rules('no_hp_2', 'Nomor HP Anggota 2', 'trim|min_length[4]|max_length[20]|regex_match[/^[0-9]{4,20}$/]');

		if($this->form_validation->run() == FALSE){
			$this->nlc();
		}else{
			$this->nlc_model->tambahdata();
		}
	}
	
	public function npc()
	{
		if($this->session->userdata('user_email')!=''){
		if($this->session->userdata('status')=='t'){
			$data['h'] = $this->npc_model->show_informasi();
			$this->load->view('dashboard/info_npc', $data);
			}else if($this->session->userdata('status')=='f'){
			$this->load->view('user/tunggu_validasi');
			$this->load->view('footer');
		}else {$this->load->view('dashboard/npc',array('error' => ' ' ));
		$this->load->view('footer');}}
		else redirect('/login');
	}
    
	public function tambahnpc(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'trim|required|min_length[4]|max_length[100]');
	$this->form_validation->set_rules('nama_jalan', 'Jalan Sekolah', 'trim|required|min_length[4]|max_length[200]');
	$this->form_validation->set_rules('nama_kota', 'Kota', 'trim|required|min_length[4]|max_length[200]');
	$this->form_validation->set_rules('nama_provinsi', 'Provinsi', 'trim|required|min_length[4]|max_length[200]');
	
		$this->form_validation->set_rules('nama_ketua', 'Nama Ketua', 'trim|required|min_length[4]|max_length[50]|regex_match[/^[a-zA-Z .]{4,50}$/]');
		$this->form_validation->set_rules('no_hp_ketua', 'Nomor HP Ketua', 'trim|required|min_length[4]|max_length[20]|regex_match[/^[0-9]{4,20}$/]');

		if($this->form_validation->run() == FALSE){
			$this->npc();
		}else{
			$this->npc_model->tambahdata();
		}
	}
}
