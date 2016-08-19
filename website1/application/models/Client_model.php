  <?php
class Client_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}  
	
	public function get_clients()
	{
		$query = $this->db->get('client');
		return $query->result_array();
	}  
	
	public function get_client($id)
	{
		$query = $this->db->get_where('client', array('id' => $id));
		return $query->row_array();
	} 
	
	public function set_client()
	{
	    $this->load->helper('url');

	    $id = url_title($this->input->post('id'), 'dash', TRUE);

	    $data = array(  
			'id' => $id,  
	        'name' => $this->input->post('name'),
	        'role_id' => $this->input->post('role_id'), 
		    'active' => $this->input->post('active'),      
	    );

	    return $this->db->insert('client', $data);
	}
}