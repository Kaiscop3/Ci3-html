<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public $template = array();
    public $data = array();
    public $middle = '';
    public $render_data = '';
    private $admin_data;

    function __construct()
    {

        parent::__construct();

        $this->data['message'] = '';

        $this->load->helper(array('form', 'language', 'url', 'date'));

        $this->data['admin_data'] = NULL;
    }

    public function render($middleParam = '', $title  = '')
    {

        if ($middleParam == '') {
            $middleParam = $this->middle;
        }
        $this->template['title'] = $title;
        $this->template['headerscripts'] = $this->load->view('Layout/HeaderScripts.php', $this->data, true);
        $this->template['toggler'] = $this->load->view('Layout/Toggler.php', $this->data, true);
        $this->template['header'] = $this->load->view('Layout/HeaderNavigation.php', $this->data, true);
        $this->template['image'] = $this->load->view('Layout/HomeImage.php', $this->data, true);
        $this->template['middle'] = $this->load->view($middleParam . '.php', $this->data, true);
        $this->template['footer'] = $this->load->view('Layout/FooterNavigation.php', $this->data, true);
        $this->template['endlinks'] = $this->load->view('Layout/FooterScripts.php', $this->data, true);

        $this->load->view('Layout/Front', $this->template);
    }
    public function render_login($middleParam = '', $title = '')
    {

        if ($middleParam == '') {
            $middleParam = $this->middle;
        }
        $this->template['title'] = $title;
        $this->template['header'] = $this->load->view('Layout/headlinks.php', $this->data, true);
        $this->template['middle'] = $this->load->view('login.php', $this->data, true);
        $this->template['footer'] = $this->load->view('Layout/end-scripts.php', $this->data, true);
        $this->load->view('Layout/LoginFront', $this->template);
    }
}
