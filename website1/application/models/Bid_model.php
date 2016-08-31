<?php
class Bid_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}  
	
	public function get_bids($id)
	{
		//$query = $this->db->get('bid');
		$this->db->select('*');
		$this->db->from('bid');
		$this->db->where('item_id = ', $id);
		$query = $this->db->get();
		
		return $query->result_array();
	}  
	
	public function get_bid($id)
	{
		$query = $this->db->get_where('bid', array('id' => $id));
		return $query->row_array();
	} 
	
	public function set_bid()
	{
	    $this->load->helper('url');

	    $id = url_title($this->input->post('id'), 'dash', TRUE);

	    $data = array(  
			'id' => $id,  
	        'name' => $this->input->post('name'),
	    );

	    return $this->db->insert('bid', $data);
	}
}