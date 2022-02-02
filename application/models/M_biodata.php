<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_biodata extends CI_Model {
	
	public function getData(){
		$query	= $this->db->get('tb_bio');
		return $query->result_array();
	}

	public function sendData($data){
 		$this->db->insert('tb_bio', $data);
	}

}