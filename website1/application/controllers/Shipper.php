<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shipper extends CI_Controller {


  public function __construct()
 {
    parent::__construct();
    $this->load->model('shipper_model');
    //  $this->load->model('User_model', 'user_model', TRUE);
       $this->load->helper(array('form', 'url'));
  } 
  public function index($user_id = FALSE)
  {

      if(!$user_id){
          $user_id = $this->session->userdata('id');
      }
      $data['user'] = $this->session->userdata;
      $data['has_profile'] = $this->shipper_model->has_profile($user_id);

      if($data['has_profile']){
          $data['shipper'] = $this->shipper_model->get_shipper_by_user($user_id);
      }
      $data['own'] = $this->session->userdata('id') == $user_id;
        $data['title'] = 'Shipper';
    
    $this->load->view('header', $data);
    $this->load->view('shipper/index', $data);
    $this->load->view('footer'); 
  }
  

  public function view($id = NULL)
   {

    $this->load->helper('form');
   // $this->load->library('form_validation');


    // $this->form_validation->set_rules('name', 'Name', 'required');
  //  $this->form_validation->set_rules('message', 'Message', 'required');
    // $this->form_validation->set_rules('message', 'Message', 'required');

   // if ($this->form_validation->run() === FALSE)
  //  {
  //    $data['shipper'] = $this->shipper_model->get_shipper($id);
      //$data['bids'] = $this->item_model->get_bids($id);
    //  $data['title'] = 'ITEM';
    //  $data['id'] = $id;
    //  $data['user'] = $this->session->userdata;
    //  $this->load->view('header', $data);
    //  $this->load->view('Shipper/view', $data);
   //   $this->load->view('footer');

  //  }
  //  else
  //  {

      //$bid_id = $this->item_model->set_bid($id);
      $data['shipper'] = $this->shipper_model->get_shipper($id);
      //$data['bids'] = $this->item_model->get_bids($id);

   //   $data['title'] = 'ITEM';
      $data['id'] = $id;
   //   $data['newitem'] = true;
      $data['user'] = $this->session->userdata;

      $this->load->view('header', $data);
      $this->load->view('shipper/view', $data);
      $this->load->view('footer');
 //   }


  }

public function create()
 {
      $this->load->helper('form');
      $this->load->library('form_validation');

      //$data['title'] = 'Create Shipper';

   //   // $this->form_validation->set_rules('name', 'Name', 'required');
    //  $this->form_validation->set_rules('email', 'Email', 'required');
//
    //  if ($this->form_validation->run() === FALSE)
     // {
    //    $data['user'] = $this->session->userdata;
      //  $this->load->view('header', $data);
     //   $this->load->view('shipper/create');
     //   $this->load->view('footer');

   //   }
    //  else
    //  {


        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
          $error = array('error' => $this->upload->display_errors());

          // $this->load->view('upload_form', $error);
         $data['user'] = $this->session->userdata;
          $this->load->view('header', $data);
          $this->load->view('shipper/create', $error);
          $this->load->view('footer');
        }
        else
        {

          $image_data = array('upload_data' => $this->upload->data());

          // $data['items'] = $this->item_model->get_items();
        $data['title'] = 'Shipper';
          $data['image'] = $image_data;
         $data['user'] = $this->session->all_userdata();

          $id = $this->shipper_model->set_shipper($image_data['upload_data']['file_name']);
          $data['shipper'] = $this->shipper_model->get_shipper($id);

          $this->load->view('header', $data);
          $this->load->view('shipper/success', $data);
          $this->load->view('footer');

                // $this->load->view('upload_success', $data);
     //   }



      }
  }
}

  


















