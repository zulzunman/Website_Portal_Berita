
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$data['user'] = $this->User_model->read();
		$this->load->view('admin/user/user', $data);
	}
	public function simpan_data()
	{
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		if ($this->input->post('submit')) {
			if (count($this->db->where('nik', $this->input->post('nik'))->get('user')->result()) > 0) {
				echo"<script>alert('NIK SUDAH TERINPUT!');history.go(-1);</script>";
				return;
			}
			else {
				if($this->db->affected_rows() > 0) { 
					$this->session->set_flashdata('msg','<p style="color:red">User saved failed !</p>');
				} else {
					$this->session->set_flashdata('msg','<p style="color:green">User successfuly saved !</p>');
				}
				$this->User_model->simpan_data();
				redirect('user');
			}
			// print_r($_POST);
		}
		$this->load->view('admin/user/add_user');
	}
	public function update_data($nik)
	{
		if($this->session->userdata('nik')!=$nik) redirect('welcome');
		if ($this->input->post('submit')) {
			$this->User_model->update_data($nik);
			if($this->db->affected_rows() > 0) { 
				$this->session->set_flashdata('msg','<p style="color:green">User successfuly updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">User updated failed !</p>');
            }
			if($this->session->userdata('tipe')!='Admin') redirect('admin'); 
			if($this->session->userdata('tipe')=='Admin') redirect('user'); 
		}
        $data['user']=$this->User_model->read_by($nik);
		$this->load->view('admin/user/add_user', $data);
	}
	public function delete($nik){
		if($this->session->userdata('tipe')!='Admin') redirect('welcome'); 
		$this->User_model->read_by($nik);
		$this->User_model->delete_data($nik);
		if($this->db->affected_rows() > 0) { 
			$this->session->set_flashdata('msg','<p style="color:green">User successfuly Deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">User delete failed !</p>');
		}
		redirect('user');
	}
	public function reset($nik)
    {
        $this->User_model->reset($nik);
        if($this->db->affected_rows() > 0) { 
            $this->session->set_flashdata('msg','<p style="color:green">User successfuly Reset Password !</p>');
        } else {
            $this->session->set_flashdata('msg','<p style="color:red"> Reset Password User failed !</p>');
        }
        redirect('user');
    }
}
?>