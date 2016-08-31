<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('client_model');
	    $this->load->helper('url_helper');
	} 
	
	public function index() 
	{
		$data['clients'] = $this->client_model->get_clients(); 
		$data['title'] = 'CLIENTS';  
		
		$this->load->view('/header', $data);
        $this->load->view('client/index', $data);
        $this->load->view('/footer');		
	}
	
	public function create()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Create a Client';	 

	    $this->form_validation->set_rules('name', 'Name', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('/header', $data);
	        $this->load->view('client/create');
	        $this->load->view('/footer');
	    }
	    else
	    {		   	
	        $this->client_model->set_client();   
	
			$data['clients'] = $this->client_model->get_clients(); 
			$data['title'] = 'CLIENTS';
			
			$this->load->view('/header', $data);
	        $this->load->view('client/index', $data);
	        $this->load->view('/footer');
	    }   
	}
}