<?php

    class Entana extends CI_Model{
        function search($key){
            $sql = "SELECT * FROM Entana WHERE description LIKE '%$key%'";
            echo $sql;
            $query = $this->db->query($sql);
            $data = array();
            foreach ($query->result_array() as $row) {
                $data[] = array(
                    'idEntana' => $row['idEntana'],
                    'nom' => $row['nom'],
                    'description' => $row['description'],
                    'prix' => $row['prix'],
                    'idUser' => $row['idUser']
                );
            }
            var_dump($data);
            return $data;
        }

        function getCountEchange(){
            $sql = "SELECT count(*) FROM Echange WHERE Etat!='en attente'";
            // echo $sql;
            $query = $this->db->query($sql);
            $data = $query->row_array();
            // var_dump($data);
            return $data;
        }

        function getCountUser(){
            $sql = "SELECT count(*) FROM User WHERE isAdmin=false";
            // echo $sql;
            $query = $this->db->query($sql);
            $data = $query->row_array();
            // var_dump($data);
            return $data;
        }
        function declineEchange($idEchange){
            $sql = "UPDATE Echange SET etat='decline' WHERE idEchange=%s";
            $sql = sprintf($sql, $this->db->escape($idEchange));
            $query = $this->db->query($sql);
            
        }

        function acceptEchange($idEchange){
            $s = "SELECT * FROM Echange WHERE idEchange=%s";
            $s = sprintf($s, $this->db->escape($idEchange));
            $q = $this->db->query($s);
            $data = array();
            foreach ($q->result_array() as $row) {
                $data = array(
                'idEchange' => $row['idEchange'],
                'idEntana1' => $row['idEntana1'],
                'idEntana2' => $row['idEntana2'],
                'idUser1' => $row['idUser1'],
                'idUser2' => $row['idUser2'],
                'etat' => $row['Etat']
                );
            }
            $sql = "UPDATE Echange SET etat='accepted' WHERE idEchange=%s";
            $sql = sprintf($sql, $this->db->escape($idEchange));
            $query = $this->db->query($sql);
            $sql1 = "UPDATE Entana SET idUser=".$data['idUser2']." WHERE idEntana=".$data['idEntana1']."";
            $sql2 = "UPDATE Entana SET idUser=".$data['idUser1']." WHERE idEntana=".$data['idEntana2']."";
            $query1 = $this->db->query($sql1);
            $query2 = $this->db->query($sql2);


        }

        function getSary($idEntana){
            $sql = "SELECT * FROM Sary WHERE idEntana=%s";
            $sql = sprintf($sql, $this->db->escape($idEntana));
            
            $query = $this->db->query($sql);
            $data = array();
            foreach ($query->result_array() as $row) {
                $data = array(
                'idSary' => $row['idSary'],
                'path' => $row['path'],
                'idEntana' => $row['idEntana']
                );
            }
            
            return $data;
        }
        function addItem($user,$nom,$desc,$prix,$files){
            $query="insert into entana values(NULL,%s,%s,%s,%s)";
            $query=sprintf($query,$this->db->escape($nom),$this->db->escape($desc),$this->db->escape($prix),$this->db->escape($user));
            $this->db->query($query);
            
            $sql="select idEntana from entana where nom=%s or description=%s and idUser=%s";
          
            $sql=sprintf($sql,$this->db->escape($nom),$this->db->escape($desc),$this->db->escape($user));
            $result=$this->db->query($sql);
            $id=0;
            foreach($result->result_array() as $row){
                $id=$row['idEntana'];
            }
            
            $config['updload_path']=base_url('/assets/img/');
            $config['allowed_types']='gif|jpg|png|jfif';
            $config['max_size']=2000;
            $config['max_width']=1500;
            $config['max_height']=1500;

            $this->load->library('upload',$config);
            $this->upload->$files   ;
            $name = basename($files['img']['name']);
            $query = "insert into sary values(NULL,%s,%s)";
            $query = sprintf($query,$this->db->escape($name),$this->db->escape($id));
            $this->db->query($query);

        }

        function getEchangeById($idEchange){
            $sql = "SELECT * FROM Echange WHERE idEchange=%s";
            $sql = sprintf($sql, $this->db->escape($idEchange));
            echo $sql;
            $query = $this->db->query($sql);
            $data = array();
            foreach ($query->result_array() as $row) {
                $data[] = array(
                'idEchange' => $row['idEchange'],
                'idEntana1' => $row['idEntana1'],
                'idEntana2' => $row['idEntana2'],
                'idUser1' => $row['idUser1'],
                'idUser2' => $row['idUser2'],
                'etat' => $row['etat']
                );
            }
            var_dump($data);
            return $data;
        }
        function getEchangeByIdUser1($idUser1){
            $sql = "SELECT * FROM Echange WHERE idUser1=%s and etat='en attente'";
            $sql = sprintf($sql, $this->db->escape($idUser1));
            // echo $sql;
            $query = $this->db->query($sql);
            $data = array();
            foreach ($query->result_array() as $row) {
                $data[] = array(
                'idEchange' => $row['idEchange'],
                'idEntana1' => $row['idEntana1'],
                'idEntana2' => $row['idEntana2'],
                'idUser1' => $row['idUser1'],
                'idUser2' => $row['idUser2'],
                'etat' => $row['Etat']
                );
            }
            // var_dump($data);
            return $data;
        }

        function getUserById($idUser){
            $sql = "SELECT * FROM User WHERE idUser=%s";
            $sql = sprintf($sql, $this->db->escape($idUser));
            // echo $sql;
            $query = $this->db->query($sql);
            $data = array();
            foreach ($query->result_array() as $row) {
                $data = array(
                'idUser' => $row['idUser'],
                'nom' => $row['nom'],
                'mail' => $row['mail'],
                'pass' => $row['pass'],
                'isAdmin' => $row['isAdmin']
                );
            }
            // var_dump($data);
            return $data;
        }


    function getEntanaById($idEntana){
        
        $sql = "SELECT * FROM Entana WHERE idEntana=%s";
        $sql = sprintf($sql, $this->db->escape($idEntana));
        $query = $this->db->query($sql);
        
        $row = $query->row_array();
       
        
        return $row;
    }

    function getEntana($min,$max,$idUser){
        $sql = "SELECT * FROM Entana WHERE prix>%s and prix<%s and idUser!=%s ";
        $sql = sprintf($sql, $this->db->escape($min), $this->db->escape($max), $this->db->escape($idUser));
        // echo $sql;
        $query = $this->db->query($sql);
        $items = array();

        foreach ($query->result_array() as $row) {
            $items[]=array(
                'idEntana' => $row['idEntana'],
                'nom'=> $row['nom'],
                'description'=> $row['description'],
                'prix' => $row['prix'],
                'idUser'=> $row['idUser']
            );
        }

        return $items;
    }
    function getAllEntanaByIdUser($idUser){
            
        $sql = "SELECT * FROM Entana WHERE idUser=%s";
        $sql = sprintf($sql, $this->db->escape($idUser));
       
        $query = $this->db->query($sql);
        $items = array();

        foreach ($query->result_array() as $row) {
            $items[]=array(
                'idEntana' => $row['idEntana'],
                'nom'=> $row['nom'],
                'description'=> $row['description'],
                'prix' => $row['prix'],
                'idUser'=> $row['idUser']
            );
        }

        return $items;
    }
    function getAllEntana($idUser){
            
        $sql = "SELECT * FROM Entana WHERE idUser!=%s";
        $sql = sprintf($sql, $this->db->escape($idUser));
       
        $query = $this->db->query($sql);
        $items = array();

        foreach ($query->result_array() as $row) {
            $items[]=array(
                'idEntana' => $row['idEntana'],
                'nom'=> $row['nom'],
                'description'=> $row['description'],
                'prix' => $row['prix'],
                'idUser'=> $row['idUser']
            );
        }

        return $items;
    }


}
?>