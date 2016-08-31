<?php
class Item_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_items()
  {
//    $query = $this->db->get('item');

    // Fetch only items by user that is now banned
    $this->db
      ->from('item i')
      ->join('users u', 'u.id = i.user_id')
      ->where('u.is_active', 1);

    //$this->db->select('*');
    //$this->db->from('item');
    //$this->db->join('bid', 'item.id = bid.item_id', 'LEFT');
    //$query = $this->db->get();

    return $this->db->get()->result_array();
  }

  public function my_items()
  {
    $user = $this->session->userdata;
    $query = $this->db->get_where('item', array('user_id' => $user['id']));
    
    return $query->result_array();
  }

  public function get_item($id) //edit item
  {
       $user = $this->session->userdata;
    $query = $this->db->get_where('item', array('id' => $id));
    return $query->row_array(); //return only
  }

  public function set_item($image)
  {
      
      $this->load->helper('url');


      // $id = url_title($this->input->post('id'), 'dash', TRUE);
      $user = $this->session->userdata;
      $data = array(

            'category' => $this->input->post('category'),
               'title' => $this->input->post('title'),
               'width' => $this->input->post('width'),
              'height' => $this->input->post('height'),
              'length' => $this->input->post('length'),
              'weight' => $this->input->post('weight'),
             'quality' => $this->input->post('quality'),
         'description' => $this->input->post('description'),
            'itemtype' => $this->input->post('itemtype'),
      'pickuplocation' => $this->input->post('pickuplocation'),
      'shipmentpickup' => $this->input->post('shipmentpickup'),
     'deliverlocation' => $this->input->post('deliverlocation'),
     'shipmentdeliver' => $this->input->post('shipmentdeliver'),
               'photo' => $image,
             'user_id' => $user['id'],


      );

      $this->db->insert('item', $data);
      return $this->db->insert_id();
  }


  public function set_bid($id){
    $user = $this->session->userdata;
    $data = array(
      'item_id' => $id,
      'message' => $this->input->post('message'),
      'user_id' => $user['id']

    );
    $this->db->insert('bids', $data);
    return $this->db->insert_id();

  }

  public function get_bids($id)
  {
    $this->db->select('*');
    $this->db->from('bids');
    $this->db->where('item_id', $id);
    $this->db->join('users', 'users.id = bids.user_id');
    $query = $this->db->get();
    // $query = $this->db->get_where('bids', array('item_id' => $id));
    return $query->result_array();
  }

  //public function edit() {
  //  $user = $this->session->userdata;
  //  $data['item'] = $this->Item_model->get_item($id);
  //   $this->db->where('id', $id);
  //    return $this->db->edit('edit',$data);
//
 // }
  public function update ($id, $data) {
    $user = $this->session->userdata;
     $this->db->where('id', $id);
      return $this->db->update('item',$data);

  }
  public function delete($id) {
    $user = $this->session->userdata;
    $this->db->where('id', $id);
    $this->db->delete('item');

  }
}






