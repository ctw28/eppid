<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function tampil()
	{
		$part['menu'] = "template-part/menu";
		$part['content'] = "template-part/content";
		$this->load->model('webModel');

		$key = $this->uri->segment(3);
		
		$allMenu = $this->webModel->getAllMenu();
		$informationByKategori = $this->webModel->getInformationByKategori('informasi/tampil/'.$key);

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


		foreach ($informationByKategori->result() as $row) {
			$idInformasi		= $row->id_informasi;
			$informasiKategori 	= $row->nama_menu;
			$part['kategori'] = $informasiKategori;
			$informasi = array();
			$data = array();
			$kategori = $row->nama_menu;

			$informasi = array(
				'id'=>$idInformasi,
				'judul_informasi'=>$row->judul_informasi,
				'info'=> array()
			);

		
			
			// jika memiliki detail
					
			$informationDetail = $this->webModel->getInformationDetail($idInformasi);
			if($informationDetail->num_rows()>0){

				foreach($informationDetail->result() as $detail) {
					$detail = array(
							'jenis_detail'=>$detail->jenis_detail,
							'informasi_detail'=>$detail->informasi_detail
					);
					array_push($informasi['info'], $detail);				
				}
			}


			$informationSubKategori = $this->webModel->getInformationDetailByParent($idInformasi);
			
			if($informationSubKategori->num_rows()>0){
				$informasi = array(
					'id'=>$idInformasi,
					'judul_informasi'=>$row->judul_informasi,
					'info' => array(),
					'sub_informasi' => array()
				);
					
				$informationDetailList = $this->webModel->getInformationDetail($idInformasi);
				if($informationDetailList->num_rows()>0){

					foreach($informationDetailList->result() as $detail) {
						$detail = array(
								'jenis_detail'=>$detail->jenis_detail,
								'informasi_detail'=>$detail->informasi_detail
						);
						array_push($informasi['info'], $detail);				
					}
				}

				foreach ($informationSubKategori->result() as $subMenu) {
					$data = array(
							'judul_informasi'=>$subMenu->judul_informasi,
							'detail' => array()
						);

					$informationDetail = $this->webModel->getInformationDetail($subMenu->id_informasi);

					foreach($informationDetail->result() as $detail) {
						$detail = array(
								'jenis_detail'=>$detail->jenis_detail,
								'informasi_detail'=>$detail->informasi_detail
						);
						array_push($data['detail'], $detail);				
					}
				array_push($informasi['sub_informasi'], $data);				
				}
			} //end jika memiliki sub kategori
			// array_push($informasi, $test);				
			array_push($part['list_informasi'], $informasi);
		}
		// echo json_encode($part['list_informasi']);
		// echo "{\"data\":" . json_encode($part['list_informasi']) . "}";
		$this->load->view('template-part/template', $part);
	}
}