<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminModel extends CI_model {
	
	public function showData($table, $limit=0, $parent_menu=TRUE)
	{
		$this->db->limit($limit);
		$this->db->where('parent_menu', NULL, $parent_menu);
		return$this->db->get($table);		 
	}
	public function showSubKategori()
	{
		$query = "SELECT * FROM t_menu INNER JOIN t_informasi ON t_menu.id_menu = t_informasi.id_menu WHERE parent_menu IS NOT NULL AND informasi_parent IS NULL";
		return $this->db->query($query);		 
	}
 
	public function insertData($table, $data)
	{
		$this->db->insert($table,$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function kategoriUpdate($key, $data)
	{
		$this->db->where('judul_file_sip', $key);
		$this->db->update('t_file_sip', $data);
	}

	public function kategoriDelete($key, $data)
	{
		$this->db->where('id_user_sip', $key);
		$this->db->delete('sip_user', $data);
	}





} 


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */