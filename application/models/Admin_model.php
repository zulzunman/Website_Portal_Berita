<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
    // Berita
	public function readb()
	{
		$query = $this->db->get('berita');
		return $query->result();
	}
    public function read_by($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('berita');
        return $query->row();
    }
	public function createb()
	{
        $judul = $this->input->post('judul');
        $author = $this->input->post('author');
        $tipe = $this->input->post('tipe');
        $kategori = $this->input->post('kategori');
        $konten = $this->input->post('konten');

        $ikat = implode(',',$kategori);

        $config['upload_path']  = './uploads/berita/';
		$config['allowed_types']  = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
		$config['max_size']  = 5000;
		$config['max_width']  = 4096;
		$config['max_height']  = 4096;

		$this->load->library('upload',$config);

        if (!$this->upload->do_upload('gambar'))
        {
            $error = $this->upload->display_errors();
            $data['error'] = $error;
        }
        else
        {
            // Mendapatkan informasi file yang diupload
            $upload_data = $this->upload->data();

            // Menyimpan data ke dalam database
            $data = array (
                'judul' => $judul,
                'kategori' => $ikat,
                'gambar' => $upload_data['file_name'],
                'konten' => $konten,
                'author' => $author
            );
            $this->db->insert('berita',$data);
        }
	}
	public function updateb($id)
    {
        $this->db->select('gambar');
        $this->db->where('id', $id);
        $query = $this->db->get('berita');
        $old_image = $query->row('gambar');

        $judul = $this->input->post('judul');
        $author = $this->input->post('author');
        $tipe = $this->input->post('tipe');
        $kategori = $this->input->post('kategori');
        $konten = $this->input->post('konten');

        $ikat = implode(',', $kategori);

        $config['upload_path'] = FCPATH . 'uploads/berita/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
        $config['max_size'] = 5000;
        $config['max_width'] = 4096;
        $config['max_height'] = 4096;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $upload_data = $old_image;
        } else {
            // Mendapatkan informasi file yang diupload
            $upload_data = $this->upload->data();
            if ($old_image != 'default.png') {
                unlink($config['upload_path'] . $old_image); // hapus foto lama
            }
        }
        // Menyimpan data ke dalam database
        $data = array(
            'judul' => $judul,
            'kategori' => $ikat,
            'gambar' => $upload_data['file_name'],
            'konten' => $konten,
            'author' => $author
        );
        $this->db->where('id', $id);
        $this->db->update('berita', $data);
        return true;
    }
    public function utama($id)
    {
        $data = array (
            'utama' => 1
        );
		$this->db->where('id',$id);
		$this->db->update('berita', $data);
		return true;
	} 
    public function popular($id)
    {
        $data = array (
            'popular' => 1
        );
		$this->db->where('id',$id);
		$this->db->update('berita', $data);
		return true;
	} 
    public function gutama($id)
    {
        $data = array (
            'utama' => 0
        );
		$this->db->where('id',$id);
		$this->db->update('berita', $data);
		return true;
	} 
    public function gpopular($id)
    {
        $data = array (
            'popular' => 0
        );
		$this->db->where('id',$id);
		$this->db->update('berita', $data);
		return true;
	} 
	public function delb($id)
    {
        $this->db->select('gambar');
        $this->db->where('id', $id);
        $query = $this->db->get('berita');
        $old_image = $query->row('gambar');
        if ($old_image != 'default.png') {
            unlink(FCPATH . 'uploads/berita/' . $old_image); // hapus foto lama
        }
		$this->db->where('id',$id);
		$this->db->delete('berita');
		return true;
	} 

    // Kategori
    public function readk()
    {
        $query = $this->db->get('kategori');
		return $query->result();
    }
    public function read_byk($id_kat)
    {
        $this->db->where('id_kat',$id_kat);
        $query=$this->db->get('kategori');
        return $query->row();
    }
    public function createk()
    {
        $nama = $this->input->post('nama');
        $jumlah = count($nama);

        for ($i=0; $i < $jumlah; $i++) {
            $data = array (
                'nama' => $nama[$i]
            );
            $this->db->insert('kategori',$data);
        }
    }
    public function updatek($id_kat)
    {
        $nama = $this->input->post('nama');
        $i=0;
        $data = array (
            'nama' => $nama[$i]
        );

		$this->db->where('id_kat',$id_kat);
		$this->db->update('kategori',$data);
		return true;
	} 
	public function delk($id_kat)
    {
		$this->db->where('id_kat',$id_kat);
		$this->db->delete('kategori');
		return true;
	} 

    // Anggaran
    public function reada()
    {
        $query = $this->db->get('anggaran');
		return $query->result();
    }
    public function read_bya($ida)
    {
        $this->db->where('ida',$ida);
        $query=$this->db->get('anggaran');
        return $query->row();
    }
    public function createam()
    {
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $num = count($nama);

        for ($i=0; $i < $num; $i++) {
            $rupiah = $jumlah[$i];
            $data = array (
                'nama' => $nama[$i],
                'tipe' => 'Pemasukan',
                'jumlah' => (int)str_replace([',', '.'], '', $rupiah)
                //'jumlah' => $jumlah[$i]
            );
            $this->db->insert('anggaran',$data);
        }
    }
    public function updateam($ida)
    {
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $i=0;
        $rupiah = $jumlah[$i];

        $data = array (
            'nama' => $nama[$i],
            'tipe' => 'Pemasukan',
            'jumlah' => (int)str_replace([',', '.'], '', $rupiah)
            //'jumlah' => $jumlah[$i]
        );
		$this->db->where('ida',$ida);
		$this->db->update('anggaran',$data);
		return true;
	} 
    public function createak()
    {
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $num = count($nama);

        for ($i=0; $i < $num; $i++) {
            $rupiah = $jumlah[$i];
            $data = array (
                'nama' => $nama[$i],
                'tipe' => 'Pengeluaran',
                'jumlah' => (int)str_replace([',', '.'], '', $rupiah)
                //'jumlah' => $jumlah[$i]
            );
            $this->db->insert('anggaran',$data);
        }
    }
    public function updateak($ida)
    {
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $i=0;
        $rupiah = $jumlah[$i];

        $data = array (
            'nama' => $nama[$i],
            'tipe' => 'Pengeluaran',
            'jumlah' => (int)str_replace([',', '.'], '', $rupiah)
            //'jumlah' => $jumlah[$i]
        );
		$this->db->where('ida',$ida);
		$this->db->update('anggaran',$data);
		return true;
	} 
	public function dela($ida)
    {
		$this->db->where('ida',$ida);
		$this->db->delete('anggaran');
		return true;
	} 
    public function tmasuk()
    {
        $this->db->where('tipe','Pemasukan');
        $this->db->select_sum('jumlah');
        $query=$this->db->get('anggaran');
        return $query->row()->jumlah; 
    }
    public function tkeluar()
    {
        $this->db->where('tipe','Pengeluaran');
        $this->db->select_sum('jumlah');
        $query=$this->db->get('anggaran');
        return $query->row()->jumlah; 
    }

    // Personil
    public function readp()
    {
        $query = $this->db->get('personil');
		return $query->result();
    }
    public function read_byp($idp)
    {
        $this->db->where('idp',$idp);
        $query=$this->db->get('personil');
        return $query->row();
    }
    public function createp()
    {
        $jabatan = $this->input->post('jabatan');
        $nama = $this->input->post('nama');
        $pangkat = $this->input->post('pangkat');
        $nip = $this->input->post('nip');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        
        $data = array (
            'jabatan' => $jabatan,
            'nama' => $nama,
            'pangkat' => $pangkat,
            'nip' => $nip,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'jenis_kelamin' => $jenis_kelamin,
        );
        $this->db->insert('personil',$data);
    }
    public function updatep($idp)
    {
        $jabatan = $this->input->post('jabatan');
        $nama = $this->input->post('nama');
        $pangkat = $this->input->post('pangkat');
        $nip = $this->input->post('nip');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        
        $data = array (
            'jabatan' => $jabatan,
            'nama' => $nama,
            'pangkat' => $pangkat,
            'nip' => $nip,
            'pendidikan_terakhir' => $pendidikan_terakhir,
            'jenis_kelamin' => $jenis_kelamin,
        );
		$this->db->where('idp',$idp);
		$this->db->update('personil',$data);
		return true;
	} 
	public function delp($idp)
    {
		$this->db->where('idp',$idp);
		$this->db->delete('personil');
		return true;
	} 
}