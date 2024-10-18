<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		
        $this->load->library('Set_views');
	}

	public function index() {
		$this->Home();
	}

	public function Home()
	{
		$this->render($this->set_views->Home(), 'HOME');
	}
}
