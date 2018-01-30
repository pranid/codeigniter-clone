<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller
{

    public function index()
    {
        $this->load->view('viw_template', array('content' => 'viw_clients', 'menu' => 'viw_menu'));
    }

}

/* End of file Clients.php */
/* Location: ./application/controllers/Client.php */