<?php
    class AdminControll extends CI_Controller{
        public function getNbUser(){
            $this->load->model('Entana','user');
            $nb = $this->user->getCountUser();
            $data['nb']=$nb;
            $data['content']='nbUser';
            $this->load->view('templates/templateAdmin',$data);

        }
        public function getCountChange(){
            $this->load->model('Entana','user');
            $nb = $this->user->getCountEchange();
            $data['nb']=$nb;
            $data['content']='nbChange';
            $this->load->view('templates/templateAdmin',$data);

        }
    }

?>