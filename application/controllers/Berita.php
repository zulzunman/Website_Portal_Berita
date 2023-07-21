<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_model');
	}
	public function index()
	{
		$data['berita'] = $this->Berita_model->read();
		$this->load->view('berita/list_berita',$data);
	}
	public function main($id)
	{
		$data['berita'] = $this->Berita_model->read();
		$data['berita'] = $this->Berita_model->read_by($id);
		$this->load->view('berita/berita',$data);
	}
}
