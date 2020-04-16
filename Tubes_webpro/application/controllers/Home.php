<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_disease');
	}

	public function index()
	{
		$data['title'] = 'Herbal Medical';
		$data['name'] = $this->session->userdata('log');
		$data['disease'] = $this->M_disease->getDisease();
		if ($this->input->post('search')) {
			$data['disease'] = $this->M_disease->searchDisease();
		}
		$data['active'] = 'active';
		$data['active2'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('halaman_utama', $data);
		$this->load->view('templates/footer');
	}

	public function login()
	{
		$this->form_validation->set_rules('uid', 'Username', 'required|trim');
		$this->form_validation->set_rules('pwd', 'Password', 'required|trim');
		if (!$this->form_validation->run()) {
			$data['title'] = 'Login';
			$this->load->view('templates/h_login', $data);
			$this->load->view('v_login');
			$this->load->view('templates/footer');
		} else {
			$this->cek_login();
			redirect('home/index');
		}
	}

	private function clear()
	{
		$this->session->unset_userdata('log');
		$this->session->unset_userdata('arrData');
	}

	private function cek_login()
	{
		$data = $this->M_user->getData($this->input->post('uid', true));
		$pwd = $this->input->post('pwd');
		if ($data) {
			if ($pwd == $data['password']) {
				$this->clear();
				$this->session->set_userdata('log', $data['nickname']);
				$this->session->set_userdata('logUser', $data['username']);
				redirect('home');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Password is wrong</div>');
				redirect('home/login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			The Username has not activated</div>');
			redirect('home/login');
		}
	}

	public function signup()
	{
		$this->form_validation->set_rules('uid', 'Username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('pwd', 'Password', 'required|trim|min_length[3]|matches[pwd2]', ['matches' => 'Password too short']);
		$this->form_validation->set_rules('pwd2', 'Repeat Password', 'required|trim|matches[pwd]', ['matches' => 'Password too short']);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		if (!$this->form_validation->run()) {
			$data['title'] = 'Create Account';
			$this->load->view('templates/h_login', $data);
			$this->load->view('v_signup');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'username' => $this->input->post('uid', true),
				'nickname' => '',
				'password' => $this->input->post('pwd'),
				'email' => $this->input->post('email', true),
			];
			$this->M_user->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Congratulation, your account has been created. Please complate your nickname</div>');
			$this->session->set_userdata('log', $data['nickname']);
			$this->session->set_userdata('logUser', $data['username']);
			redirect('home/profile');
		}
	}
	public function profile()
	{
		$cek = $this->M_user->getData($this->session->userdata('logUser'));
		$this->session->set_userdata('arrData', $cek);
		$this->form_validation->set_rules('pwd', 'Password', 'required|trim|min_length[3]|matches[pwd2]', ['matches' => 'Password too short']);
		$this->form_validation->set_rules('pwd2', 'Repeat Password', 'required|trim|matches[pwd]', ['matches' => 'Password too short']);
		if (!$this->form_validation->run()) {
			$data['title'] = 'Profile';
			$this->load->view('templates/h_login', $data);
			$this->load->view('v_profile');
			$this->load->view('templates/footer');
		} else {
			$data = [
				'username' => $this->input->post('uid', true),
				'nickname' => $this->input->post('nick', true),
				'password' => $this->input->post('pwd'),
				'email' => $this->input->post('email', true),
			];
			$ok = $this->M_user->update($data);
			if ($ok) {
				$this->clear();
				$this->session->set_userdata('log', $data['nickname']);
				redirect('home');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Update Failed</div>');
				redirect('home/profile');
			}
		}
	}
}
