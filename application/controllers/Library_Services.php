<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Library_Services extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    
        $this->load->library('Set_views');
    }

    public function index() {
        $this->render();
    }

    public function Turnitin() {
        $this->render($this->Library_Services->Turnitin(), 'LIBRARY SERVICES', 'TURNITIN');
    }

    public function Printing_Service()
    {
        $this->render($this->Library_Services->Printing_Service(), 'LIBRARY SERVICES', 'TURNITIN');
    }

    public function Borrowing_and_Returning()
    {
        $this->render($this->Library_Services->Borrowing_and_Returning(), 'BORROWING AND RETURNING');
    }
    
    public function Referrals()
    {
        $this->render($this->Library_Services->Referrals(), 'REFERRALS');
    }
    
    public function Library_Orientation()
    {
        $this->render($this->Library_Services->Library_Orientation(), 'LIBRARY ORIENTATION');
    }
    
    public function Ask_Dora()
    {
        $this->render($this->Library_Services->Ask_Dora(), 'ASK DORA');
    }
    
}