<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function dasar_hukum()
	{
		$part['menu'] = "template-part/menu";
		$part['content'] = "template-part/dasar-hukum";
		$this->load->model('webModel');

		$key = $this->uri->segment(3);
		
		$allMenu = $this->webModel->getAllMenu();
		$informationByKategori = $this->webModel->getInformationByKategori($key);

		$part['list_menu'] = [];
		$part['list_informasi'] = array();

		foreach ($allMenu->result() as $row) {
			$namaMenu = $row->nama_menu;
			$menu_seo = $row->menu_seo;
			if($row->parent_menu == NULL){
				$id = $row->id_menu;
				$part['list_menu']['menu_'.$id] = [
					'id'=>$id,
					'menu'=>$namaMenu,
					'menu_seo'=>$menu_seo
				];
			}
			else{
				$id = $row->parent_menu;
				$part['list_menu']['menu_'.$id]['sub_menu'][] = [
					'id'=>$row->id_menu,
					'menu'=>$namaMenu,
					'menu_seo'=>$menu_seo
				];
			}
		}
		$this->load->view('template-part/template', $part);
	}

	public function standar_layanan()
	{
		$part['menu'] = "template-part/menu";
		$part['content'] = "module/standar-layanan";
		$this->load->model('webModel');

		$key = $this->uri->segment(3);
		
		$allMenu = $this->webModel->getAllMenu();
		$informationByKategori = $this->webModel->getInformationByKategori($key);

		$part['list_menu'] = [];
		$part['list_informasi'] = array();

		foreach ($allMenu->result() as $row) {
			$namaMenu = $row->nama_menu;
			$menu_seo = $row->menu_seo;
			if($row->parent_menu == NULL){
				$id = $row->id_menu;
				$part['list_menu']['menu_'.$id] = [
					'id'=>$id,
					'menu'=>$namaMenu,
					'menu_seo'=>$menu_seo
				];
			}
			else{
				$id = $row->parent_menu;
				$part['list_menu']['menu_'.$id]['sub_menu'][] = [
					'id'=>$row->id_menu,
					'menu'=>$namaMenu,
					'menu_seo'=>$menu_seo
				];
			}
		}
		$this->load->view('template-part/template', $part);
	}

}