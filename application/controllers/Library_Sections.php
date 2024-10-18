<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Library_Sections extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    
        $this->load->library('Set_views');
    }

    public function index() {
        $this->Library_Sections();
    }

    public function Library_Sections() {
        $this->render($this->set_views->Library_Sections(), 'LIBRARY SECTIONS');
    }

    public function Collaborative_Room() {
        $this->render($this->set_views->Collaborative_Room(), 'COLLABORATIVE ROOM');
    }
    
    public function Discussion_Room() {
        $this->render($this->set_views->Discussion_Room(), 'DISCUSSION ROOM');
    }

    public function Theses_Section() {
        $this->render($this->set_views->Theses_Section(), 'THESES SECTION');
    }

    public function Reading_Area() {
        $this->render($this->set_views->Reading_Area(), 'READING AREA');
    }

    public function Computer_Section() {
        $this->render($this->set_views->Computer_Section(), 'COMPUTER SECTION');
    }

    public function Book_Therapy_Corner() {
        $this->render($this->set_views->Book_Therapy_Corner(), 'BOOK THERAPY CORNER');    
    }

    public function Periodicals() {
        $this->render($this->set_views->Periodicals(), 'PERIODICALS');
    }

}
