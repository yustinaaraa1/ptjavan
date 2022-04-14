<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data['title']="LOGIN";
		$this->load->view('templates/header',$data);
		$this->load->view('Login');
		$this->load->view('templates/footer');
	}

	public function aksi()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$cek=$this->model->cek_login($username,$password);
		if ($cek==FALSE) {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Pasword/Username salah!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('login');
		}else{
			$this->session->set_userdata('role_id',$cek->role_id);
			switch ($cek->role_id) {
				case '1':redirect('weclcome');
					# code...
					break;
				
				default:
					# code...
					break;
			}

		}

			
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login/index');
	}
}

