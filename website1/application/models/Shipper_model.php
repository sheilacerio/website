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
             'user_id' => $this->session->userdata('id')

      );

   
      $this->db->insert('shipper', $data);
      return $this->db->insert_id();
  }

    public function has_profile($user_id){
        $this->db
            ->from('shipper')
            ->where('user_id', $user_id);

        return $this->db->count_all_results();
    }

    public function get_shipper_by_user($user_id){
        $this->db
            ->from('shipper')
            ->where('user_id', $user_id);

        $result = $this->db->get()->result_array();
        return empty($result) ? FALSE : $result[0];
    }
  }
