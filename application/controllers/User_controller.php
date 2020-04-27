<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('users/layout/header');
		$this->load->view('users/index');
		$this->load->view('users/layout/footer');
	}

	public function sign_up() {
		$this->load->view('users/layout/header');
		$this->load->view('users/sign_up');
		$this->load->view('users/layout/footer');
	}
}
