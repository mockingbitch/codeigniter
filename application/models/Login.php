<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Login extends CI_Model{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function login($username,$password){
			$this->db->where('username',$username); //trỏ đến database
			$this->db->where('password',$password); //$this->db->where == SELECT * FROM tbl WHERE password ='$password'
			$count = $this->db->get('tbl_user')->num_rows(); // get == SELECT all
			return $count;
		}
	}
?>
