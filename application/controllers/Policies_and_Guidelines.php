<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Policies_and_Guidelines extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    
        $this->load->library('Set_views');
    }

    public function index() {
        $this->render();
    }

    public function Conduct_of_Library_Users()
    {
        $this->render($this->set_views->Conduct_of_Library_Users(), 'CONDUCT OF LIBRARY USERS JOURNAL');
    }

    public function Borrowing_Rules()
    {
        $this->render($this->set_views->Borrowing_Rules(), 'CONDUCT OF LIBRARY USERS JOURNAL');
    }
}
