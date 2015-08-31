<?php 
	class Subscriber_model extends MY_Model{

		public function __construct(){
			parent::__construct();
		}

		public function setUserData($data){

			$this->db->insert('subscribers',$data);
		}

		public function getSubsData(){
			$this->db->select('*')->from('subscribers');
			return $this->db->get()->result_array();

		}
	}