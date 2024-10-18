<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Online_Resources extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    
        $this->load->library('Set_views');
    }

    public function index() {
        $this->render();
    }

    public function Faculty_Research_Journal()
    {
        $this->render($this->set_views->Faculty_Research_Journal(), 'FACULTY RESEARCH JOURNAL');
    }
}
