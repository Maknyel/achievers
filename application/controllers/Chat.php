<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

 public function __construct()
 {
  parent::__construct();

 }

 function index()
 {
  $this->load->view('chat_view');
 }


 public function apiplans(){
   $post = $this->input->post();
   echo json_encode(apiplans($post));
 }
}
?>
