<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('adminModel'); 
	}

	public function index()
	{
		// $this->load->view('admin/informasi-kategori-tambah');
	}
	
	public function kategori()
	{
		$data['dataKategori'] = $this->adminModel->showData('t_menu', 100);
		$this->load->view('admin/informasi-kategori-tambah', $data);
	}

	public function sub_kategori()
	{
		$data['dataSubKategori'] = $this->adminModel->showSubKategori();
		$this->load->view('admin/informasi-subkategori-tambah', $data);
	}

	public function detail()
	{
		$data['dataDetail'] = $this->adminModel->showDetail();
		$this->load->view('admin/informasi-detail-tambah', $data);
	}

}