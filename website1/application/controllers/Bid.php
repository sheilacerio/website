<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bid extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();    
		$this->load->model('item_model');
		$this->load->model('bid_model');
	    $this->load->helper('url_helper');
	} 
	
	public function index() 
	{
		$data['bids'] = $this->bid_model->get_bids(); 
		$data['title'] = 'BIDS'; 

		$this->load->view('/header', $data);
        $this->load->view('bid/index', $data);
        $this->load->view('/footer');		
	}
	
	public function create($id)
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Create a Bid';	 
		$item = $this->item_model->get_item($id);
	  
		$data['itemname'] = $item['name']; 
		$data['clientname'] = 'CLIENT';
		
	    $this->form_validation->set_rules('name', 'Name', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {      	
	        $this->load->view('/header', $data);
	        $this->load->view('bid/create');
	        $this->load->view('/footer');
	    }
	    else
	    {		   	
	        $this->bid_model->set_bid();   
	
			$data['clients'] = $this->client_model->get_bids(); 
			$data['title'] = 'BIDS';
			
			$this->load->view('/header', $data);
	        $this->load->view('client/index', $data);
	        $this->load->view('/footer');
	    }   
	}
}