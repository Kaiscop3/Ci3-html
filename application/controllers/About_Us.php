<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_Us extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('Set_views');
    }

    public function index() {
        $this->render();
    }

    public function Open_Hours()
    {
        $this->render($this->set_views->Open_Hours(),'OPEN HOURS');
    }

    public function Library_Commitee()
    {
        $this->render($this->set_views->Library_Commitee(),'LIBRARY COMMITEE');
    }
    
    public function Vision_Mission_and_Objectives() {
        $this->render($this->set_views->Vision_Mission_and_Objectives(), 'MISSION VISION & OBJECTIVES');
    }
}