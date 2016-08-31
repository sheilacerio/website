<?php

class Message extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('message_model','message');
    }

    public function index(){
        $data['title'] = 'Messages';
        $data['user'] = $this->session->all_userdata();
        $data['messages'] = $this->message->get_all($this->session->userdata('id'));

        $this->load->view('header', $data);
        $this->load->view('messages/index_view', $data);
        $this->load->view('footer');
    }

    public function send($receiver_id, $profile){
        $this->message->create($receiver_id, $this->session->userdata('id'), $this->input->post('message'));
        if($profile == 'shipper'){
            redirect('shipper/index/'.$receiver_id);
        } else {
            redirect('profile/index/'.$receiver_id);
        }
    }
    
    public function reply($receiver_id, $parent_id){
        $this->message->create($receiver_id, $this->session->userdata('id'), $this->input->post('message'), $parent_id);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Message has been sent.</div>');
        redirect('message/index');
    }
}