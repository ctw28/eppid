<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_proses extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('adminModel');
 
	}

	public function index()
	{
		$data['id_informasi'] = $this->input->post('inputNamaMenu');
		$data['keterangan_menu'] = $this->input->post('inputKeteranganMenu');
		$data['menu_seo'] = $this->input->post('inputMenuSeo');
		if($this->input->post('inputParentMenu')=='')
			$data['parent_menu'] = NULL;
		else
			$data['parent_menu'] = $this->input->post('inputParentMenu');

		if($this->adminModel->insertData('t_menu', $data)){
			redirect('admin/informasi/kategori');
		}
		else{
			echo "ada masalah. coba lagi";
		}

	}
	
	// public function kategoriSimpan()
	// {
	// 	$this->load->model('adminModel');

	// 	$data['nama_kategori'] = $this->input->post('namaKategori');
	// 	$data['keterangan_kategori'] = $this->input->post('keteranganKategori');

	// 	$this->adminModel->simpan($data);
	// 	redirect('admin/DataAdmin');
	// }

	// public function hapus_pengaduan(){
	// 	$this->keamanan_admin->keamanan();

 // 		$key = $this->uri->segment(4);
		
	// 	$this->load->model('admin_model/model_pelanggan');
 //        $session_data = $this->session->userdata('logged_in');
	// 	$query  = $this->model_pelanggan->cek_pengaduan($key);
 //        foreach ($query -> result() as $row) {
 //                $nama = $row->nama;             
 //        }
		
	// 	if ($query->num_rows()>0)
	// 	{
	// 		$this->model_pelanggan->hapus_pengaduan($key, $data);
 //            simpan_log($session_data['nama_admin']." Menghapus pengaduan dari <span class='log_judul'>".$nama."</span>");        
	// 	}
	// 	redirect('admin/data_pengaduan');		
	// }	
}