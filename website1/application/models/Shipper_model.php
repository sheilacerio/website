<?php
class Shipper_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_shippers()
  {
  //   $user = $this->session->userdata;
    $query = $this->db->get('shipper');
    return $query->result_array();
  }
  public function my_shippers()
  {
     $user = $this->session->userdata;
      $query = $this->db->get_where('shipper', array('id' => $user['id']));
   
    return $query->result_array();
  }

 public function get_shipper($id)
  {
     $user = $this->session->userdata;
    $query = $this->db->get_where('shipper', array('id' => $id));
    return $query->row_array();
  } 

  public function set_shipper($image)
  {
      
      $this->load->helper('url');


      // $id = url_title($this->input->post('id'), 'dash', TRUE);
      $user = $this->session->userdata;
      $data = array(

            'companyname' => $this->input->post('companyname'),
           'email' => $this->input->post('email'),
                  'phone' => $this->input->post('phone'),
                'profile' => $this->input->post('profile'),
             'photo' => $image,
             

      );

   
      $this->db->insert('shipper', $data);
      return $this->db->insert_id();
  }
  }
