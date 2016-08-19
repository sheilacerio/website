<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	    $this->load->helper('url_helper');
	}   
	
	public function index()
	{
		$data['title'] = 'ADMIN'; 
		
		$this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
	} 
	
	public function customers()
	{
		$data['title'] = 'CUSTOMERS'; 
		
		$this->load->view('templates/header', $data);
        $this->load->view('admin/customers', $data);
        $this->load->view('templates/footer');		
	}
	
	public function couriers() 
	{
		$data['title'] = 'COURIERS'; 
		
		$this->load->view('templates/header', $data);
        $this->load->view('admin/couriers', $data);
        $this->load->view('templates/footer');		
	}
}
