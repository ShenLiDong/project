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
		$this->load->library('excel/excel');

	}

	public function index()
	{
		session_start();
		if( isset($_SESSION['user_admin']) ){
			$this->load->view('learn/common');
			$this->load->view('learn/index');
		}else{
			$this->load->view('learn/login');
		}
		
	}
}

