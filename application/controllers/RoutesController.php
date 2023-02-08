<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require("BaseController.php");
class RoutesController extends BaseController{
    public function index()
    { 
        $page='listItem';
        
        $this->load->model('Entana','entana');
        $item = array();
        $item = $this->entana->getAllEntana($_SESSION['id']);
        $sary = array();
        $users =array();
        foreach($item as $items){
            $sary[] = $this->entana->getSary($items['idEntana']);
            $users[] = $this->entana->getUserById($items['idUser']);
        }
        
        $data['sary']=$sary;
        $data['users']=$users;
        $data['item']=$item;
        $data['content']=$page;
        $this->load->view('templates/template',$data);
    }
    public function indexAdmin(){
        $data['content']='acceuil';
        $this->load->view('templates/templateAdmin',$data);

    }
    public function addItem(){
        $data['content']='Input';
        $this->load->view('templates/template',$data);
    }
    public function gestionCat(){
        $data['content']='categorie';
        $this->load->view('templates/templateAdmin',$data);

    }
}