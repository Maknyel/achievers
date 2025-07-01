<?php  
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class File extends CI_Model{ 
	public function insert($data = array()){ 
        $insert = $this->db->insert('image_file', $data); 
        return $insert?true:false; 
    } 
}