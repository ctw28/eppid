<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_kategori_proses extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('adminModel');
 
	}

	public function index()
	{
		$data['id_menu'] = $this->input->post('inputParentSubKategori');
		$data['judul_informasi'] = $this->input->post('inputNamaSubKategori');
		$data['keterangan_informasi'] = $this->input->post('inputKeteranganSubKategori');
		$data['informasi_parent'] = $this->input->post('inputParent');

		if($this->adminModel->insertData('t_informasi', $data)){
			redirect('admin/informasi/sub_kategori');
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