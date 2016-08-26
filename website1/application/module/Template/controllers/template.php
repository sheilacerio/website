<?php
class Template extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function call_admin_template($data = NULL)
	{
		//to call the admin template view
		this->load->view('admin_template_v', $data);
	}
}