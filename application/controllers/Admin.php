<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index()
	{
		if($this->session->userdata('tipe')=='') redirect('welcome');
		$this->load->view('admin/dashboard');
	}

	// Berita
	public function readb()
	{
		if($this->session->userdata('tipe')=='') redirect('welcome'); 
		$data['berita'] = $this->Admin_model->readb();
		$this->load->view('admin/berita/list_berita',$data);
	}
	public function addb()
	{
		if($this->session->userdata('tipe')!='Author') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->createb();
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">News successfuly Saved !</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">News Saved failed !</p>');
            }
			redirect('admin/readb');
			// print_r($_POST);
		}
		$data['kategori'] = $this->Admin_model->readk();
		$this->load->view('admin/berita/form_berita',$data);
	}
	public function updateb($id)
	{
		if($this->session->userdata('tipe')!='Author') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->updateb($id);
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">News successfuly updated !</p>');
            } 
			redirect('admin/readb');
			// print_r($_POST);
		}
		$data['berita'] = $this->Admin_model->read_by($id);
		$data['kategori'] = $this->Admin_model->readk();
		$this->load->view('admin/berita/form_berita',$data);
	}
	public function delb($id)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->Admin_model->read_by($id);
		$this->Admin_model->delb($id);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">News successfuly deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">News deleted failed !</p>');
		}
		redirect('admin/readb');
	}
	public function utama($id)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->Admin_model->read_by($id);
		$this->Admin_model->utama($id);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">Sukses menjadi berita utama !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Gagal menjadi berita utama !</p>');
		}
		redirect('admin/readb');
	}
	public function popular($id)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->Admin_model->read_by($id);
		$this->Admin_model->popular($id);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">Sukses menjadi berita popular !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Gagal menjadi berita popular !</p>');
		}
		redirect('admin/readb');
	}
	public function gutama($id)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->Admin_model->read_by($id);
		$this->Admin_model->gutama($id);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">Berita sudah bukan berita utama !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Berita masih berita utama !</p>');
		}
		redirect('admin/readb');
	}
	public function gpopular($id)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->Admin_model->read_by($id);
		$this->Admin_model->gpopular($id);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">Berita sudah bukan berita popular !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Berita masih berita popular !</p>');
		}
		redirect('admin/readb');
	}

	// Kategori
	public function readk()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$data['kategori'] = $this->Admin_model->readk();
		$this->load->view('admin/kategori/kategori',$data);
	}
	public function addk()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->createk();
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">Kategori successfuly saved !</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Kategori saved failed !</p>');
            }
			redirect('admin/readk');
			// print_r($_POST);
		}
		$this->load->view('admin/kategori/form_kategori');
	}
	public function updatek($id_kat)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->updatek($id_kat);
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">Kategori successfuly updated !</p>');
            } 
			redirect('admin/readk');
			// print_r($_POST);
		}
		$data['kategori'] = $this->Admin_model->read_byk($id_kat);
		$this->load->view('admin/kategori/form_kategori',$data);
	}
	public function delk($id_kat)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->Admin_model->read_byk($id_kat);
		$this->Admin_model->delk($id_kat);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">Kategori successfuly deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Kategori deleted failed !</p>');
		}
		redirect('admin/readk');
	}

	// Anggaran
	public function reada()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$data['anggaran'] = $this->Admin_model->reada();
		$data['masuk'] = $this->Admin_model->tmasuk();
		$data['keluar'] = $this->Admin_model->tkeluar();
		$data['saldo'] = $data['masuk'] - $data['keluar'];
		$this->load->view('admin/anggaran/anggaran',$data);
	}
	public function addam()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->createam();
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">Anggaran successfuly saved !</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Anggaran saved failed !</p>');
            }
			redirect('admin/reada');
			// print_r($_POST);
		}
		$this->load->view('admin/anggaran/form_anggaran');
	}
	public function updateam($ida)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->updateam($ida);
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">Anggaran successfuly updated !</p>');
            } 
			redirect('admin/reada');
			// print_r($_POST);
		}
		$data['anggaran'] = $this->Admin_model->read_bya($ida);
		$this->load->view('admin/anggaran/form_anggaran',$data);
	}
	public function addak()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->createak();
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">Anggaran successfuly saved !</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Anggaran saved failed !</p>');
            }
			redirect('admin/reada');
			// print_r($_POST);
		}
		$this->load->view('admin/anggaran/form_anggaran');
	}
	public function updateak($ida)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->updateak($ida);
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">Anggaran successfuly updated !</p>');
            } 
			redirect('admin/reada');
			// print_r($_POST);
		}
		$data['anggaran'] = $this->Admin_model->read_bya($ida);
		$this->load->view('admin/anggaran/form_anggaran',$data);
	}
	public function dela($ida)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->Admin_model->read_bya($ida);
		$this->Admin_model->dela($ida);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">Anggaran successfuly deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Anggaran deleted failed !</p>');
		}
		redirect('admin/reada');
	}
	
	// Personil
	public function readp()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$data['personil'] = $this->Admin_model->readp();
		$this->load->view('admin/personil/personil',$data);
	}
	public function addp()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->createp();
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">personil successfuly saved !</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">personil saved failed !</p>');
            }
			redirect('admin/readp');
			// print_r($_POST);
		}
		$this->load->view('admin/personil/form_personil');
	}
	public function updatep($idp)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			$this->Admin_model->updatep($idp);
			if($this->db->affected_rows() > 0) { 
                $this->session->set_flashdata('msg','<p style="color:green">personil successfuly updated !</p>');
            } 
			redirect('admin/readp');
			// print_r($_POST);
		}
		$data['personil'] = $this->Admin_model->read_byp($idp);
		$this->load->view('admin/personil/form_personil',$data);
	}
	public function delp($idp)
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->Admin_model->read_byp($idp);
		$this->Admin_model->delp($idp);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">personil successfuly deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">personil deleted failed !</p>');
		}
		redirect('admin/readp');
	}
}
