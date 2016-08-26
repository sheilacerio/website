<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


  public function __construct()
 {
    parent::__construct();
    $this->load->model('profile_model');
//$this->load->model('User_model', 'user_model', TRUE);
      $this->load->helper(array('form', 'url'));
  } 
  public function index()
  {
    $data['user'] = $this->session->userdata;
    $data['profiles'] = $this->profile_model->my_profiles(); 
    $data['title'] = 'Profile';  
    
    $this->load->view('header', $data);
    $this->load->view('Profile/index', $data);
    $this->load->view('footer'); 
  }
   

  

  public function view($id = NULL){

 $this->load->helper('form');
  // $this->load->library('form_validation');


    // $this->form_validation->set_rules('name', 'Name', 'required');
   // $this->form_validation->set_rules('message', 'Message', 'required');
    // $this->form_validation->set_rules('message', 'Message', 'required');

  //  if ($this->form_validation->run() === FALSE)
   // {
      //$data['profile'] = $this->profile_model->get_profile($id);
      //$data['bids'] = $this->profile_model->get_profile($id);
      //$data['title'] = 'ITEM';
     // $data['id'] = $id;
    //  $data['user'] = $this->session->userdata;
    //  $this->load->view('header', $data);
     // $this->load->view('Profile/view', $data);
    //  $this->load->view('footer');

 //   }
  //  else
   // {

      //$bid_id = $this->item_model->set_profile($id);
      $data['profile'] = $this->item_model->get_profile($id);
     // $data['bids'] = $this->item_model->get_bids($id);

    //  $data['title'] = 'ITEM';
     $data['id'] = $id;
     // $data['newitem'] = true;
      $data['user'] = $this->session->userdata;

      $this->load->view('header', $data);
      $this->load->view('Profile/view', $data);
      $this->load->view('footer');
  //  }


  }
public function create()
 {
      $this->load->helper('form');
      $this->load->library('form_validation');

      //$data['title'] = 'Create Profile';

      // $this->form_validation->set_rules('name', 'Name', 'required');
     // $this->form_validation->set_rules('email', 'Email', 'required');
//
    //  if ($this->form_validation->run() === FALSE)
     // {
      //  $data['user'] = $this->session->userdata;
     //   $this->load->view('header', $data);
      //  $this->load->view('Profile/create');
      //  $this->load->view('footer');

    //  }
    //  else
    //  {


        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
          $error = array('error' => $this->upload->display_errors());

          // $this->load->view('upload_form', $error);
         $data['user'] = $this->session->userdata;
          $this->load->view('header', $data);
          $this->load->view('Profile/create', $error);
          $this->load->view('footer');
        }
        else
        {

          $image_data = array('upload_data' => $this->upload->data());

          // $data['items'] = $this->item_model->get_items();
          $data['title'] = 'Profile';
          $data['image'] = $image_data;
         $data['user'] = $this->session->userdata;

          $id = $this->profile_model->set_profile($image_data['upload_data']['file_name']);
          $data['profile'] = $this->profile_model->get_profile($id);

          $this->load->view('header', $data);
          $this->load->view('Profile/success', $data);
          $this->load->view('footer');

                // $this->load->view('upload_success', $data);
        }



     //}
  }
}
