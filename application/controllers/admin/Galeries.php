<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeries extends CI_controller {
    public function __construct(){
        parent::__construct();
    }

    public function Index() {
        $this->checkConnect();
        header('location:'.base_url().'admin/dashboard');
    }

    protected function checkConnect() {

        if ($this->session->userdata('user_input')) {

            $login = $this->session->userdata('user_input');

            $photographe = Photographe::getByPseudo($login);

            if(!($photographe instanceOf Photographe)) {
                $this->Deconnexion();
            }
        } else {
            header('location:'.base_url().'admin/');
        }
    }

    public function Deconnexion() {

        if ($this->session->userdata('user_input')) {

            $this->session->unset_userdata('user_input');
            header('location:'.base_url().'admin/');

        } else {

            header('location:'.base_url().'admin/');

        }
    }

    public function update()
    {
        $this->checkConnect();

        $gallery  = new Gallery();
        $pictures = array();

        $galleryId = $this->input->get('galleryId');
        if (isset($galleryId)) {
            $gallery = Gallery::getById($galleryId);
        }

        if (isset($gallery->id)) {
            $pictures = Picture::getList(array('galleryId' => $gallery->id));
        }

        if (count($pictures) < 1) {
            $pictures = array(new Picture());
        }

        if ($this->input->post('modifier')) {
            $gallery->setName($this->input->post('gallery[name]'));
            $gallery->shortDescription = $this->input->post('gallery[shortDescription]');

            if (isset($_FILES['gallery']['galleryPicture']['name'])) {
                $gallery->file = $_FILES['gallery']['galleryPicture'];
            }

            if ($gallery->update()) {
                $picturesIds = array();

                $pictureFiles = array();
                if (isset($_FILES['picture']) && count($_FILES['picture'])) {
                    $pictureFiles = Picture::reArrayFiles($_FILES['picture']);
                }
                
                foreach ($this->input->post('picture') as $index => $pictureArray) {
                    $picture = new Picture();

                    $picture->init($pictureArray);
                    $picture->galleryId = $gallery->id;

                    if (isset($pictureFiles[$index]) && $pictureFiles[$index]['name'] != '') {
                        $picture->file = $pictureFiles[$index];
                    }

                    if ($picture->update()) {
                        $pictures[]    = $picture;
                        $picturesIds[] = $picture->id;
                    }
                }

                if (! is_null($pictures)) {
                    foreach ($pictures as $oldPicture) {
                        if (! in_array($oldPicture->id, $picturesIds)) {
                            $oldPicture->delete();
                        }
                    }
                }
                header('location:'.base_url().'admin/dashboard/index');
            }
        }

        $datas['gallery']  = $gallery;
        $datas['pictures'] = $pictures;
        $datas['editMode'] = 'Ajouter';
        $this->load->view('admin/view_Header');
        $this->load->view('admin/view_EditGalerie', $datas);
        $this->load->view('admin/view_Footer');
    }

    public function supprimer() {
        $this->checkConnect();
        $galleryId = $this->input->get('galleryId');
        if (!isset($galleryId)) {
            header('location:'.base_url().'admin/dashboard/index');
        }
        $gallery = Gallery::getById($galleryId);
        $gallery->delete();

        header('location:'.base_url().'admin/dashboard/index');
    }

}
