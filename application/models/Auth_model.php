<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	public function getuser($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->get('user')->row();
    }

    public function changepass()
	{
		$this->db->set('password', password_hash($this->input->post('newpassword'), PASSWORD_DEFAULT));
		$this->db->where('nik',$this->session->userdata('nik'));
		return $this->db->update('user');
	}

	public function changefoto($foto)
	{
		if($this->session->userdata('foto') != 'default.png')
			unlink('./uploads/users/'.$this->session->userdata('foto')); // hapus foto lama
		
		$this->db->set('foto', $foto);
		$this->db->where('nik',$this->session->userdata('nik'));
		return $this->db->update('user');
	}

}
