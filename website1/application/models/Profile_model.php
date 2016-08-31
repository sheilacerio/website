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
     $user = $this->session->all_userdata();
      $query = $this->db->get_where('users', array('id' => $user['id']));
   
    return $query->result_array();
  }
 

 public function get_profile($id)
  {
     $user = $this->session->userdata;
    $query = $this->db->get_where('profile', array('id' => $id));
    return $query->row_array();
  }

    public function get_profile_by_user($user_id){
        $this->db
            ->from('profile')
            ->where('user_id', $user_id);

        $result = $this->db->get()->result_array();
        return empty($result) ? FALSE : $result[0];
    }
  
  
  

  public function set_profile($image)
  {
      
      $this->load->helper('url');


      // $id = url_title($this->input->post('id'), 'dash', TRUE);
      $user = $this->session->userdata;
      $data = array(

           'fname' => $this->input->post('fname'),
           'lname' => $this->input->post('lname'),
              'fb' => $this->input->post('fb'),
     'description' => $this->input->post('description'),
        'itemtype' => $this->input->post('itemtype'),
           'phone' => $this->input->post('phone'),
           'email' => $this->input->post('email'),
          'photo' => $image,
          'user_id' => $this->session->userdata('id')
             
  );

      $this->db->insert('profile', $data);
      return $this->db->insert_id();
  }


        public function has_profile($user_id){
            $this->db
                ->from('profile')
                ->where('user_id', $user_id);

            return $this->db->count_all_results();
        }

  }







