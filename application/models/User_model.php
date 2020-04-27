<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function add_user($firstname, $lastname, $email, $password, $phone_number, $rule_type, $profile_picture, $created_date, $modified_date) {

		$data = array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'email' => $email,
			'password' => $password,
			'phone_number' => $phone_number,
			'rule_type' => $rule_type,
			'profile_picture' => $profile_picture,
			'created_date' => $created_date,
			'modified_date' => $modified_date
		);

		$this->db->insert('users', $data);

		if ($this->db->affected_rows()) {
			echo json_encode(array('data'=>'success'));
		} else {
			echo json_encode(array('data'=>'failed'));
		}
	}
}