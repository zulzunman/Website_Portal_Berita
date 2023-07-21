<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {
	
	public function read()
	{
        $this->db->order_by('tgl_upload','desc');
		$query = $this->db->get('berita');
		return $query->result();
	}

    public function read_by($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('berita');
        return $query->row();
    }
}