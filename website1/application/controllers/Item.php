<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model('item_model');
      $this->load->model('User_model', 'user_model', TRUE);
      $this->load->helper('url_helper');
      $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
    $data['title'] = 'ITEMS';
    $data['user'] = $this->session->userdata;
    $data['items'] = $this->item_model->my_items();
    $this->load->view('header', $data);
    $this->load->view('item/index', $data);
    $this->load->view('footer');
  }

  public function view($id = NULL)
  {

    $this->load->helper('form');
    //$this->load->library('form_validation');


    // $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('message', 'Message', 'required');
    // $this->form_validation->set_rules('message', 'Message', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $data['item'] = $this->item_model->get_item($id);
      $data['bids'] = $this->item_model->get_bids($id);
      $data['title'] = 'ITEM';
      $data['id'] = $id;
      $data['user'] = $this->session->userdata;
      $this->load->view('header', $data);
      $this->load->view('item/view', $data);
      $this->load->view('footer');

    }
    else
    {

      $bid_id = $this->item_model->set_bid($id);
      $data['item'] = $this->item_model->get_item($id);
      $data['bids'] = $this->item_model->get_bids($id);

      $data['title'] = 'ITEM';
      $data['id'] = $id;
      $data['newitem'] = true;
      $data['user'] = $this->session->userdata;

      $this->load->view('header', $data);
      $this->load->view('item/view', $data);
      $this->load->view('footer');
    }
    
  }

  public function create()
  {
      $this->load->helper('form');
      $this->load->library('form_validation');

      $data['title'] = 'Create an Item';

      // $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');

      if ($this->form_validation->run() === FALSE)
      {
        $data['user'] = $this->session->userdata;
        $this->load->view('header', $data);
        $this->load->view('item/create');
        $this->load->view('footer');

      }
      else
      {

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 75;
        $config['height']       = 50;


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
          $error = array('error' => $this->upload->display_errors());

          // $this->load->view('upload_form', $error);
          $data['user'] = $this->session->userdata;
          $this->load->view('header', $data);
          $this->load->view('item/create', $error);
          $this->load->view('footer');
        }
        else
        {

          $image_data = array('upload_data' => $this->upload->data());

          // $data['items'] = $this->item_model->get_items();
          $data['title'] = 'ITEMS';
          $data['image'] = $image_data;
          $data['user'] = $this->session->userdata;

          $item_id = $this->item_model->set_item($image_data['upload_data']['file_name']);
          $data['item'] = $this->item_model->get_item($item_id);

          $this->load->view('header', $data);
          $this->load->view('item/success', $data);
          $this->load->view('footer');

                // $this->load->view('upload_success', $data);
        }



      }
  }
  



  public function update($id)
  {

      $this->load->helper('form');
      $this->load->library('form_validation');
       

      $data['title'] = 'Update an Item';

      // $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('description', 'Description', 'required');
      //$data['item'] = $this->item_model->get_item($item_id);
       
 

      if ($this->form_validation->run() === FALSE)
      {
        $data['item'] = $this->item_model->get_item($id);
        $data['user'] = $this->session->userdata;
        $this->load->view('header', $data);
        $this->load->view('item/update');
        $this->load->view('footer');

      }
      else
      {


        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 75;
        $config['height']       = 50;


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
          $error = array('error' => $this->upload->display_errors());

          //$this->load->view('upload_form', $error);
          $data['user'] = $this->session->userdata;
          $this->load->view('header', $data);
          $this->load->view('item/update', $error);
          $this->load->view('footer');
        }
        else
        {

          $image_data = array('upload_data' => $this->upload->data());

         //$data['items'] = $this->item_model->get_item();
          $data['title'] = 'ITEMS';
          $data['image'] = $image_data;
         

          $item_id = $this->item_model->set_item($image_data['upload_data']['file_name']);
          $data['item'] = $this->item_model->get_item($id);
           $data['user'] = $this->session->userdata;

          $this->load->view('header', $data);
          $this->load->view('item/success', $data);
          $this->load->view('footer');

                // $this->load->view('upload_success', $data);
        }



      }
  
   }

   public function delete($id) {
     $this->item_model->delete($id);
     $this->index();
 
  }
}
