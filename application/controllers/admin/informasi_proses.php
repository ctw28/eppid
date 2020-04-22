<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_proses extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('adminModel');
 
	}

	public function index()
	{
		$data['nama_menu'] = $this->input->post('inputNamaMenu');
		$data['keterangan_menu'] = $this->input->post('inputKeteranganMenu');
		$data['menu_seo'] = $this->input->post('inputMenuSeo');
		if($this->input->post('inputParentMenu')=='')
			$data['parent_menu'] = NULL;
		else
			$data['parent_menu'] = $this->input->post('inputParentMenu');

		$this->adminModel->insertData('t_menu', $data);
		redirect('admin/informasi/kategori');

	}

}