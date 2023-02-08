<?php
    class EntanaControll extends CI_Controller{
        function getEntana(){
            $this->load->model('Entana','entana');
            $item = array();
            $item = $this->entana->getAllEntanaByIdUser($_SESSION['id']);
            $sary = array();
            foreach($item as $items){
                $sary[] = $this->entana->getSary($items['idEntana']);
            }

            $data['sary']=$sary;
            $data['item']=$item;

            $data['content']='myItem';
            $this->load->view('templates/template',$data);
            // $this->layout->view('page',$data);
        }   
        function getEntanaBynb($idEntana,$nb){
            $this->load->model('Entana','entana');
            $item = array();
            $item = $this->entana->getEntanaById($idEntana);

            $min = $item['prix']-($item['prix']*($nb/100));
            $max = $item['prix']+($item['prix']*($nb/100));

            $entana = $this->entana->getEntana($min,$max,$_SESSION['id']);
            // var_dump($entana);

            $sary = array();
            $users = array();
            $percent = array();
            foreach($entana as $entanas){
                $sary[] = $this->entana->getSary($entanas['idEntana']);
                $users[] = $this->entana->getUserById($entanas['idUser']);
                $percent[] = (($item['prix']-$entanas['prix'])*100)/$item['prix'];

            }
              
            $data['id']=$idEntana;
            $data['users']=$users;
            $data['percent']=$percent;
            $data['sary']=$sary;
            $data['item']=$entana;

            $data['content']='listItem';
            $this->load->view('templates/template',$data);
            // $this->layout->view('page',$data);
        } 
        function addEntana(){
            $this->load->model('Entana','entana');
            $this->form_validation->set_rules('nom','Name','required',array('required'=>'%s is required'));
            $this->form_validation->set_rules('desc','Description','required',array('required'=>'%s is required'));
            $this->form_validation->set_rules('prix','Price','required',array('required'=>'%s is required'));

            if($this->form_validation->run()==FALSE){
                redirect('RoutesController/addItem');
                
            } else {
                $nom=$this->input->post('nom');
                $desc=$this->input->post('desc');
                $prix=$this->input->post('prix');
                $id=$_SESSION['id'];
                
                $this->entana->addItem($id,$nom,$desc,$prix,$_FILES);
                
                redirect('RoutesController/index');
            }
            
        }
        function exange(){
            $this->load->model('Entana','entana');
            $echange = $this->entana->getEchangeByIdUser1($_SESSION['id']);
            $entana1 = array();
            $entana2 = array();
            $sary1 = array();
            $sary2 = array();
            $users = array();
            
            for ($i=0; $i < count($echange) ; $i++) { 
                $entana1[] = $this->entana->getEntanaById($echange[$i]['idEntana1']);
                $entana2[] = $this->entana->getEntanaById($echange[$i]['idEntana2']);
                $sary1[] = $this->entana->getSary($echange[$i]['idEntana1']);
                $sary2[] = $this->entana->getSary($echange[$i]['idEntana2']);
                $users[] = $this->entana->getUserById($echange[$i]['idUser2']);

            }
            $data['entana1'] = $entana1;
            $data['entana2'] = $entana2;
            $data['users'] = $users;
            $data['sary1'] = $sary1;
            $data['sary2'] = $sary2;
            $data['id'] = $echange;
            $data['content']='echange';
            $this->load->view('templates/template',$data);
            
        }
        function acceptChange($idEchange){
            $this->load->model('Entana','entana');
            $this->entana->acceptEchange($idEchange);
            redirect('RoutesController/index');

        }
        function declineChange($idEchange){
            $this->load->model('Entana','entana');
            $this->entana->declineEchange($idEchange);
            redirect('RoutesController/index');

        }
        function demande($idEntana){
            $this->load->model('Entana','entana');
            
            $entana1 = $this->entana->getEntanaById($idEntana);
            $entana2 = $this->entana->getAllEntanaByIdUser($_SESSION['id']);

            $users = array();
            $users = $this->entana->getUserById($entana1['idUser']);
            $data['entana1'] = $entana1;
            $data['entana2'] = $entana2;

            $sary = array();
            $sary1 = array();
            $sary1 = $this->entana->getSary($entana1['idEntana']);
            foreach($entana2 as $entana2s){
                $sary[] = $this->entana->getSary($entana2s['idEntana']);
            }

            $data['user'] = $users;
            $data['sary']=$sary;
            $data['sary1']= $sary1;
            $data['content'] = 'demande';

            $this->load->view('templates/template',$data);
        }
        function addChange($idEntana1,$idEntana2,$user1){
            $this->load->model('Echange','echange');
            // echo $idEntana1." ".$idEntana2." ".$user1;
            $this->echange->addEchange($idEntana1,$idEntana2,$user1,$_SESSION['id']);
            redirect('RoutesController/index');
        }

    }
?>