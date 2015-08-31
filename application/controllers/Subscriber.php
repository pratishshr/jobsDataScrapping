<?php
	class Subscriber extends MY_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('subscriber_model');
			$this->load->library('curl');
		}

		public function sendMail(){
			$alldata = $this->subscriber_model->getSubsData();
		 	
		 	$this->load->library('email');
		 	
		 	$config['protocol'] = 'smtp';
		 	$config['smtp_host'] = 'smtp.wlink.com.np';
		 	$config['smtp_port'] = '25';
		 	
		 	$this->email->initialize($config);
		 	
		 	foreach($alldata as $data){

		 		
		 		
		 		$this->email->from('test@test.com');
		 		$this->email->to($data['email']);
		 		$this->email->subject('JobKhoj Newsletter');
		 		$this->email->message($data['keyword']);
		 		$this->email->send();
		 		$this->email->clear();



		 	}
		
		 	echo "Emails sent";
		}


	}
