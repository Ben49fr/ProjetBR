<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galerie extends CI_controller {
	public function __construct(){
		parent::__construct();
	}

	public function index($galleryName) {
		$galleryName = urldecode($galleryName);
		$gallery = Gallery::getOne(array('name' => str_replace('-', ' ', $galleryName)));

		if (is_null($gallery)) {
			header('location:'.base_url());
		}

		$pictures = Picture::getList(array('galleryId' => $gallery->id));

		$datas['gallery']  = $gallery;

		$datas['pictures'] = $pictures;

		$this->load->view('view_galerie', $datas);
	}

	public function picture ($pictureId)
	{
		$data['picture'] = Picture::getById($pictureId);

		$this->load->view('view_picture', $data);
	}
}
