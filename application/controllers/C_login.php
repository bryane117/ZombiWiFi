<?php


class C_login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){

		$this->load->view('paginas/V_login');

	}
}
