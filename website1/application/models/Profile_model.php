<?php
class Profile_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_profiles()
  {
   // $user = $this->session->userdata;
    $query = $this->db->get('profile');
    return $query->result_array();
  }
  public function my_profiles()
  {
     $user = $this->session->userdata;
      $query = $this->db->get_where('profile', array('id' => $user['id']));
   
    return $query->result_array();
  }
 

 public function get_profile($id)
  {
     $user = $this->session->userdata;
    $query = $this->db->get_where('profile', array('id' => $id));
    return $query->row_array();
  } 
  
  
  

  public function set_profile($image)
  {
      
      $this->load->helper('url');


      // $id = url_title($this->input->post('id'), 'dash', TRUE);
      $user = $this->session->userdata;
      $data = array(

           'fname' => $this->input->post('fname'),
           'lname' => $this->input->post('lname'),
          'height' => $this->input->post('height'),
          'weight' => $this->input->post('weight'),
              'fb' => $this->input->post('fb'),
     'description' => $this->input->post('description'),
        'itemtype' => $this->input->post('itemtype'),
           'phone' => $this->input->post('phone'),
           'email' => $this->input->post('email'),
          'photo' => $image,
             
  );

      $this->db->insert('profile', $data);
      return $this->db->insert_id();
  }
  }







