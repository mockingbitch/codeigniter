<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
	public function index(){
		$this->load->view('loginview');
	}
    public function login(){
        $this->load->view('loginview'); //trả về vỉew
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password =md5($password);
		$this->load->model('Login'); //gọi model
		$count = $this->Login->login($username,$password); //gửi data đến model
		if ($count == '1'){
//			$this->load->view('dashboard');
			echo 'Success';
		}
		else{
			echo 'Fail';
		}
    }
}
?>
