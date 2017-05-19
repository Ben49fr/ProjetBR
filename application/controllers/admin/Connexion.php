<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion extends CI_controller {
	public function __construct(){
		parent::__construct();
	}

	 public function Index() {

        if (!$this->session->userdata('user_input')) {

            $login = $this->input->post('pseudo_photographe');
            $mdp = $this->input->post('mot_passe_photographe');
            $connexion = $this->input->post('connexion');
            $inscription = $this->input->post('inscription');

            if($login !=FALSE && $mdp!=FALSE && $connexion!=FALSE) {

                $photographe = Photographe::getByPseudo($login);

                if($photographe instanceOf Photographe && $photographe->checkPassword($mdp)){

                    $this->session->set_userdata('user_input', $login);
                    header('location:'.base_url().'admin/dashboard/index');

                } else {

                    $data['error']='Le mot de passe ou l\'identifiant est mauvais';
                    $this->load->view('admin/view_Connexion',$data);

                }

            } else {
                $this->load->view('admin/view_Connexion');
            }
        }
        else {
            header('location:'.base_url().'admin/dashboard/index');
        }
    }

}
