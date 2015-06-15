<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nlc extends CI_Controller {
	public function index()
	{
		$this->load->view('event/nlc');
		$this->load->view('footer');
	}
	
	public function quiz()
	{
		$this->load->view('quis/soal');
		$this->load->view('footer');
	}
	
	public function result()
	{
		if(($this->input->post('check'))=='cek'){
		$answer1=$this->input->post('question-1-answers');
		$answer2=$this->input->post('question-2-answers');
		$answer3=$this->input->post('question-3-answers');
		$answer4=$this->input->post('question-4-answers');
		$answer5=$this->input->post('question-5-answers');
		$answer6=$this->input->post('question-6-answers');
		$answer7=$this->input->post('question-7-answers');
		$answer8=$this->input->post('question-8-answers');
		$answer9=$this->input->post('question-9-answers');
		$answer10=$this->input->post('question-10-answers');
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            if ($answer6 == "C") { $totalCorrect++; }
            if ($answer7 == "C") { $totalCorrect++; }
            if ($answer8 == "B") { $totalCorrect++; }
            if ($answer9 == "D") { $totalCorrect++; }
            if ($answer10 == "E"){ $totalCorrect++;}
			$data['skor']= $totalCorrect;
			$this->load->view('quis/result',$data);
			$this->load->view('footer');
	}else{
		redirect('/nlc/quiz');}
			
			
	}
}
