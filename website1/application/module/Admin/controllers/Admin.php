<?php

class Admin extends MY_Conroller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->template->call_admin_template();

	}
}
