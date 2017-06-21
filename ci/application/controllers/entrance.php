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
		$this->load->model('login');
		// $this->load->library('excel/excel');

	}

	public function index()
	{
		session_start();
		if( isset($_SESSION['user_admin']) ){
			$data = array();
			$data['username'] = $_SESSION['user_admin'];
			$this->load->view('learn/common',$data);
			$this->load->view('learn/index');
		}else{
			$this->load->view('learn/login');
		}
		
	}

	public function login()
	{
		$this->db->save_queries = TRUE;
		$this->output->enable_profiler(TRUE);
		session_start();
		if(isset($_SESSION['user_admin'])){
			$data = array();
			$data['username'] = $_SESSION['user_admin'];
			$this->load->view('learn/common',$data);
			$this->load->view('learn/index');
		}
		$username = $_POST['username'];
		$pwd 	  = $_POST['password'];
		$res 	  = $this->login->validate(array('username'=>$username,'pwd'=>$pwd));
		if($res){
			
			$_SESSION['user_admin'] = $username;
			$data['username'] = $username;
			$this->load->view('learn/common',$username);
			$this->load->view('learn/index');
		}else{
			$this->load->view('learn/login');
		}
		// $this->output->set_header('Content-Type: application/json; charset=utf-8');
		// echo json_encode($_POST);
	}

	public function logout()
	{
		print_r(12);exit;
	}
}

