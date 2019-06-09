<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function index()
	{
		$part['menu'] = "template-part/menu";
		$part['content'] = "template-part/content";
		$this->load->model('webModel');
		
		$allMenu = $this->webModel->getAllMenu();
		$informationByKategori = $this->webModel->getInformationByKategori(1);

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

		// echo json_encode($part['list_menu']);

		foreach ($informationByKategori->result() as $row) {
			$informasiKategori = $row->nama_kategori;
			$part['list_informasi']['kategori'] = $informasiKategori; 
			if($row->informasi_parent == NULL){
				$id = $row->id_informasi;
				$part['list_informasi']['informasi_'.$id] = [
					'id'=>$id,
					'judul_informasi'=>$row->judul_informasi,
					'jenis_detail'=>$row->jenis_detail,
					'informasi_detail'=>$row->informasi_detail
				];
			}
			else{
				$id = $row->informasi_parent;
				echo $id;
				$part['list_informasi']['informasi_'.$id]['sub_informasi'][] = [
					'id'=>$row->id_informasi,
					'judul_informasi'=>$row->judul_informasi,
					'jenis_detail'=>$row->jenis_detail,
					'informasi_detail'=>$row->informasi_detail
				];
			}

		}


		echo json_encode($part['list_informasi']);


		// print_r($part['list_informasi']);
		// $this->load->view('template-part/template', $part);
	}
}
