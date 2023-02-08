<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Echange extends CI_Model{
        public function addEchange($item1,$item2,$user1,$user2){
            $query="insert into echange values(NULL,%s,%s,%s,%s,'en attente')";
            $query=sprintf($query,$this->db->escape($item1),$this->db->escape($item2),$this->db->escape($user1),$this->db->escape($user2));
            $this->db->query($query);        
        }


      


}

?>