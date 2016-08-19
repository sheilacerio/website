<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model'); 
		$this->load->model('bid_model');
	    $this->load->helper('url_helper');
	}   
	
	public function index()
	{                           
		$data['items'] = $this->item_model->get_items();

		//$bids = array();
		//$i = 0;		
		//foreach ($data['items'] as $item):
		//	$iid = $item['id']; 
		//	$bids[$i] = $this->bid_model->get_bids($iid); 
		//	$i++;
	   // endforeach; 
		//$data['bids'] = $bids;
				
		$data['title'] = 'ITEMS'; 
		
		$this->load->view('/header', $data);
        $this->load->view('item/index', $data);
        $this->load->view('/footer');
	}



	public function view($id)
	{
		$data['item'] = $this->item_model->get_item($id); 
		$data['title'] = 'ITEM';     
		 
		$this->load->view('/header', $data);
        $this->load->view('item/view', $data);
        $this->load->view('/footer');
	} 
	
	public function create()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data['title'] = 'Create an Item';

	    $this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('description', 'Description', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('/header', $data);
	        $this->load->view('item/create');
	        $this->load->view('/footer');

	    }
	    else
	    {    		
	        $this->item_model->set_item();   
	
			$data['items'] = $this->item_model->get_items(); 
			$data['title'] = 'ITEMS';
			
			$this->load->view('/header', $data);
	        $this->load->view('item/index', $data);
	        $this->load->view('/footer');
	    }		
	} 
	public function edit($id){
	  $data[$item] =$this->item_model->get_item_by_id($id);
	  $this->load->view('edit',$data);
	}
	
	public function update()
	{
	
	$id = $this->uri->segment(3);
		$this->load->helper('form');
	    $this->load->library('form_validation');

	     $data['title'] = 'Update an Item';
	     $data['item'] =$this->item_model->get_item_by_id($id);

	    $this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('description', 'Description', 'required');
	     if ($this->form_validation->run() === FALSE)
	    {
	    	$this->load->view('header',$data);
	       $this->load->view('item/update', $data);
	        $this->load->view('footer');
	    }
	    else{
	    	$this->item_model->set_item($id);
	 	redirect(site_url('item/index'));
	  }
	}
	 public function delete($id){

   	$id = $this->uri->segment(3);
   	$this->item_model->delete($id);
     redirect(site_url('item/index'));



	}
}
