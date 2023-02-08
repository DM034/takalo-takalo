<?php
$izy['data']="";
if(isset($data)){
    $izy['data']=$data;
}

$this->load->view('templates/headerAdmin');
$this->load->view($content,$izy);
$this->load->view('templates/footer');