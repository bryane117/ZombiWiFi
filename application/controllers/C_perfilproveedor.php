<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class C_perfilproveedor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('masterpage/v_head');
		$this->load->view('paginas/v_perfilproveedor');
		$this->load->view('masterpage/v_footer');
	}
}
