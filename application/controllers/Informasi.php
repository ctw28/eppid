<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function tampil()
	{
		$part['menu'] = "template-part/menu";
		$part['content'] = "template-part/content";
		$this->load->model('webModel');

		$key = $this->uri->segment(3);
		// echo $key;
		
		$allMenu = $this->webModel->getAllMenu();
		$informationByKategori = $this->webModel->getInformationByKategori($key);

		$part['list_menu'] = [];
		$part['list_informasi'] = [];

		foreach ($allMenu->result() as $row) {
			$namaMenu = $row->nama_menu;
			$link = $row->link;
			if($row->parent_menu == NULL){
				$id = $row->id_menu;
				$part['list_menu']['menu_'.$id] = [
					'id'=>$id,
					'menu'=>$namaMenu,
					'link'=>$link
				];
			}
			else{
				$id = $row->parent_menu;
				$part['list_menu']['menu_'.$id]['sub_menu'][] = [
					'id'=>$row->id_menu,
					'menu'=>$namaMenu,
					'link'=>$link
				];
			}
		}

		foreach ($informationByKategori->result() as $row) {
			$informasiKategori = $row->nama_kategori;
			$part['list_informasi']['kategori'] = $informasiKategori; 
			if($row->informasi_parent == NULL){
				$id = $row->id_informasi;
				$part['list_informasi']['informasi_'.$id] = [
					'id'=>$id,
					'judul_informasi'=>$row->judul_informasi
				];
			}
			else{
				$id = $row->informasi_parent;
				$part['list_informasi']['informasi_'.$id]['sub_informasi']['detail_'.$row->id_informasi] = [
					'id'=>$row->id_informasi,
					'judul_informasi'=>$row->judul_informasi
				];

				$informationDetail = $this->webModel->getInformationDetail($row->id_informasi);

				foreach ($informationDetail->result() as $detail) {
					$part['list_informasi']['informasi_'.$id]['sub_informasi']['detail_'.$row->id_informasi]['detail'][] = [
						'jenis_detail'=>$detail->jenis_detail,
						'informasi_detail'=>$detail->informasi_detail
					];
				}
			}
		}
		// echo json_encode($part['list_informasi']);
		$this->load->view('template-part/template', $part);
	}
}