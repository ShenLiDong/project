<?php

	/*
	*	后台管理系统入口
	*	@author shenlidong
	*/
	class entrance extends CI_Controller 
{


	public function __construct()
	{	
		parent::__construct();

	}

	public function index()
	{
		// $this->load->helper('url');
		$this->config->load('export',true);
		$con = $this->config->item('export');
		print_r($con);exit;
		session_start();
		if( isset($_SESSION['user_admin']) ){
			$this->load->view('learn/common');
			$this->load->view('learn/index');
		}else{
			$this->load->view('learn/login');
		}
		
	}
}

