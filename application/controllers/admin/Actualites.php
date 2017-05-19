<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actualites extends CI_controller {
    public function __construct(){
        parent::__construct();
    }

    public function Index() {
        $this->checkConnect();

        if ($this->input->post('modifier')) {
            foreach ($this->input->post('new') as $key => $newArray) {
                $new = new News();
                $new->init($newArray);

                if ($new->update()) {
                    header('location:'.base_url().'admin/dashboard/index');
                }
            }
        }

        $news = News::getList();
        switch(true) {
            case count($news) < 1:
                $news = array();
                $news[] = new News();
            case count($news) < 2:
                $news[] = new News();
            case count($news) < 3:
                $news[] = new News();
                break;
        }

        $datas['news'] = $news;
        $this->load->view('admin/view_Header');
        $this->load->view('admin/view_Actualites', $datas);
        $this->load->view('admin/view_Footer');
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

}
