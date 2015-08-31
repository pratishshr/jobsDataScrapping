<?php
	class Job extends MY_Controller{

		public function __construct(){
			parent::__construct();

			$this->load->library('curl');
			$this->load->model('subscriber_model');
		}

		public function index(){
			$data['view_page'] = 'job/index';
			$this->load->view('container',$data);

		}

		public function search(){
			
			$searchkey = $this->input->post("Keywords");
					
			//JOBSNEPAL.COM
			$url = "http://www.jobsnepal.com/simple-job-search";

			$keyword =array(
						    'Keywords' => $searchkey
						  	) ;

			$content = $this->curl->post($url,$keyword);
			$content = str_replace("\n", "", $content);
			
			$job_pattern1 = '/\<a class="job-item" id="(.*?)" href="(.*?)".*?>(.*?)<\/a>/';
			$comp_pattern1 = '/<a href="(.*?)" class="joblist">(.*?)<\/a>/s';

			preg_match_all($job_pattern1, $content, $job_matches1);
		    preg_match_all($comp_pattern1, $content, $comp_matches1);

		    $data['job_matches1'] = $job_matches1;
		    $data['comp_matches1'] = $comp_matches1;

		
		    //RAMROJOB.com
		    $url2 = "http://www.ramrojob.com/search";

		    $keyword2 =array(
						    'job_title' => $searchkey,
						   'submit' => 'Find Jobs'
						  	) ;
			
			$content2 = $this->curl->post($url2,$keyword2);
			$content2 = str_replace("\n", "", $content2);
		
			$job_pattern2 = '/<h4 class="pos-title trunc">.*?<a href="(.*?)" title=".*?">(.*?)<\/a>.*?<\/h4>/';
			$comp_pattern2 = '/<div class="pos-company inblock right-spc w250 trunc">.*?<a href="(.*?)">(.*?)<\/a>.*?<\/div>/';
			
			preg_match_all($job_pattern2, $content2, $job_matches2);
			preg_match_all($comp_pattern2, $content2, $comp_matches2);	

				
			$data['job_matches2'] = $job_matches2;
			$data['comp_matches2'] = $comp_matches2;

			
			$data['keyword'] = $searchkey;


			$data['view_page'] = 'job/results';
			$this->load->view('container',$data);
		 }

		 public function contact(){
		
		 	
		 	$this->load->library('email');
		 	$config['protocol'] = 'smtp';
		 	$config['smtp_host'] = 'smtp.wlink.com.np';
		 	$config['smtp_port'] = '25';
		 	$config['mailtype'] = 'html';
		 	$this->email->initialize($config);

		 	$email = $this->input->post('email');
		 	$subject = $this->input->post('subject');
		 	$message = $this->input->post('message');
		 
		 	$this->email->from($email);
		 	$this->email->to('vanroshr@gmail.com');
		 	$this->email->subject($subject);
		 	$this->email->message($message);

		 	$this->email->send();

		 	redirect(site_url());

		 }

		 public function subscribe(){
		 	

		 	$data = array(
		 				'email' => $this->input->post('useremail'),
		 				'keyword' => $this->input->post('keyword')
		 			);
		 	$this->subscriber_model->setUserData($data);

		 	$data['view_page'] = "job/thanksub";
		 	$this->load->view("container",$data);

	
		 	
		 }

		 
	}