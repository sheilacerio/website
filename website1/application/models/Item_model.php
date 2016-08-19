<?php
class Item_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}  
	
	public function get_items()
	{
		$query = $this->db->get('item');
		
		//$this->db->select('*');
		//$this->db->from('item');
		//$this->db->join('bid', 'item.id = bid.item_id', 'LEFT');
		//$query = $this->db->get();
		
		return $query->result_array();
	
	}  
	
	public function get_item($id)
	{
		$query = $this->db->get_where('item', array('id' => $id));
		return $query->row_array();
	} 
	public function get_item_by_id($id)
	{ 
		$query = $this->db->get_where('item', array('id'=> $id)); 
		return $query->row_array();
		 }
	
	public function set_item()
	{
	    $this->load->helper('url');

	    $id = url_title($this->input->post('id'), 'dash', TRUE);

	    $data = array(  
			    'id' => $id,  
	          'name' => $this->input->post('name'),
	  'categoriesid' => $this->input->post('categoriesid'), 
    'shipment_title' => $this->input->post('shipment_title'), 
		     'width' => $this->input->post('width'),     
			'height' => $this->input->post('height'),     
			'length' => $this->input->post('length'),     
			'weight' => $this->input->post('weight'), 
	       'quality' => $this->input->post('quality'),
	   'description' => $this->input->post('description'), 
		  'selectid' => $this->input->post('selectid'),     
			'pickup' => $this->input->post('pickup'),     
	    'datepicker' => $this->input->post('datepicker'),     
		  'delivery' => $this->input->post('delivery'),  
	   'datepicker1' => $this->input->post('datepicker1'),     
			'active' => $this->input->post('active')     
			
	    ); 

	     $this->db->insert('item', $data);

	     	redirect(site_url('item/index'));
	}

	Public function edit($item,$id){
         $this->db->where('id',$id);
    	return $this->db->edit('item',$item);

	}


    public function update($item,$id)
    {
    	
    	$this->db->where('id',$id);
    	return $this->db->update('item',$data);
    }
    public function delete($id){
    	$this->db->where('id',$id);
    	return $this->db->delete('item');
    }


}








