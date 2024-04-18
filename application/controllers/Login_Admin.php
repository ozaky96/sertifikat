<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
	}

	public function index()
	{
		$this->load->view('vw_login_admin');
	}

	public function login()
	{
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);

		$level_check = $this->db->get_where('users', ['username' => $username])->row_array();
		$user = $this->db->get_where('users', ['username' => $username]);

		if ($user->num_rows() > 0) {

			$hasil = $user->row();

			if ($level_check['level'] == 'admin'){

				if (password_verify($password, $hasil->password)) {

					$this->session->set_userdata('id', $hasil->id);
					$this->session->set_userdata('email', TRUE);
					$this->session->set_userdata('username', $hasil->username);
					$this->session->set_userdata('user_id', $hasil->user_id);
					redirect('home2');
					
				} else {

					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
					redirect('login_admin');
				}

			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User only!</div>');
				redirect('login_admin');
			}

		} else {

			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
			redirect('login_admin');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}

}