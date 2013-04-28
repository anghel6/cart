<?php

class Site_model extends CI_Model{

function getAll(){
$this->load->database();
$q=$this->db->get('data');
if($q->num_rows()>0){
foreach($q->result() as $row){
$data[]=$row;
}
return $data;

}
}
}


?>
