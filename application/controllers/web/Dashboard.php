<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		//$this->load->model('mod_user');
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

}
