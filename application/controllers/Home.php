<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$part['menu'] = "template-part/menu";
		$this->load->model('webModel');
		
		$allMenu = $this->webModel->getAllMenu();

		$part['list_menu'] = [];
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
		// print_r($part['list_menu']);
		$this->load->view('home-view', $part);
	}
}
