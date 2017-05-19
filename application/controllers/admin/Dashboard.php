<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_controller {
    public function __construct(){
        parent::__construct();
    }

    public function Index() {

        if ($this->session->userdata('user_input')) {

            $login = $this->session->userdata('user_input');

            $photographe = Photographe::getByPseudo($login);

            if($photographe instanceOf Photographe){

                $this->Affichage();

            }
            else {
                $this->Deconnexion();
            }
        }

        else {
            header('location:'.base_url().'admin/');
        }
    }
    protected function Affichage() {

        $datas['galleries'] = Gallery::getList();
        $this->load->view('admin/view_Header');
        $this->load->view('admin/view_Dashboard', $datas);
        $this->load->view('admin/view_Footer');
    }

    public function Deconnexion() {

        if ($this->session->userdata('user_input')) {

            $this->session->unset_userdata('user_input');
            header('location:'.base_url().'admin/');

        } else {

            header('location:'.base_url().'admin/');

        }
    }

}
