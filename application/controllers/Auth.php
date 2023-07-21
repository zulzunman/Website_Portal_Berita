<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

    public function login(){
        if($this->input->post('login')&& $this->validation('login')){ 
            $login=$this->Auth_model->getuser($this->input->post('nik'));
            if($login != NULL) {
				if(password_verify($this->input->post('password'), $login->password)){
                    $data = array(
						'nik' => $login->nik,
						'nama' => $login->nama,
						'gender' => $login->gender,
						'tipe' => $login->tipe,
						'no_hp' => $login->no_hp,
						'alamat' => $login->alamat,
						'foto'	   => $login->foto
					);
					$this->session->set_userdata($data);
					redirect('admin');
				}
			}
			$this->session->set_flashdata('msg','<p style="color:red">Invalid nik or password!</p>');
		}
		$this->load->view('admin/auth/login');
	}

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }

	public function changefoto(){
		if(! $this->session->userdata('nik')) redirect('auth/login'); //filter login
		$data['error']='';
		if($this->input->post('upload')){ // jika upload sukses
			if($this->upload()){
				$this->Auth_model->changefoto($this->upload->data('file_name')); // ubah data foto di database
				$this->session->set_userdata('foto', $this->upload->data('file_name')); // update data session
				$this->session->set_flashdata('msg', '<p style="color:green">foto successfuly changed!</p>'); // pesan sukses
			}
			else $data['error']= $this->upload->display_errors(); // jika gagal upload
		}
        $this->load->view('admin/auth/change_foto',$data);
    }

	private function upload()
	{
		$config['upload_path'] 		= './uploads/users/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size']    		= '5000';
		$config['max_width'] 		= '2048';
		$config['max_height'] 		= '2048';

		$this->load->library('upload', $config);
		return $this->upload->do_upload('foto');
	}

    public function changepass(){
        if(! $this->session->userdata('nik')) redirect('auth/login');
		if($this->input->post('change') && $this->validation('change')){
			$change=$this->Auth_model->getuser($this->session->userdata('nik'));
			if(password_verify($this->input->post('oldpassword'), $change->password)){
				if ($this->Auth_model->changepass())
					$this->session->set_flashdata('msg','<p style="color:green">Password successfuly changed!</p>');
				else
					$this->session->set_flashdata('msg','<p style="color:red">Change password failed!</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Wrong old password!</p>');
			}
		}
		$this->load->view('admin/auth/change_pass');
    }

    public function validation($type)
	{
		$this->load->library('form_validation');

		if($type=='login'){
			$this->form_validation->set_rules('nik', 'nik', 'required');
			$this->form_validation->set_rules('password', 'PASSWORD', 'required');
		} else {
			$this->form_validation->set_rules('oldpassword', 'OLD PASSWORD', 'required');
			$this->form_validation->set_rules('newpassword', 'NEW PASSWORD', 'required');
		}

		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
	}

}