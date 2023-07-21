<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileD extends CI_Controller {

	public function index()
	{
		$this->load->view('beranda');
	}
	public function profile()
	{
		$this->load->model('Admin_model');
		$data['personil'] = $this->Admin_model->readp();
		$this->load->view('profile/profile',$data);
	}
	public function sejarah()
	{
		$this->load->view('profile/sejarah');
	}
	public function status_masyarakat()
	{
		$this->load->view('profile/status_masyarakat');
	}
	public function wilayah()
	{
		$this->load->view('profile/wilayah');
	}
	public function statistik()
	{
		$this->load->view('profile/statistik');
	}
}
