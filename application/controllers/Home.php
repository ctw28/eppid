<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$part['menu'] = "template-part/menu";
		$this->load->view('home-view', $part);
	}
}
