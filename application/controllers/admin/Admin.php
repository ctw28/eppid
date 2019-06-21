<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		// print_r($part['list_menu']);
		// $this->load->view('admin/informasi-kategori-tambah');
		echo "aaaaaaaaaa";
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