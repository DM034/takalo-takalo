<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DatabaseAcces extends CI_Model 
{
    public function getItemsInShop()
    {
        $array=array();
        $query=$this->db->query("select * from user");
        foreach($query->result_array() as $row){
            $array['nom'][]=$row['nom'];
        }
        return $array;
    }
    public function login($mail,$pass){
        $query="select * from user where mail=%s or nom=%s and pass=%s";
        $query=sprintf($query,$this->db->escape($mail),$this->db->escape($mail),$this->db->escape($pass));
        $result=$this->db->query($query);
        if($result->num_rows()==1){
            return $result->result();
            
        } else {
            return false;
        }
    }
    public function sign($user,$pass,$mail){
        $query="insert into user values(NULL,%s,%s,%s,0)";
        $query=sprintf($query,$this->db->escape($user),$this->db->escape($mail),$this->db->escape($pass));
        $this->db->query($query);
        $sql="select idUser from user where nom=%s or mail=%s and pass=%s";
        $sql=sprintf($sql,$this->db->escape($user),$this->db->escape($mail),$this->db->escape($pass));
        // echo $sql;
        $result=$this->db->query($sql);
        $id=0;
        foreach($result->result_array() as $row){
            $id=$row['idUser'];
            // echo $row['idUser'];
        }
        return $id;
    }
    public function getUsers($critera){
        $query="select * from user where nom=%s";
        $query=sprintf($query,$this->db->escape($critera));
        $result=$this->db->query($query);
        $row=$result->row_array();
        return $row;
    }
}
