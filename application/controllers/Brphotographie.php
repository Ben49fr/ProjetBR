<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brphotographie extends CI_controller {
	public function __construct(){
		parent::__construct();
	}

	public function index() {

		$datas['galleries'] = Gallery::getList();
		$datas['news']      = News::getList();

		$this->load->view('view_Brphotographie', $datas);
	}

}
