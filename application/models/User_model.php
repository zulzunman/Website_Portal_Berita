<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model{
	
    public function read()
    {
        $query=$this->db->get('user');
        return $query->result();
    }
    
    public function simpan_data(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$gender = $this->input->post('gender');
		$tipe = $this->input->post('tipe');
		
			$data = array(
				'nik' => $nik,
				'password' => password_hash($nik, PASSWORD_DEFAULT),
				'nama' => $nama,
				'no_hp' => $no_hp,
				'alamat' => $alamat,
				'gender' => $gender,
				'tipe' => $tipe
			);
			$this->db->insert('user',$data);
		// }
	}
	
    public function read_by($nik)
    {
        $this->db->where('nik',$nik);
        $query=$this->db->get('user');
        return $query->row();
    }

    public function update_data($nik){
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$gender = $this->input->post('gender');
		$tipe = $this->input->post('tipe');
		
		$data = array(
			'nama' => $nama,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'gender' => $gender,
			'tipe' => $tipe
		);
		$this->db->where('nik',$nik);
		$this->db->update('user',$data);
	}
	public function delete_data($nik){
        $this->db->select('foto');
        $this->db->where('nik', $nik);
        $query = $this->db->get('user');
        $old_image = $query->row('foto');
        if ($old_image != 'default.png') {
            unlink(FCPATH . 'uploads/users/' . $old_image); // hapus foto lama
        }
		$this->db->where('nik',$nik);
		$this->db->delete('user');
		return true;
	}
	public function reset($nik)
    {
        $this->db->set('password', password_hash($nik, PASSWORD_DEFAULT));
        $this->db->where('nik',$nik);
        $this->db->update('user');
    }
}
?>