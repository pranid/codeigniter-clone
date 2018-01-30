<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{

    public function index()
    {
        $this->load->view('viw_template', array('content' => 'viw_login', 'menu' => null));
    }

    public function register()
    {
        $this->load->view('viw_template', array('content' => 'viw_register', 'menu' => null));
    }

    public function home()
    {
        $this->load->view('viw_template', array('content' => 'viw_dashboard', 'menu' => 'viw_menu'));
    }
}
