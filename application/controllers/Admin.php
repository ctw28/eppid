<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		// print_r($part['list_menu']);
		$this->load->view('admin/informasi-kategori-tambah');
	}
}
