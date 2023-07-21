<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transparasi extends CI_Controller {

	public function index()
	{
		$this->load->view('beranda');
	}
    public function anggaran()
	{
		$this->load->model('Admin_model');
		$data['anggaran'] = $this->Admin_model->reada();
		$data['masuk'] = $this->Admin_model->tmasuk();
		$data['keluar'] = $this->Admin_model->tkeluar();
		$data['saldo'] = $data['masuk'] - $data['keluar'];
		$this->load->view('transparasi/anggaran',$data);
	
	}
	
    public function keamanan()
	{
		$this->load->view('transparasi/keamanan');
	}
}
