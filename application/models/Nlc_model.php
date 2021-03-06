<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Nlc_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
	public function show_informasi(){
		return $this->db->query("select * from informasi_nlc");
	}

	public function bukti_pendaftaran($email){
		$mail=$email;
		$daerah = $this->session->userdata('daerah');
		if($daerah=='Jakarta'){
			return $this->db->query("call cetak_jakarta('$mail')");
		}else if($daerah=='Solo'){
			return $this->db->query("call cetak_solo('$mail')");
		}else if($daerah=='Madiun'){
			return $this->db->query("call cetak_madiun('$mail')");
		}else if($daerah=='Surabaya'){
			return $this->db->query("call cetak_surabaya('$mail')");
		}else if($daerah=='Malang'){
			return $this->db->query("call cetak_malang('$mail')");
		}else if($daerah=='Kediri'){
			return $this->db->query("call cetak_kediri('$mail')");
		}else if($daerah=='Tulungagung'){
			return $this->db->query("call cetak_tulungagung('$mail')");
		}else if($daerah=='Jember'){
			return $this->db->query("call cetak_jember('$mail')");
		}else if($daerah=='Denpasar'){
			return $this->db->query("call cetak_denpasar('$mail')");
		}else if($daerah=='Sumbawa'){
			return $this->db->query("call cetak_sumbawa('$mail')");
		}else if($daerah=='Online'){
			return $this->db->query("call cetak_online('$mail')");
		}
	}
    
    public function tambahdata(){
		//variabel global
		$hasil='';
		
		//set data ke variabel
		$email = $this->session->userdata('user_email');
		$nama_kelompok = $this->input->post('nama_kelompok');
		$nama_ketua = $this->input->post('nama_ketua');
		$email_ketua = $this->input->post('email_ketua');
		$nama_anggota_1 = $this->input->post('nama_anggota_1');
		$nama_anggota_2 = $this->input->post('nama_anggota_2');
		$no_hp_ketua = $this->input->post('no_hp_ketua');
		$no_hp_anggota_1 = $this->input->post('no_hp_1');
		$no_hp_anggota_2 = $this->input->post('no_hp_2');
		$nama_sekolah = $this->input->post('asal_sekolah');
		$alamat_sekolah = $this->input->post('nama_jalan');
		$tempat_seleksi = $this->input->post('tempat_seleksi');
		$kota = $this->input->post('nama_kota');
		$provinsi = $this->input->post('nama_provinsi');
		
		if($tempat_seleksi=='0'){
		$hasil = $this->db->query("call dashboard_nlc_online('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
			
		}else if($tempat_seleksi=='1'){
		$hasil = $this->db->query("call dashboard_nlc_jakarta('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
					
		}else if($tempat_seleksi=='2'){
		$hasil = $this->db->query("call dashboard_nlc_solo('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
			
		}else if($tempat_seleksi=='3'){
		$hasil = $this->db->query("call dashboard_nlc_madiun('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
			
		}else if($tempat_seleksi=='4'){
		$hasil = $this->db->query("call dashboard_nlc_surabaya('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
			
		}else if($tempat_seleksi=='5'){
		$hasil = $this->db->query("call dashboard_nlc_malang('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
					
		}else if($tempat_seleksi=='6'){
		$hasil = $this->db->query("call dashboard_nlc_kediri('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
			
		}else if($tempat_seleksi=='7'){
		$hasil = $this->db->query("call dashboard_nlc_tulungagung('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
			
		}else if($tempat_seleksi=='8'){
		$hasil = $this->db->query("call dashboard_nlc_jember('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
			
		}else if($tempat_seleksi=='9'){
		$hasil = $this->db->query("call dashboard_nlc_denpasar('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
			
		}else if($tempat_seleksi=='10'){
		$hasil = $this->db->query("call dashboard_nlc_sumbawa('$email','$nama_kelompok','$nama_ketua','$email_ketua','$nama_anggota_1','$nama_anggota_2','$no_hp_ketua','$no_hp_anggota_1','$no_hp_anggota_2','$nama_sekolah','$alamat_sekolah','$tempat_seleksi','$kota','$provinsi')");
		
		}
		
				
		foreach ($hasil->result() as $row)
				{
				   $id_tim = $row->id_tim;
				}
				
		$config['upload_path']          = './uploads/' . $tempat_seleksi;
		$config['file_name']			= $id_tim;
		$config['allowed_types']        = 'jpg';
		$config['overwrite']       		= TRUE;
		$config['max_size']             = 2000;
		$config['min_width']            = 200;
		$config['min_height']           = 200;
		$config['max_width']            = 2000;
		$config['max_height']           = 2000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('dashboard/nlc',$error);
				$this->load->view('footer');
		}
		else
		{
				$this->load->view('user/tunggu_validasi');
				$this->load->view('footer');
				$data = array('upload_data' => $this->upload->data());
		}
    }
}

