<?php


class C_veradministradores extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('masterpage/v_head');
		$this->load->view('paginas/V_veradministradores');
		$this->load->view('masterpage/v_footer');
	}
}
