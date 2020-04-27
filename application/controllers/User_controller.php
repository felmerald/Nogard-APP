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

	public function post_register() {

		$this->load->model('user_model');

		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$phone_number = $this->input->post('phone');
		$rule = 'user';
		$profile_picture = '';
		$created_date = date();
		$modified_date = date();

		// 'YYYY-MM-DD hh:mm:ss'

		$this->user_model->add_user($firstname, $lastname, $email, $password, $phone_number, $rule, $profile_picture, $created_date, $modified_date);
	}
}
