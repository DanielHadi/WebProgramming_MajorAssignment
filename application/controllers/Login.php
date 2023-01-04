<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
		$this->load->model('M_user');
    }

	public function index()
	{
		$this->load->view('V_login');
	}

	public function cekLogin()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		if ($this->M_user->getDataUser($data)){
			$this->session->set_userdata('username',$data['username']);
			redirect('/');
		} else {
			$data['error'] = 'Username atau password salah';
			$this->load->view('V_login',$data);
		}
	}
	public function SignOut()
	{
		

		
			$this->session->unset_userdata('username');
			redirect('/');
		
	}
}
