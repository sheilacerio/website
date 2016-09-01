<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agree extends CI_Controller{

   public function index(){

        $this->load->view('/agree');
        $this->load->view('footer');


    }
}