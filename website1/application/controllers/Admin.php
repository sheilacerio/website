<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model','admin');
    }

    public function index(){
        $this->load->view('admin/layout_view');
    }

    public function login(){
        $data['title'] = 'Admin Login';
        $data['user'] = $this->session->userdata;

        $this->load->view('header', $data);
        $this->load->view('admin/login_view', $data);
    }

    public function auth(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $result = $this->admin->auth($email, $password);

        if($result){
            $this->session->set_userdata(array(
                'user_id' => $result,
                'is_logged_in' => TRUE,
                'role' => 'admin'
            ));

            redirect('admin/users');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger mlt-30">Incorrect username and/or password.</div>');
            redirect('admin/login');
        }

    }

    public function logout(){
        $this->session->sess_destroy();
        redirect();
    }

    public function users(){
        $this->load->model('user_model','user');
        $data['users'] = $this->user->get_all();
        $data['content'] = $this->load->view('admin/user_view', $data, TRUE);
        $this->load->view('admin/layout_view', $data);
    }

    public function items(){

    }

    public function ajax_delete_user(){
        $user_id = $this->input->post('user_id');
        $result = FALSE;

        if($this->session->userdata('role') === 'admin'){
            $this->load->model('user_model','user');
            $result = $this->user->delete($user_id) ? TRUE : FALSE;
        }

        echo json_encode(array('success' => $result));
    }

    public function ajax_change_status(){
        $user_id = $this->input->post('user_id');
        $is_active = $this->input->post('status_id');

        $result = FALSE;

        if($this->session->userdata('role') === 'admin'){
            $this->load->model('user_model','user');
            $result = $this->user->change($user_id, 'is_active', $is_active) ? TRUE : FALSE;
        }

        echo json_encode(array('success' => $result));
    }
}