<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class webModel extends CI_model {

	public function getAllMenu()
	{
		return $this->db->query("SELECT * FROM t_menu");
	}
	
	public function getInformationByKategori($key){
		$data="SELECT nama_kategori, keterangan_kategori, ti.id_informasi, judul_informasi, keterangan_informasi, informasi_parent, jenis_detail, informasi_detail
		FROM t_informasi_kategori tik INNER JOIN t_informasi ti ON ti.id_informasi_kategori = tik.id_informasi_kategori INNER JOIN t_informasi_detail tid ON tid.id_informasi = ti.id_informasi WHERE tik.id_informasi_kategori = $key ORDER BY ti.id_informasi ASC";
		return $this->db->query($data);

	}

	public function getdata($key)
	{
		$this->db->where('id_file_sip',$key);
		$hasil = $this->db->get('t_file_sip');
		return $hasil;
	}
	
	public function getdata2($key)
	{
		$this->db->where('judul_file_sip',$key);
		$hasil = $this->db->get('t_file_sip');
		return $hasil;
	}

	public function tambah_data($data)
	{
		$this->db->insert('t_file_sip',$data);
	}

	public function update_data($key, $data)
	{
		$this->db->where('judul_file_sip', $key);
		$this->db->update('t_file_sip', $data);
	}

	public function hapus_data($key, $data)
	{
		$this->db->where('id_file_sip', $key);
		$this->db->delete('t_file_sip', $data);
	}





	public function lihat_data()
	{
		$data="SELECT t_file_sip.id_file_sip,
		t_file_sip.judul_file_sip,
		t_kategori_user_sip.kategori_user_sip
		FROM t_file_sip, t_kategori_user_sip
		WHERE t_kategori_user_sip.id_kategori_user_sip = t_file_sip.id_kategori_user_sip";
		return $this->db->query($data);

	}




	public function getdata_user_sip($key)
	{
		$this->db->where('id_user_sip',$key);
		$hasil = $this->db->get('sip_user');
		return $hasil;
	}
	
	public function getdata2_sip($key)
	{
		$data="SELECT sip_user.id_user_sip,
		sip_user.kategori_user,
		sip_user.username,
		sip_user.password,
		sip_user.nama_user_sip,
		sip_user.foto_user_sip,
		t_kategori_user_sip.kategori_user_sip
		FROM sip_user, t_kategori_user_sip
		WHERE sip_user.id_user_sip = '$key' AND t_kategori_user_sip.id_kategori_user_sip = sip_user.kategori_user";
		return $this->db->query($data);
	}

	public function tambah_data_sip($data)
	{
		$this->db->insert('sip_user',$data);
	}

	public function update_data_sip($key, $data)
	{
		$this->db->where('judul_file_sip', $key);
		$this->db->update('t_file_sip', $data);
	}

	public function hapus_data_sip($key, $data)
	{
		$this->db->where('id_user_sip', $key);
		$this->db->delete('sip_user', $data);
	}





	public function lihat_data_sip()
	{
		$data="SELECT * FROM t_file_sip";
		return $this->db->query($data);
	}




} 


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */